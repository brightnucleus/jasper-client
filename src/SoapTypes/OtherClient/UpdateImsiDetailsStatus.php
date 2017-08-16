<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class UpdateImsiDetailsStatus
{

    /**
     * @var SimTransferResponseType
     */
    private $UpdateImsiDetails = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return SimTransferResponseType
     */
    public function getUpdateImsiDetails()
    {
        return $this->UpdateImsiDetails;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

