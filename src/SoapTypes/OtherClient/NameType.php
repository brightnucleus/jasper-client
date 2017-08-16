<?php

namespace BrightNucleus\JasperClient\SoapTypes\OtherClient;

class NameType
{

    /**
     * @var string
     */
    private $firstName = null;

    /**
     * @var string
     */
    private $middleName = null;

    /**
     * @var string
     */
    private $lastName = null;

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
    public function getMiddleName()
    {
        return $this->middleName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }


}

