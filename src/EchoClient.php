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

namespace BrightNucleus\JasperClient;

use BrightNucleus\JasperClient\SoapTypes\EchoClient\EchoRequest;
use BrightNucleus\JasperClient\SoapTypes\EchoClient\EchoResponse;
use Phpro\SoapClient\Exception\SoapException;

/**
 * Class EchoClient.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\JasperClient
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class EchoClient extends AbstractClient
{
    const WSDL_IDENTIFIER = 'echo';

    /**
     * @param EchoRequest $request
     *
     * @return EchoResponse
     * @throws SoapException If an error occurs.
     */
    public function echo(EchoRequest $request): EchoResponse
    {
        return $this->client->call('Echo', $request);
    }
}
