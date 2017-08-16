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

use BrightNucleus\JasperClient\BillingClient;
use BrightNucleus\JasperClient\SoapTypes\BillingClient\GetTerminalUsageRequest;
use PHPUnit\Framework\TestCase;

/**
 * Class BillingClientTest.
 *
 * @since  0.1.0
 *
 * @author Alain Schlesser <alain.schlesser@gmail.com>
 */
class BillingClientTest extends TestCase
{

    /**
     * Test whether the class can be instantiated.
     *
     * @since 0.1.0
     */
    public function testClassInstantiation()
    {
        $object = new BillingClient();
        $this->assertInstanceOf(BillingClient::class, $object);
    }

    /**
     * Test whether a call to `GetTerminalUsage` returns the correct message.
     *
     * @vcr   get-terminal-usage.yml
     *
     * @since 0.1.0
     */
    public function testGetTerminalUsage()
    {
        $client = new BillingClient();
        $result = $client->getTerminalUsage(new GetTerminalUsageRequest('8965011509230202858', new \DateTime('2017-07-01')));
        $this->assertEquals('ANZ', $result->getCustomer());
    }
}
