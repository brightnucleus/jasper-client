<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class ManageDialableMSISDNRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var action
     */
    private $action = null;

    /**
     * @var ServiceAreasSelector
     */
    private $ServiceAreasSelector = null;

    /**
     * @var type
     */
    private $type = null;

    /**
     * @var string
     */
    private $callbackUrl = null;

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return action
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @return ServiceAreasSelector
     */
    public function getServiceAreasSelector()
    {
        return $this->ServiceAreasSelector;
    }

    /**
     * @return type
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getCallbackUrl()
    {
        return $this->callbackUrl;
    }


}

