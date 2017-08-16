<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class ATTBountyEventNotificationResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var int
     */
    private $action = null;

    /**
     * @var string
     */
    private $status = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return int
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }


}

