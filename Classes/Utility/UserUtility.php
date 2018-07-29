<?php
declare(strict_types=1);

namespace Bitmotion\Auth0\Utility;

/***
 *
 * This file is part of the "Auth0 for TYPO3" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2018 Florian Wessels <f.wessels@bitmotion.de>, Bitmotion GmbH
 *
 ***/
use Bitmotion\Auth0\Domain\Model\Dto\EmAuth0Configuration;
use TYPO3\CMS\Core\Crypto\Random;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Class UserUtility
 * @package Bitmotion\Auth0\Utility
 */
class UserUtility
{
    /**
     * @param string $tableName
     * @param string $auth0UserId
     * @param bool   $returnUserObject
     *
     * @return bool|array
     */
    public static function checkIfUserExists(string $tableName, string $auth0UserId, bool $returnUserObject = true)
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($tableName);
        $user = $queryBuilder
            ->select('*')
            ->from($tableName)
            ->where(
                $queryBuilder->expr()->eq('auth0_user_id', $queryBuilder->createNamedParameter($auth0UserId))
            )->execute()
            ->fetch();

        if ($user === false) {
            return false;
        }

        if ($returnUserObject === true) {
            return $user;
        }

        return true;
    }

    /**
     * Inserts a new frontend user
     *
     * @param string $tableName
     * @param array  $auth0User
     */
    public static function insertFeUser(string $tableName, array $auth0User)
    {
        $emConfiguration = new EmAuth0Configuration();
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($tableName);
        $queryBuilder
            ->insert($tableName)
            ->values(
                [
                    'tx_extbase_type' => 'Tx_Auth0_FrontendUser',
                    'pid' => $emConfiguration->getUserStoragePage(),
                    'tstamp' => time(),
                    'username' => $auth0User['email'],
                    'password' => GeneralUtility::makeInstance(Random::class)->generateRandomHexString(50),
                    'email' => $auth0User['email'],
                    'crdate' => time(),
                    'auth0_user_id' => $auth0User['user_id'],
                    'auth0_metadata' => \GuzzleHttp\json_encode($auth0User['user_metadata']),
                ]
            )->execute();
    }

    /**
     * Inserts a new backend user
     *
     * @param string $tableName
     * @param array  $auth0User
     */
    public static function insertBeUser(string $tableName, array $auth0User)
    {
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable($tableName);
        $queryBuilder
            ->insert($tableName)
            ->values(
                [
                    'pid' => 0,
                    'tstamp' => time(),
                    'username' => $auth0User['email'],
                    'password' => GeneralUtility::makeInstance(Random::class)->generateRandomHexString(50),
                    'email' => $auth0User['email'],
                    'crdate' => time(),
                    'auth0_user_id' => $auth0User['user_id'],
                ]
            )->execute();
    }
}