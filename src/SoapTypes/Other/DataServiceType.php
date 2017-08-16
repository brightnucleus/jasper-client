<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class DataServiceType
{

    /**
     * @var string
     */
    private $bandWidthRuleId = null;

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
    public function getBandWidthRuleId()
    {
        return $this->bandWidthRuleId;
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

