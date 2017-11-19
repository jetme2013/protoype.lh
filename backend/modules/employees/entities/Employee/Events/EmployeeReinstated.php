<?php

namespace app\modules\employees\entities\Employee\Events;

use app\modules\employees\entities\Employee\EmployeeId;

class EmployeeReinstated
{
    public $employeeId;
    public $date;

    public function __construct(EmployeeId $employeeId, \DateTimeImmutable $date)
    {
        $this->employeeId = $employeeId;
        $this->date = $date;
    }
}