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

use BrightNucleus\JasperClient\EchoClient;
use BrightNucleus\JasperClient\SoapTypes\EchoClient\EchoRequest;
use Phpro\SoapClient\Exception\SoapException;
use PHPUnit\Framework\TestCase;

/**
 * Class EchoClientTest.
 *
 * @since  0.1.0
 *
 * @author Alain Schlesser <alain.schlesser@gmail.com>
 */
class EchoClientTest extends TestCase
{

    /**
     * Test whether the class can be instantiated.
     *
     * @since 0.1.0
     */
    public function testClassInstantiation()
    {
        $object = new EchoClient();
        $this->assertInstanceOf(EchoClient::class, $object);
    }

    /**
     * Test whether an unauthenticated request returns an error.
     *
     * @vcr   echo-unauthenticated.yml
     *
     * @since 0.1.0
     */
    public function testUnauthenticatedCallToEcho()
    {
        $client = new EchoClient();
        $client->setApiKey('nonsense');
        $this->expectException(SoapException::class);
        $client->echo(new EchoRequest('Hello World!'));
    }

    /**
     * Test whether a call to `Echo` returns the correct message.
     *
     * @vcr   echo-hello-world.yml
     *
     * @since 0.1.0
     */
    public function testCallToEcho()
    {
        $client = new EchoClient();
        $result = $client->echo(new EchoRequest('Hello World!'));
        $this->assertEquals('Hello World!', $result->getValue());
    }
}
