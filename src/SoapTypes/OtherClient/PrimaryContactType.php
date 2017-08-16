<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class PrimaryContactType
{

    /**
     * @var string
     */
    private $phone = null;

    /**
     * @var string
     */
    private $email = null;

    /**
     * @var string
     */
    private $fax = null;

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }


}

