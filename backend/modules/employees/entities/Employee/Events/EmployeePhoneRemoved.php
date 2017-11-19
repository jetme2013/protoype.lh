<?php

namespace app\modules\employees\entities\Employee\Events;

use app\modules\employees\entities\Employee\EmployeeId;
use app\modules\employees\entities\Employee\Phone;

class EmployeePhoneRemoved
{
    public $employeeId;
    public $phone;

    public function __construct(EmployeeId $employeeId, Phone $phone)
    {
        $this->employeeId = $employeeId;
        $this->phone = $phone;
    }
}