<?php

namespace app\modules\employees\entities;


use Webmozart\Assert\Assert;

abstract class Id
{
    protected $id;

    public function __construct($id = null)
    {
        Assert::notEmpty($id);
        $this->id = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function isEqualTo(self $other)
    {
        return $this->getId() === $other->getId();
    }
}