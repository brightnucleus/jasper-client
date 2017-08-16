<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class GetLinePayStatusByOpAcctIdResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $linePaymentStatus = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return string
     */
    public function getLinePaymentStatus()
    {
        return $this->linePaymentStatus;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

