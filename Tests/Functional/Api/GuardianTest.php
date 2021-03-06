<?php

declare(strict_types=1);

/*
 * This file is part of the "Auth0" extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * Florian Wessels <f.wessels@Leuchtfeuer.com>, Leuchtfeuer Digital Marketing
 */

namespace Bitmotion\Auth0\Tests\Functional\Api;

use Bitmotion\Auth0\Api\Management\GuardianApi;
use Bitmotion\Auth0\Scope;
use Bitmotion\Auth0\Tests\Functional\Auth0TestCase;

class GuardianTest extends Auth0TestCase
{
    protected $scopes = [
        Scope::GUARDIAN_FACTOR_READ,
        Scope::GUARDIAN_FACTOR_UPDATE,
    ];

    /**
     * @test
     * @covers \Bitmotion\Auth0\Utility\ApiUtility::getGuardianApi
     */
    public function instantiateApi(): GuardianApi
    {
        $guardianApi = $this->getApiUtility()->getGuardianApi(...$this->scopes);
        self::assertInstanceOf(GuardianApi::class, $guardianApi);

        return $guardianApi;
    }

    // TODO: implement
}
