<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class OrderLineItem
{

    /**
     * @var int
     */
    private $orderLineId = null;

    /**
     * @var int
     */
    private $orderLineItemId = null;

    /**
     * @var int
     */
    private $masterOpnId = null;

    /**
     * @var int
     */
    private $opnId = null;

    /**
     * @var string
     */
    private $opnDisplayName = null;

    /**
     * @var string
     */
    private $opn = null;

    /**
     * @var int
     */
    private $quantity = null;

    /**
     * @var float
     */
    private $price = null;

    /**
     * @var float
     */
    private $amount = null;

    /**
     * @return int
     */
    public function getOrderLineId()
    {
        return $this->orderLineId;
    }

    /**
     * @return int
     */
    public function getOrderLineItemId()
    {
        return $this->orderLineItemId;
    }

    /**
     * @return int
     */
    public function getMasterOpnId()
    {
        return $this->masterOpnId;
    }

    /**
     * @return int
     */
    public function getOpnId()
    {
        return $this->opnId;
    }

    /**
     * @return string
     */
    public function getOpnDisplayName()
    {
        return $this->opnDisplayName;
    }

    /**
     * @return string
     */
    public function getOpn()
    {
        return $this->opn;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @return float
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }


}

