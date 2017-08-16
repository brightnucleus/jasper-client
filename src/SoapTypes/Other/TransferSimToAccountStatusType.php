<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class TransferSimToAccountStatusType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var bool
     */
    private $transferStatus = null;

    /**
     * @var string
     */
    private $errorMessage = null;

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
    public function getTransferStatus()
    {
        return $this->transferStatus;
    }

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->errorMessage;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

