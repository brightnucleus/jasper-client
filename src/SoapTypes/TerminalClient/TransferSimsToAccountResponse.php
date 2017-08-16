<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperResponse;

class TransferSimsToAccountResponse extends JasperResponse
{

    /**
     * @var simTransferToAccountStatusList
     */
    private $simTransferToAccountStatusList = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return simTransferToAccountStatusList
     */
    public function getSimTransferToAccountStatusList()
    {
        return $this->simTransferToAccountStatusList;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

