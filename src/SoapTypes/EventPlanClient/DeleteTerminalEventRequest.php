<?php

namespace BrightNucleus\JasperClient\SoapTypes\EventPlanClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class DeleteTerminalEventRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $eventInstanceId = null;

    /**
     * @return int
     */
    public function getEventInstanceId()
    {
        return $this->eventInstanceId;
    }


}

