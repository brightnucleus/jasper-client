<?php

namespace BrightNucleus\JasperClient\SoapTypes\EventPlanClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class DeleteTerminalEventResponse extends JasperResponse
{

    /**
     * @var int
     */
    private $eventInstanceId = null;

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var string
     */
    private $status = null;

    /**
     * @return int
     */
    public function getEventInstanceId()
    {
        return $this->eventInstanceId;
    }

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }


}

