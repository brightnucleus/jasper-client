<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class GetAllNetworkAccessConfigsRequest extends JasperRequest
{

    /**
     * @var int
     */
    private $pageNumber = null;

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->pageNumber;
    }


}

