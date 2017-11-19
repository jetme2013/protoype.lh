<?php

namespace app\modules\employees\entities\Employee\Events;

use app\modules\employees\entities\Employee\EmployeeId;

class EmployeeRemoved
{
    public $employeeId;

    public function __construct(EmployeeId $employeeId)
    {
        $this->employeeId = $employeeId;
    }
}