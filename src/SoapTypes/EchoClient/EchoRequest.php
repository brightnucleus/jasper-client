<?php

namespace BrightNucleus\JasperClient\SoapTypes\EchoClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

final class EchoRequest extends JasperRequest
{
    /**
     * @var string
     */
    private $value;

    /**
     * Instantiate an EchoRequest object.
     *
     * @param $value
     */
    public function __construct($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
}
