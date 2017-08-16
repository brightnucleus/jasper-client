<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class RoamDataServiceType
{

    /**
     * @var string
     */
    private $roamBandwidthRuleId = null;

    /**
     * @var integer
     */
    private $dataQuota = null;

    /**
     * @var DataQuotaUnitType
     */
    private $dataQuotaUnit = null;

    /**
     * @var string
     */
    private $dataQOS = null;

    /**
     * @return string
     */
    public function getRoamBandwidthRuleId()
    {
        return $this->roamBandwidthRuleId;
    }

    /**
     * @return integer
     */
    public function getDataQuota()
    {
        return $this->dataQuota;
    }

    /**
     * @return DataQuotaUnitType
     */
    public function getDataQuotaUnit()
    {
        return $this->dataQuotaUnit;
    }

    /**
     * @return string
     */
    public function getDataQOS()
    {
        return $this->dataQOS;
    }


}

