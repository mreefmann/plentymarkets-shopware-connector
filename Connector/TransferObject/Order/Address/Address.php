<?php

namespace PlentyConnector\Connector\TransferObject\Order\Address;

use PlentyConnector\Connector\ValueObject\AbstractValueObject;
use PlentyConnector\Connector\ValueObject\Attribute\Attribute;

/**
 * TODO: change zip to postalCode
 * TOOD: camelCase
 *
 * Class Address
 */
class Address extends AbstractValueObject
{
    const SALUTATION_MR = 1;
    const SALUTATION_MS = 2;
    const SALUTATION_FIRM = 3;

    /**
     * @var null|string
     */
    private $company;

    /**
     * @var null|string
     */
    private $department;

    /**
     * @var int
     */
    private $salutation = self::SALUTATION_MR;

    /**
     * @var null|string
     */
    private $title;

    /**
     * @var null|string
     */
    private $firstname;

    /**
     * @var null|string
     */
    private $lastname;

    /**
     * @var string
     */
    private $street;

    /**
     * @var string
     */
    private $zipcode;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $countryIdentifier;

    /**
     * @var null|string
     */
    private $vatId;

    /**
     * @var null|string
     */
    private $phoneNumber = '';

    /**
     * @var null|string
     */
    private $mobilePhoneNumber = '';

    /**
     * @var Attribute[]
     */
    private $attributes = [];

    /**
     * @return null|string
     */
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param null|string $company
     */
    public function setCompany($company)
    {
        $this->company = $company;
    }

    /**
     * @return null|string
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * @param null|string $department
     */
    public function setDepartment($department)
    {
        $this->department = $department;
    }

    /**
     * @return int
     */
    public function getSalutation()
    {
        return $this->salutation;
    }

    /**
     * @param int $salutation
     */
    public function setSalutation($salutation)
    {
        $this->salutation = $salutation;
    }

    /**
     * @return array
     */
    public function getSalutations()
    {
        $reflection = new \ReflectionClass(__CLASS__);

        return $reflection->getConstants();
    }

    /**
     * @return null|string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param null|string $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return null|string
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param null|string $firstname
     */
    public function setFirstname($firstname)
    {
        $this->firstname = $firstname;
    }

    /**
     * @return null|string
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @param null|string $lastname
     */
    public function setLastname($lastname)
    {
        $this->lastname = $lastname;
    }

    /**
     * @return null|string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * @param null|string $street
     */
    public function setStreet($street)
    {
        $this->street = $street;
    }

    /**
     * @return string
     */
    public function getZipcode()
    {
        return $this->zipcode;
    }

    /**
     * @param string $zipcode
     */
    public function setZipcode($zipcode)
    {
        $this->zipcode = $zipcode;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     */
    public function setCity($city)
    {
        $this->city = $city;
    }

    /**
     * @return string
     */
    public function getCountryIdentifier()
    {
        return $this->countryIdentifier;
    }

    /**
     * @param string $countryIdentifier
     */
    public function setCountryIdentifier($countryIdentifier)
    {
        $this->countryIdentifier = $countryIdentifier;
    }

    /**
     * @return null|string
     */
    public function getVatId()
    {
        return $this->vatId;
    }

    /**
     * @param null|string $vatId
     */
    public function setVatId($vatId)
    {
        $this->vatId = $vatId;
    }

    /**
     * @return string
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param string $phoneNumber
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
    }

    /**
     * @return string
     */
    public function getMobilePhoneNumber()
    {
        return $this->mobilePhoneNumber;
    }

    /**
     * @param string $mobilePhoneNumber
     */
    public function setMobilePhoneNumber($mobilePhoneNumber)
    {
        $this->mobilePhoneNumber = $mobilePhoneNumber;
    }

    /**
     * @return Attribute[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @param Attribute[] $attributes
     */
    public function setAttributes(array $attributes)
    {
        $this->attributes = $attributes;
    }
}
