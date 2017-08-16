<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class ShipmentTrackingType
{

    /**
     * @var iccids
     */
    private $iccids = null;

    /**
     * @var string
     */
    private $targetRatePlan = null;

    /**
     * @var string
     */
    private $targetCommunicationPlan = null;

    /**
     * @var string
     */
    private $targetSIMStatus = null;

    /**
     * @var string
     */
    private $TrackingNumber = null;

    /**
     * @var \DateTime
     */
    private $shipDate = null;

    /**
     * @var anyURI
     */
    private $TrackingURL = null;

    /**
     * @var string
     */
    private $shipmentStatus = null;

    /**
     * @return iccids
     */
    public function getIccids()
    {
        return $this->iccids;
    }

    /**
     * @return string
     */
    public function getTargetRatePlan()
    {
        return $this->targetRatePlan;
    }

    /**
     * @return string
     */
    public function getTargetCommunicationPlan()
    {
        return $this->targetCommunicationPlan;
    }

    /**
     * @return string
     */
    public function getTargetSIMStatus()
    {
        return $this->targetSIMStatus;
    }

    /**
     * @return string
     */
    public function getTrackingNumber()
    {
        return $this->TrackingNumber;
    }

    /**
     * @return \DateTime
     */
    public function getShipDate()
    {
        return $this->shipDate;
    }

    /**
     * @return anyURI
     */
    public function getTrackingURL()
    {
        return $this->TrackingURL;
    }

    /**
     * @return string
     */
    public function getShipmentStatus()
    {
        return $this->shipmentStatus;
    }


}

