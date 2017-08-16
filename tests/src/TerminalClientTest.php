<?php
/**
 * Bright Nucleus Jasper Client.
 *
 * SOAP client to interact with the Jasper Wireless Control Center.
 *
 * @package   BrightNucleus\JasperClient
 * @author    Alain Schlesser <alain.schlesser@gmail.com>
 * @license   MIT
 * @link      https://www.brightnucleus.com/
 * @copyright 2017 Alain Schlesser, Bright Nucleus
 */

namespace BrightNucleus\JasperClient\Tests;

use BrightNucleus\JasperClient\SoapTypes\Other\Iccids;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\GetModifiedTerminalsRequest;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\GetModifiedTerminalsResponse;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\GetTerminalDetailsRequest;
use BrightNucleus\JasperClient\SoapTypes\TerminalClient\GetTerminalDetailsResponse;
use BrightNucleus\JasperClient\TerminalClient;
use PHPUnit\Framework\TestCase;

/**
 * Class TerminalClientTest.
 *
 * @since  0.1.0
 *
 * @author Alain Schlesser <alain.schlesser@gmail.com>
 */
class TerminalClientTest extends TestCase
{

    /**
     * Test whether the class can be instantiated.
     *
     * @since 0.1.0
     */
    public function testClassInstantiation()
    {
        $object = new TerminalClient();
        $this->assertInstanceOf(TerminalClient::class, $object);
    }

    /**
     * Test whether a call to `GetModifiedTerminals` returns the correct message.
     *
     * @vcr   get-modified-terminals.yml
     *
     * @since 0.1.0
     */
    public function testGetModifiedTerminals()
    {
        $client = new TerminalClient();
        $result = $client->getModifiedTerminals(new GetModifiedTerminalsRequest(CISCO_JASPER_TEST_ACCOUNT_ID));
        $this->assertInstanceOf(GetModifiedTerminalsResponse::class, $result);
        $this->assertNotEquals(new \stdClass(), $result->getIccids());
    }

    /**
     * Test whether a call to `GetTerminalDetails` returns the correct message.
     *
     * @vcr   get-terminal-details.yml
     *
     * @since 0.1.1
     */
    public function testGetTerminalDetails()
    {
        $client = new TerminalClient();
        $iccids = Iccids::from('8965011603270414802');
        $result = $client->getTerminalDetails(new GetTerminalDetailsRequest($iccids));
        $this->assertInstanceOf(GetTerminalDetailsResponse::class, $result);
        $terminals = $result->getTerminals()->getTerminal();
        $this->assertCount(1, $terminals);
        $this->assertEquals('8965011603270414802', $terminals[0]->getIccid());
    }
}
