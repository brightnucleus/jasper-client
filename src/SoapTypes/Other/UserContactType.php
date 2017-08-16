<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class UserContactType
{

    /**
     * @var string
     */
    private $firstName = null;

    /**
     * @var string
     */
    private $lastName = null;

    /**
     * @var string
     */
    private $phone = null;

    /**
     * @var string
     */
    private $email = null;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

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


}

