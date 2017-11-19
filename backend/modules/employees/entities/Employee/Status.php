<?php

namespace app\modules\employees\entities\Employee;


use Webmozart\Assert\Assert;

class Status
{
    const ACTIVE = 'active';
    const ARCHIVED = 'archived';

    private $value;
    private $date;

    public function __construct($value, \DateTimeImmutable $date)
    {
        Assert::allIsArray($value, [
            self::ACTIVE,
            self::ARCHIVED
        ]);

        $this->value = $value;
        $this->date = $date;
    }

    public function isActive()
    {
        return $this->value === self::ACTIVE;
    }

    public function isArchived()
    {
        return $this->value === self::ARCHIVED;
    }

    public function getValue() { return $this->value; }
    public function getDate() { return $this->date; }
}