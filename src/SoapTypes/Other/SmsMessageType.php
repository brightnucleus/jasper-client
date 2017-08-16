<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class SmsMessageType
{

    /**
     * @var int
     */
    private $smsMsgId = null;

    /**
     * @var string
     */
    private $status = null;

    /**
     * @var string
     */
    private $messageText = null;

    /**
     * @var string
     */
    private $senderLogin = null;

    /**
     * @var string
     */
    private $sentToIccid = null;

    /**
     * @var string
     */
    private $sentFrom = null;

    /**
     * @var string
     */
    private $smsMsgAttemptStatus = null;

    /**
     * @var string
     */
    private $msgType = null;

    /**
     * @var \DateTime
     */
    private $dateSent = null;

    /**
     * @var \DateTime
     */
    private $dateReceived = null;

    /**
     * @var \DateTime
     */
    private $dateAdded = null;

    /**
     * @var \DateTime
     */
    private $dateModified = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return int
     */
    public function getSmsMsgId()
    {
        return $this->smsMsgId;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @return string
     */
    public function getMessageText()
    {
        return $this->messageText;
    }

    /**
     * @return string
     */
    public function getSenderLogin()
    {
        return $this->senderLogin;
    }

    /**
     * @return string
     */
    public function getSentToIccid()
    {
        return $this->sentToIccid;
    }

    /**
     * @return string
     */
    public function getSentFrom()
    {
        return $this->sentFrom;
    }

    /**
     * @return string
     */
    public function getSmsMsgAttemptStatus()
    {
        return $this->smsMsgAttemptStatus;
    }

    /**
     * @return string
     */
    public function getMsgType()
    {
        return $this->msgType;
    }

    /**
     * @return \DateTime
     */
    public function getDateSent()
    {
        return $this->dateSent;
    }

    /**
     * @return \DateTime
     */
    public function getDateReceived()
    {
        return $this->dateReceived;
    }

    /**
     * @return \DateTime
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * @return \DateTime
     */
    public function getDateModified()
    {
        return $this->dateModified;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

