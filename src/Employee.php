<?php

namespace BaseClassCoupling;

abstract class Employee
{
    public $id;

    public $startWorkingDate;

    abstract public function getYearlyBonus();

    protected function getMonthlySalary()
    {
        DebugHelper::info(sprintf('query monthly salary id:%d', $this->id));

        return SalaryRepo::get($this->id);
    }
}
