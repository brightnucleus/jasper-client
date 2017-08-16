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

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;
use Phpro\SoapClient\Client;
use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;
use Phpro\SoapClient\Type\ResultInterface;
use SoapHeader;

/**
 * Class JasperClient.
 *
 * All specific clients will extend this base client.
 *
 * @since   0.1.0
 *
 * @package BrightNucleus\JasperClient
 * @author  Alain Schlesser <alain.schlesser@gmail.com>
 */
class JasperClient extends Client
{
    const KEY_ENVIRONMENTS = 'environments';
    const KEY_XSD_URI = 'xsd_uri';
    const KEY_WSDL_URIS = 'wsdl_uris';
    const KEY_SOAP_OPTIONS = 'soap_options';

    const CONSTANT_ENVIRONMENT = 'CISCO_JASPER_API_ENVIRONMENT';
    const CONSTANT_API_LICENSE_KEY = 'CISCO_JASPER_API_LICENSE_KEY';
    const CONSTANT_USERNAME = 'CISCO_JASPER_USERNAME';
    const CONSTANT_PASSWORD = 'CISCO_JASPER_PASSWORD';

    /**
     * API license key to use.
     *
     * @since 0.1.0
     *
     * @var string
     */
    protected $apiKey;

    /**
     * Login username to use.
     *
     * @since 0.1.0
     *
     * @var string
     */
    protected $username;

    /**
     * Login password to use.
     *
     * @since 0.1.0
     *
     * @var string
     */
    protected $password;

    /**
     * Execute a call through the SOAP client.
     *
     * @since 0.1.0
     *
     * @param string           $method
     * @param RequestInterface $request
     *
     * @return ResultInterface
     * @throws SoapException If an error occurs.
     */
    public function call($method, RequestInterface $request): ResultInterface
    {
        $apiKey   = $this->getProperty('apiKey', static::CONSTANT_API_LICENSE_KEY);
        $username = $this->getProperty('username', static::CONSTANT_USERNAME);
        $password = $this->getProperty('password', static::CONSTANT_PASSWORD);

        /** @var JasperRequest $request */
        $request = $request->withLicenseKey($apiKey);

        $header = WsseUserTokenHeader::createFrom($username, $password);
        $this->applySoapHeaders([$header]);

        try {
            $response = parent::call($method, $request);
        } catch (SoapException $exception) {
            $debugException = new DebuggingSoapException(
                $exception->getMessage(),
                $exception->getCode(),
                $exception->getPrevious()
            );
            $debugException->addDebugOutput($this->debugLastSoapRequest());
            throw $debugException;
        }

        return $response;
    }

    /**
     * Set the API license key.
     *
     * @since 0.1.0
     *
     * @param string $apiKey API license key.
     */
    public function setApiKey(string $apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * Set the login username.
     *
     * @since 0.1.0
     *
     * @param string $username Login username to use.
     */
    public function setUsername(string $username)
    {
        $this->username = $username;
    }

    /**
     * Set the login password.
     *
     * @since 0.1.0
     *
     * @param string $password Login password to use.
     */
    public function setPassword(string $password)
    {
        $this->password = $password;
    }

    /**
     * Get the credential headers to use.
     *
     * @since 0.1.0
     *
     * @param string $username Login username to use.
     * @param string $password Login password to use.
     *
     * @return SoapHeader
     */
    protected function getCredentialHeaders(string $username, string $password): SoapHeader
    {
        $namespace = 'xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd"';
        $body      = [
            'Username'      => $username,
            'Password'      => $password,
            'UsernameToken' => null,
        ];

        return new SoapHeader($namespace, 'Security', $body, false);
        return '<wsse:Security xmlns:wsse="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-wssecurity-secext-1.0.xsd">' .
            '<wsse:UsernameToken>' .
            '<wsse:Username>' . $username . '</wsse:Username>' .
            '<wsse:Password Type="http://docs.oasis-open.org/wss/2004/01/oasis-200401-wss-username-token-profile-1.0#PasswordText">' . $password . '</wsse:Password>' .
            '</wsse:UsernameToken>' .
            '</wsse:Security>';
    }

    /**
     * Get a property, and return a fallback constant in case it is empty.
     *
     * @since 0.1.0
     *
     * @param string $property          Property to retrieve.
     * @param string $fallback_constant Fallback constant to use in case the property is empty.
     *
     * @return string
     */
    protected function getProperty(string $property, string $fallback_constant)
    {
        if (! empty($this->$property)) {
            return $this->$property;
        }

        if (defined($fallback_constant)) {
            return constant($fallback_constant);
        }
        return getenv($fallback_constant);
    }
}
