<?php

namespace app\modules\employees\entities\Employee;


use Webmozart\Assert\Assert;

class Phone
{
    private $country;
    private $code;
    private $number;

    public function __construct($country, $code, $number)
    {
        Assert::notEmpty($country);
        Assert::notEmpty($code);
        Assert::notEmpty($number);

        $this->country = $country;
        $this->code = $code;
        $this->number = $number;
    }

    public function isEqualTo(self $phone)
    {
        return $this->getFull() === $phone->getFull();
    }

    public function getFull()
    {
        return '+' . $this->country . ' (' . $this->code . ') ' . $this->number;
    }

    public function getCountry() { return $this->country; }
    public function getCode() { return $this->code; }
    public function getNumber() { return $this->number; }
}
