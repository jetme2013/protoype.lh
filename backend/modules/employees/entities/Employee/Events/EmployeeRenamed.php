<?php

namespace app\modules\employees\entities\Employee\Events;

use app\modules\employees\entities\Employee\EmployeeId;
use app\modules\employees\entities\Employee\Name;

class EmployeeRenamed
{
    public $employeeId;
    public $name;


    public function __construct(EmployeeId $employeeId, Name $name)
    {
        $this->employeeId = $employeeId;
        $this->name = $name;
    }
}