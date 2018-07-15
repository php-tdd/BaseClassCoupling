<?php

namespace Tests\BaseClassCoupling;

use DateTime;
use DateInterval;
use PHPUnit\Framework\TestCase;
use BaseClassCoupling\LessThanOneYearEmployee;

class LessThanOneYearEmployeeTest extends TestCase
{
    /** @test */
    public function calculate_less_than_one_year_employee_bonus()
    {
        // if my monthly salary is 1200, working year is 0.5, my bonus should be 600
        $lessThanOneYearEmployee = new LessThanOneYearEmployee();
        $lessThanOneYearEmployee->id = 91;
        // echo sprintf("your startDate should be :%s", (new DateTime('now')->sub(new DateInterval(sprintf('P%dD', round(365 / 2))))));
        $lessThanOneYearEmployee->startWorkingDate = new DateTime('2017/7/29');

        $actual = $lessThanOneYearEmployee->getYearlyBonus();

        $this->assertEquals(600, $actual);
    }
}
