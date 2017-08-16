<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class AddTerminalRequest extends JasperRequest
{

    /**
     * @var AddTerminal
     */
    private $AddTerminal = null;

    /**
     * @var bool
     */
    private $copyCustomFields = null;

    /**
     * @var string
     */
    private $targetAccountName = null;

    /**
     * @var <anyXML>
     */
    private $any = null;

    /**
     * @return AddTerminal
     */
    public function getAddTerminal()
    {
        return $this->AddTerminal;
    }

    /**
     * @return bool
     */
    public function getCopyCustomFields()
    {
        return $this->copyCustomFields;
    }

    /**
     * @return string
     */
    public function getTargetAccountName()
    {
        return $this->targetAccountName;
    }

    /**
     * @return <anyXML>
     */
    public function getAny()
    {
        return $this->any;
    }


}

