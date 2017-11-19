<?php

namespace app\modules\employees\entities;

interface AggregateRoot
{
    /**
     * @return Id
     */
    public function getId();

    /**
     * @return array
     */
    public function releaseEvents();
}