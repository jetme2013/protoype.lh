<?php

namespace app\modules\employees\entities\Employee\Events;

use app\modules\employees\entities\Employee\EmployeeId;
use app\modules\employees\entities\Employee\Address;

class EmployeeAddressChanged
{
    public $employeeId;
    public $address;

    public function __construct(EmployeeId $employeeId, Address $address)
    {
        $this->employeeId = $employeeId;
        $this->address = $address;
    }
}