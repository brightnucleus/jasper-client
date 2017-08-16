<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class EditLinePayStatusPerAcctRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $operatorAccountId = null;

    /**
     * @var string
     */
    private $linePaymentStatus = null;

    /**
     * @return string
     */
    public function getOperatorAccountId()
    {
        return $this->operatorAccountId;
    }

    /**
     * @return string
     */
    public function getLinePaymentStatus()
    {
        return $this->linePaymentStatus;
    }


}

