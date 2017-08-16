<?php

namespace BrightNucleus\JasperClient\SoapTypes;

use Phpro\SoapClient\Exception\SoapException;
use Phpro\SoapClient\Type\ResultInterface;

class JasperResponse implements ResultInterface
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
     * Create a catch-all setter for responses that don't have a specific setter for a given property.
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
                    'Call to invalid method "%1$s" on response class "%2$s".',
                    $method,
                    get_class($this)
                )
            );
        }

        $property = substr($method, 3);

        if (! property_exists($this, $property)) {
            throw new SoapException(
                sprintf(
                    'Trying to set unknown property "%1$s" on response class "%2$s".',
                    $property,
                    get_class($this)
                )
            );
        }
    }
}
