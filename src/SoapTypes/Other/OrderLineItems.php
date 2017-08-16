<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class OrderLineItems
{

    /**
     * @var orderLineItemType
     */
    private $orderLineItem = null;

    /**
     * @return orderLineItemType
     */
    public function getOrderLineItem()
    {
        return $this->orderLineItem;
    }


}

