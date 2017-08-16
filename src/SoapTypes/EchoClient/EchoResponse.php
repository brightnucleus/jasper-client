<?php

namespace BrightNucleus\JasperClient\SoapTypes\EchoClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

final class EchoResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $value;

    /**
     * @var <anyXML>
     */
    private $any;

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

