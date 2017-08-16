<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class NacType
{

    /**
     * @var int
     */
    private $nacId = null;

    /**
     * @var string
     */
    private $nacDescription = null;

    /**
     * @var bool
     */
    private $voiceEnabled = null;

    /**
     * @var bool
     */
    private $smsEnabled = null;

    /**
     * @var bool
     */
    private $gprsEnabled = null;

    /**
     * @return int
     */
    public function getNacId()
    {
        return $this->nacId;
    }

    /**
     * @return string
     */
    public function getNacDescription()
    {
        return $this->nacDescription;
    }

    /**
     * @return bool
     */
    public function getVoiceEnabled()
    {
        return $this->voiceEnabled;
    }

    /**
     * @return bool
     */
    public function getSmsEnabled()
    {
        return $this->smsEnabled;
    }

    /**
     * @return bool
     */
    public function getGprsEnabled()
    {
        return $this->gprsEnabled;
    }


}

