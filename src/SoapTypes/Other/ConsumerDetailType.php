<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class ConsumerDetailType
{

    /**
     * @var string
     */
    private $subscriberNumber = null;

    /**
     * @var NameType
     */
    private $subscirberName = null;

    /**
     * @var SubscriberAddressType
     */
    private $address = null;

    /**
     * @var PrimaryContactType
     */
    private $primaryContact = null;

    /**
     * @return string
     */
    public function getSubscriberNumber()
    {
        return $this->subscriberNumber;
    }

    /**
     * @return NameType
     */
    public function getSubscirberName()
    {
        return $this->subscirberName;
    }

    /**
     * @return SubscriberAddressType
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return PrimaryContactType
     */
    public function getPrimaryContact()
    {
        return $this->primaryContact;
    }


}

