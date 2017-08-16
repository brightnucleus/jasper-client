<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class WorkflowAsyncActionResponseCallbackRequest extends JasperRequest
{

    /**
     * @var string
     */
    private $transactionId = null;

    /**
     * @var string
     */
    private $response = null;

    /**
     * @return string
     */
    public function getTransactionId()
    {
        return $this->transactionId;
    }

    /**
     * @return string
     */
    public function getResponse()
    {
        return $this->response;
    }


}

