<?php

namespace BrightNucleus\JasperClient\SoapTypes\Other;

class ContactType
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
     * @var string
     */
    private $jobTitle = null;

    /**
     * @var string
     */
    private $name = null;

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

    /**
     * @return string
     */
    public function getJobTitle()
    {
        return $this->jobTitle;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


}

