<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SmsServiceType
{

    /**
     * @var integer
     */
    private $smsMTQuota = null;

    /**
     * @var integer
     */
    private $smsMOQuota = null;

    /**
     * @var integer
     */
    private $smsCombinedQuota = null;

    /**
     * @return integer
     */
    public function getSmsMTQuota()
    {
        return $this->smsMTQuota;
    }

    /**
     * @return integer
     */
    public function getSmsMOQuota()
    {
        return $this->smsMOQuota;
    }

    /**
     * @return integer
     */
    public function getSmsCombinedQuota()
    {
        return $this->smsCombinedQuota;
    }


}

