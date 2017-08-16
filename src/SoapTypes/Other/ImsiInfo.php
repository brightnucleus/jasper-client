<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class ImsiInfo
{

    /**
     * @var string
     */
    private $imsi = null;

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var bool
     */
    private $isOnHLR = null;

    /**
     * @var string
     */
    private $kienc = null;

    /**
     * @var string
     */
    private $transportKey = null;

    /**
     * @var string
     */
    private $msisdn = null;

    /**
     * @var string
     */
    private $subsType = null;

    /**
     * @var bool
     */
    private $onSRP = null;

    /**
     * @var string
     */
    private $hlrAccessMode = null;

    /**
     * @return string
     */
    public function getImsi()
    {
        return $this->imsi;
    }

    /**
     * @return string
     */
    public function getIccid()
    {
        return $this->iccid;
    }

    /**
     * @return bool
     */
    public function getIsOnHLR()
    {
        return $this->isOnHLR;
    }

    /**
     * @return string
     */
    public function getKienc()
    {
        return $this->kienc;
    }

    /**
     * @return string
     */
    public function getTransportKey()
    {
        return $this->transportKey;
    }

    /**
     * @return string
     */
    public function getMsisdn()
    {
        return $this->msisdn;
    }

    /**
     * @return string
     */
    public function getSubsType()
    {
        return $this->subsType;
    }

    /**
     * @return bool
     */
    public function getOnSRP()
    {
        return $this->onSRP;
    }

    /**
     * @return string
     */
    public function getHlrAccessMode()
    {
        return $this->hlrAccessMode;
    }


}

