<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class UpdateImsiDetails
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var int
     */
    private $simId = null;

    /**
     * @var string
     */
    private $accountName = null;

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
    public function getSimId()
    {
        return $this->simId;
    }

    /**
     * @return string
     */
    public function getAccountName()
    {
        return $this->accountName;
    }


}

