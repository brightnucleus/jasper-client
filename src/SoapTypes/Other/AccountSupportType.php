<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class AccountSupportType
{

    /**
     * @var bool
     */
    private $showAccountSupport = null;

    /**
     * @var bool
     */
    private $showJasperSupport = null;

    /**
     * @var bool
     */
    private $showSpSupport = null;

    /**
     * @var string
     */
    private $email = null;

    /**
     * @var string
     */
    private $phone = null;

    /**
     * @return bool
     */
    public function getShowAccountSupport()
    {
        return $this->showAccountSupport;
    }

    /**
     * @return bool
     */
    public function getShowJasperSupport()
    {
        return $this->showJasperSupport;
    }

    /**
     * @return bool
     */
    public function getShowSpSupport()
    {
        return $this->showSpSupport;
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
    public function getPhone()
    {
        return $this->phone;
    }


}

