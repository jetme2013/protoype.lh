<?php

namespace backend\tests\unit\entities\Employee;


use app\modules\employees\entities\Employee\Address;
use app\modules\employees\entities\Employee\Events\EmployeeAddressChanged;
use Codeception\Test\Unit;

class ChangeAddressTest extends Unit
{
    public function testSuccess()
    {

        $employee = EmployeeBuilder::instance()->build();

        $employee->changeAddress($address = new Address('New', 'Test', 'Address', 'Street', '25a'));
        $this->assertEquals($address, $employee->getAddress());

        $this->assertNotEmpty($events = $employee->releaseEvents());
        $this->assertInstanceOf(EmployeeAddressChanged::class, end($events));
    }
}