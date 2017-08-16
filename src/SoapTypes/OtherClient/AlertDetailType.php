<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class AlertDetailType
{

    /**
     * @var int
     */
    private $alertId = null;

    /**
     * @var \DateTime
     */
    private $alertDate = null;

    /**
     * @var string
     */
    private $alertType = null;

    /**
     * @var string
     */
    private $alertText = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return int
     */
    public function getAlertId()
    {
        return $this->alertId;
    }

    /**
     * @return \DateTime
     */
    public function getAlertDate()
    {
        return $this->alertDate;
    }

    /**
     * @return string
     */
    public function getAlertType()
    {
        return $this->alertType;
    }

    /**
     * @return string
     */
    public function getAlertText()
    {
        return $this->alertText;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

