<?php

namespace backend\tests\unit\entities\Employee;



use app\modules\employees\entities\Employee\Events\EmployeeRemoved;
use Codeception\Test\Unit;

class RemoveTest extends Unit
{
    public function testSuccess()
    {

        $employee = EmployeeBuilder::instance()->archived()->build();
        $employee->remove();

        $this->assertNotEmpty($events = $employee->releaseEvents());
        $this->assertInstanceOf(EmployeeRemoved::class, end($events));
    }

    public function testNotArchived()
    {
        $employee = EmployeeBuilder::instance()->build();

        $this->expectExceptionMessage('Cannot remove active employee.');

        $employee->remove();
    }
}