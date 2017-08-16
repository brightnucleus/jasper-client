<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SecureSimAlertInfoType
{

    /**
     * @var string
     */
    private $iccid = null;

    /**
     * @var \DateTime
     */
    private $dateAdded = null;

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
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

