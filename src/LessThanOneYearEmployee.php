<?php

namespace BaseClassCoupling;

use DateTime;

class LessThanOneYearEmployee extends Employee
{
    public function getYearlyBonus()
    {
        DebugHelper::info('--get yearly bonus--');
        $salary = $this->getMonthlySalary();
        DebugHelper::info(sprintf('id:%s, his monthly salary is:%s', $this->id, $salary));

        return $this->workingYear() * $salary;
    }

    private function workingYear()
    {
        DebugHelper::info('--get working year--');

        $now = new DateTime('now');
        $year = round($now->diff($this->startWorkingDate)->format('%a') / 365, 2);

        return $year > 1 ? 1 : $year;
    }
}
