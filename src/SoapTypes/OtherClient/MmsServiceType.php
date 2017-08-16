<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class MmsServiceType
{

    /**
     * @var integer
     */
    private $mmsQuota = null;

    /**
     * @var string
     */
    private $mmsQOS = null;

    /**
     * @return integer
     */
    public function getMmsQuota()
    {
        return $this->mmsQuota;
    }

    /**
     * @return string
     */
    public function getMmsQOS()
    {
        return $this->mmsQOS;
    }


}

