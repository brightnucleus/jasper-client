<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class ChangeIdentifierKeyType
{

    /**
     * @var string
     */
    private $billingAccountNumber = null;

    /**
     * @var KeyFieldType
     */
    private $keyField = null;

    /**
     * @return string
     */
    public function getBillingAccountNumber()
    {
        return $this->billingAccountNumber;
    }

    /**
     * @return KeyFieldType
     */
    public function getKeyField()
    {
        return $this->keyField;
    }


}

