<?php

namespace BrightNucleus\JasperClient\SoapTypes\TerminalClient;

use BrightNucleus\JasperClient\SoapTypes\JasperRequest;

class UpdateSecureSimCredentialsRequest extends JasperRequest
{

    /**
     * @var iccids
     */
    private $iccids = null;

    /**
     * @var string
     */
    private $username = null;

    /**
     * @var string
     */
    private $password = null;

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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }


}

