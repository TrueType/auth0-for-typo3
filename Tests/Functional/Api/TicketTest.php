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

use Bitmotion\Auth0\Api\Management\TicketApi;
use Bitmotion\Auth0\Domain\Model\Auth0\Management\Ticket;
use Bitmotion\Auth0\Scope;
use Bitmotion\Auth0\Tests\Functional\Auth0TestCase;

class TicketTest extends Auth0TestCase
{
    protected $scopes = [
        Scope::TICKET_CREATE,
    ];

    /**
     * Tries to instantiate the TicketApi
     *
     * @test
     * @covers \Bitmotion\Auth0\Utility\ApiUtility::getTicketApi
     */
    public function instantiateApi(): TicketApi
    {
        $ticketApi = $this->getApiUtility()->getTicketApi(...$this->scopes);
        self::assertInstanceOf(TicketApi::class, $ticketApi);

        return $ticketApi;
    }

    /**
     * @test
     * @depends instantiateApi
     * @covers \Bitmotion\Auth0\Api\Management\TicketApi::createEmailVerificationTicket
     */
    public function createEmailVerificationTicket(TicketApi $ticketApi): void
    {
        $ticket = $ticketApi->createEmailVerificationTicket($this->getUser(), '', 5);
        self::assertInstanceOf(Ticket::class, $ticket);
        self::assertNotEmpty($ticket->getTicket());
    }

    /**
     * @test
     * @depends instantiateApi
     * @covers \Bitmotion\Auth0\Api\Management\TicketApi::createPasswordChangeTicket
     */
    public function createPasswordChangeTicket(TicketApi $ticketApi): void
    {
        $ticket = $ticketApi->createPasswordChangeTicket($this->getUser(), '', 5);
        self::assertInstanceOf(Ticket::class, $ticket);
        self::assertNotEmpty($ticket->getTicket());
    }

    /**
     * @test
     * @depends instantiateApi
     * @covers \Bitmotion\Auth0\Api\Management\TicketApi::createPasswordChangeTicketByEmail
     */
    public function createPasswordChangeTicketByEmail(TicketApi $ticketApi): void
    {
        // TODO: Replace static string
        $ticket = $ticketApi->createPasswordChangeTicketByEmail($this->getUser()->getEmail(), 'con_VAr3ro5CceHHNCwj', '', 5);
        self::assertInstanceOf(Ticket::class, $ticket);
        self::assertNotEmpty($ticket->getTicket());
    }
}
