<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class InterSPPrepareSrcSimResponse extends JasperResponse
{

    /**
     * @var string
     */
    private $previousSourceSimState = null;

    /**
     * @var string
     */
    private $sourceSimState = null;

    /**
     * @var string
     */
    private $externalSimProfileId = null;

    /**
     * @var SimInfo
     */
    private $simInfo = null;

    /**
     * @var SimAuxFieldInfo
     */
    private $simAuxFieldInfo = null;

    /**
     * @var ImsiInfo
     */
    private $imsiInfo = null;

    /**
     * @var RawSimInfo
     */
    private $rawSimInfo = null;

    /**
     * @return string
     */
    public function getPreviousSourceSimState()
    {
        return $this->previousSourceSimState;
    }

    /**
     * @return string
     */
    public function getSourceSimState()
    {
        return $this->sourceSimState;
    }

    /**
     * @return string
     */
    public function getExternalSimProfileId()
    {
        return $this->externalSimProfileId;
    }

    /**
     * @return SimInfo
     */
    public function getSimInfo()
    {
        return $this->simInfo;
    }

    /**
     * @return SimAuxFieldInfo
     */
    public function getSimAuxFieldInfo()
    {
        return $this->simAuxFieldInfo;
    }

    /**
     * @return ImsiInfo
     */
    public function getImsiInfo()
    {
        return $this->imsiInfo;
    }

    /**
     * @return RawSimInfo
     */
    public function getRawSimInfo()
    {
        return $this->rawSimInfo;
    }


}

