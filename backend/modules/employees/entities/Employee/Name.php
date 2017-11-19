<?php

namespace app\modules\employees\entities\Employee;


use Webmozart\Assert\Assert;

class Name
{
    private $last;
    private $first;
    private $middle;

    public function __construct($last, $first, $middle)
    {
        Assert::notEmpty($last);
        Assert::notEmpty($first);

        $this->last = $last;
        $this->first = $first;
        $this->middle = $middle;
    }

    public function getFull()
    {
        return trim($this->last . ' ' . $this->first . ' ' . $this->middle);
    }

    public function getFirst() { return $this->first; }
    public function getMiddle() { return $this->middle; }
    public function getLast() { return $this->last; }
}