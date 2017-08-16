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

use SimpleXmlElement;
use SoapHeader;
use SoapVar;

/**
 * Class WsseUserTokenHeader.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\JasperClient
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
final class WsseUserTokenHeader extends SoapHeader
{

    const WSSE_NS = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd';
    const PASSWORD_TYPE = 'http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText';

    public static function createFrom(string $username, string $password)
    {
        // Creating WSS identification header using SimpleXML
        $root = new SimpleXMLElement('<root/>');

        $security = $root->addChild('wsse:Security', null, self::WSSE_NS);

        $usernameToken = $security->addChild('wsse:UsernameToken', null, self::WSSE_NS);
        $usernameToken->addChild('wsse:Username', $username, self::WSSE_NS);
        $usernameToken->addChild('wsse:Password', $password, self::WSSE_NS)
            ->addAttribute('Type', self::PASSWORD_TYPE);

        // Recovering XML value from that object
        $root->registerXPathNamespace('wsse', self::WSSE_NS);
        $full = $root->xpath('/root/wsse:Security');
        $auth = $full[0]->asXML();

        return new self(self::WSSE_NS, 'Security', new SoapVar($auth, XSD_ANYXML), true);
    }
}
