<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class OrderResponseType
{

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
    private $contactFax = null;

    /**
     * @var string
     */
    private $email = null;

    /**
     * @var int
     */
    private $orderId = null;

    /**
     * @var string
     */
    private $orderStatus = null;

    /**
     * @var \DateTime
     */
    private $orderDate = null;

    /**
     * @var string
     */
    private $acctName = null;

    /**
     * @var string
     */
    private $po = null;

    /**
     * @var \DateTime
     */
    private $implementationDate = null;

    /**
     * @var string
     */
    private $expedited = null;

    /**
     * @var int
     */
    private $acctId = null;

    /**
     * @var float
     */
    private $price = null;

    /**
     * @var int
     */
    private $quantity = null;

    /**
     * @var string
     */
    private $orderTotal = null;

    /**
     * @var string
     */
    private $desc = null;

    /**
     * @var string
     */
    private $opn = null;

    /**
     * @var string
     */
    private $operatorAcctId = null;

    /**
     * @var string
     */
    private $ratePlan = null;

    /**
     * @var string
     */
    private $communicationPlan = null;

    /**
     * @var string
     */
    private $shipStatus = null;

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
    private $methodAndShippingCompany = null;

    /**
     * @var string
     */
    private $custAcctNo = null;

    /**
     * @var string
     */
    private $notes = null;

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
    public function getContactFax()
    {
        return $this->contactFax;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return int
     */
    public function getOrderId()
    {
        return $this->orderId;
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
     * @return string
     */
    public function getAcctName()
    {
        return $this->acctName;
    }

    /**
     * @return string
     */
    public function getPo()
    {
        return $this->po;
    }

    /**
     * @return \DateTime
     */
    public function getImplementationDate()
    {
        return $this->implementationDate;
    }

    /**
     * @return string
     */
    public function getExpedited()
    {
        return $this->expedited;
    }

    /**
     * @return int
     */
    public function getAcctId()
    {
        return $this->acctId;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return string
     */
    public function getOrderTotal()
    {
        return $this->orderTotal;
    }

    /**
     * @return string
     */
    public function getDesc()
    {
        return $this->desc;
    }

    /**
     * @return string
     */
    public function getOpn()
    {
        return $this->opn;
    }

    /**
     * @return string
     */
    public function getOperatorAcctId()
    {
        return $this->operatorAcctId;
    }

    /**
     * @return string
     */
    public function getRatePlan()
    {
        return $this->ratePlan;
    }

    /**
     * @return string
     */
    public function getCommunicationPlan()
    {
        return $this->communicationPlan;
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
    public function getMethodAndShippingCompany()
    {
        return $this->methodAndShippingCompany;
    }

    /**
     * @return string
     */
    public function getCustAcctNo()
    {
        return $this->custAcctNo;
    }

    /**
     * @return string
     */
    public function getNotes()
    {
        return $this->notes;
    }


}

