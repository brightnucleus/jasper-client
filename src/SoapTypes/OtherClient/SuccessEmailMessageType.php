<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class SuccessEmailMessageType
{

    /**
     * @var string
     */
    private $emailAddress = null;

    /**
     * @var string
     */
    private $emailSubject = null;

    /**
     * @var string
     */
    private $emailText = null;

    /**
     * @return string
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @return string
     */
    public function getEmailSubject()
    {
        return $this->emailSubject;
    }

    /**
     * @return string
     */
    public function getEmailText()
    {
        return $this->emailText;
    }


}

