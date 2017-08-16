<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class CIPOrderResponseType
{

    /**
     * @var int
     */
    private $orderId = null;

    /**
     * @var int
     */
    private $acctId = null;

    /**
     * @var string
     */
    private $extAcctPrefix = null;

    /**
     * @var string
     */
    private $customerName = null;

    /**
     * @var string
     */
    private $contactName = null;

    /**
     * @var string
     */
    private $contactPhone = null;

    /**
     * @var string
     */
    private $email = null;

    /**
     * @var string
     */
    private $orderStatus = null;

    /**
     * @var \DateTime
     */
    private $orderDate = null;

    /**
     * @var \DateTime
     */
    private $estDeliveryDate = null;

    /**
     * @var orderLineItems
     */
    private $orderLineItems = null;

    /**
     * @var float
     */
    private $orderTotal = null;

    /**
     * @var string
     */
    private $shipStatus = null;

    /**
     * @var string
     */
    private $companyName = null;

    /**
     * @var string
     */
    private $attentionTo = null;

    /**
     * @var string
     */
    private $shipAddr1 = null;

    /**
     * @var string
     */
    private $shipAddr2 = null;

    /**
     * @var string
     */
    private $city = null;

    /**
     * @var string
     */
    private $stateRegion = null;

    /**
     * @var string
     */
    private $country = null;

    /**
     * @var string
     */
    private $postalCode = null;

    /**
     * @var string
     */
    private $zipFour = null;

    /**
     * @var string
     */
    private $notes = null;

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
    }

    /**
     * @return int
     */
    public function getAcctId()
    {
        return $this->acctId;
    }

    /**
     * @return string
     */
    public function getExtAcctPrefix()
    {
        return $this->extAcctPrefix;
    }

    /**
     * @return string
     */
    public function getCustomerName()
    {
        return $this->customerName;
    }

    /**
     * @return string
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * @return string
     */
    public function getContactPhone()
    {
        return $this->contactPhone;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getOrderStatus()
    {
        return $this->orderStatus;
    }

    /**
     * @return \DateTime
     */
    public function getOrderDate()
    {
        return $this->orderDate;
    }

    /**
     * @return \DateTime
     */
    public function getEstDeliveryDate()
    {
        return $this->estDeliveryDate;
    }

    /**
     * @return orderLineItems
     */
    public function getOrderLineItems()
    {
        return $this->orderLineItems;
    }

    /**
     * @return float
     */
    public function getOrderTotal()
    {
        return $this->orderTotal;
    }

    /**
     * @return string
     */
    public function getShipStatus()
    {
        return $this->shipStatus;
    }

    /**
     * @return string
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @return string
     */
    public function getAttentionTo()
    {
        return $this->attentionTo;
    }

    /**
     * @return string
     */
    public function getShipAddr1()
    {
        return $this->shipAddr1;
    }

    /**
     * @return string
     */
    public function getShipAddr2()
    {
        return $this->shipAddr2;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @return string
     */
    public function getStateRegion()
    {
        return $this->stateRegion;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return string
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @return string
     */
    public function getZipFour()
    {
        return $this->zipFour;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }


}

