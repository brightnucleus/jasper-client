<?php

namespace BrightNucleus\JasperClient\SoapTypes\BillingClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetInvoiceRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $accountId = null;

    /**
     * @var \DateTime
     */
    private $cycleStartDate = null;

    /**
     * @return int
     */
    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @return \DateTime
     */
    public function getCycleStartDate()
    {
        return $this->cycleStartDate;
    }


}

