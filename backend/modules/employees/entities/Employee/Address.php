<?php

namespace app\modules\employees\entities\Employee;

use Webmozart\Assert\Assert;

class Address
{
    private $country;
    private $region;
    private $city;
    private $street;
    private $house;

    public function __construct($country, $region, $city, $street, $house)
    {
        Assert::notEmpty($country);
        Assert::notEmpty($city);

        $this->country = $country;
        $this->region = $region;
        $this->city = $city;
        $this->street = $street;
        $this->house = $house;
    }

    public function getCountry()
    {
        return $this->country;
    }

    public function getRegion()
    {
        return $this->region;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function getStreet()
    {
        return $this->street;
    }

    public function getHouse()
    {
        return $this->house;
    }
}
