<?php

namespace BrightNucleus\JasperClient\SoapTypes;

use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\RequestInterface;

class JasperRequest implements RequestInterface
{
    /**
     * @var string
     */
    protected $messageId;

    /**
     * @var string
     */
    protected $version;

    /**
     * @var string
     */
    protected $licenseKey;

    /**
     * @return string
     */
    public function getMessageId()
    {
        return $this->messageId;
    }

    /**
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @return string
     */
    public function getLicenseKey()
    {
        return $this->licenseKey;
    }

    /**
     * Get a new request with an attached API license key.
     *
     * @since 0.1.0
     *
     * @param string $licenseKey API license key to authenticate the request with.
     *
     * @return JasperRequest
     */
    public function withLicenseKey(string $licenseKey): JasperRequest
    {
        $request             = clone $this;
        $request->licenseKey = $licenseKey;
        return $request;
    }

    /**
     * Create a catch-all setter for requests that don't have a specific setter for a given property.
     *
     * @since 0.1.0
     *
     * @param string $method
     * @param array  $args
     *
     * @throws SoapException
     */
    public function __call(string $method, array $args)
    {
        if (0 === strpos($method, 'set')) {
            throw new SoapException(
                sprintf(
                    'Call to invalid method "%1$s" on request class "%2$s".',
                    $method,
                    get_class($this)
                )
            );
        }

        $property = substr($method, 3);

        if (! property_exists($this, $property)) {
            throw new SoapException(
                sprintf(
                    'Trying to set unknown property "%1$s" on request class "%2$s".',
                    $property,
                    get_class($this)
                )
            );
        }
    }
}
