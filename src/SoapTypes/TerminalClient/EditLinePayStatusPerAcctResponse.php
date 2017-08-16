<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class EditLinePayStatusPerAcctResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $operatorAccountId = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return string
     */
    public function getOperatorAccountId()
    {
        return $this->operatorAccountId;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

