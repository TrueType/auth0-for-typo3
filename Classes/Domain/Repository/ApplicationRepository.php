<?php
declare(strict_types = 1);
namespace Bitmotion\Auth0\Domain\Repository;

use Bitmotion\Auth0\Domain\Model\Application;
use Bitmotion\Auth0\Exception\InvalidApplicationException;
use Psr\Log\LoggerAwareInterface;
use Psr\Log\LoggerAwareTrait;
use TYPO3\CMS\Core\Database\ConnectionPool;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Object\ObjectManager;
use TYPO3\CMS\Extbase\Persistence\Generic\PersistenceManager;

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

class ApplicationRepository implements LoggerAwareInterface
{
    use LoggerAwareTrait;

    /**
     * @throws InvalidApplicationException
     *
     * @return Application|array
     */
    public function findByUid(int $uid, bool $asObject = false)
    {
        if ($asObject === true) {
            return GeneralUtility::makeInstance(ObjectManager::class)
                                 ->get(PersistenceManager::class)
                                 ->getObjectByIdentifier($uid, Application::class);
        }
        $queryBuilder = GeneralUtility::makeInstance(ConnectionPool::class)->getQueryBuilderForTable('tx_auth0_domain_model_application');
        $queryBuilder
                ->select('*')
                ->from('tx_auth0_domain_model_application')
                ->where($queryBuilder->expr()->eq('uid', $queryBuilder->createNamedParameter($uid, \PDO::PARAM_INT)));

        $this->logger->debug(
            sprintf('[%s] Executed SELECT query: %s', 'tx_auth0_domain_model_application', $queryBuilder->getSQL())
        );

        $application = $queryBuilder->execute()->fetch();

        trigger_error('Retrieving application as array is deprecated and will be removed in the next major version.', E_USER_DEPRECATED);

        if (!empty($application)) {
            return $application;
        }

        throw new InvalidApplicationException(sprintf('No Application found for given id %s', $uid), 1526046354);
    }
}
