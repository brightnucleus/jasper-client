<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class SimTransferToAccountStatusType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var bool
     */
    private $transferstatus = null;

    /**
     * @var string
     */
    private $errormessage = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

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
    public function getTransferstatus()
    {
        return $this->transferstatus;
    }

    /**
     * @return string
     */
    public function getErrormessage()
    {
        return $this->errormessage;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

