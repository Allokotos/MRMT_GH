<?php

require_once 'src/date.php';
use PHPUnit\Framework\TestCase;

class DateTests extends TestCase
{
    private Date $date;

    protected function setUp(): void
    {
        $this->date = new Date(1, 2, 2001);
    }

    public function testDayDiffFunction(): void
    {
        $date2 = new Date(1, 4, 2001);
        $this->assertEquals($this->date->diffDay($date2), '62');
    }

    public function testMinusDayFunction(): void
    {
        $this->assertEquals($this->date->minusDay(4), '28.1.2001');
    }

    public function testGetDayOfTheWeekFunction(): void
    {
        $this->assertEquals($this->date->getDateOfWeek(), 'Tuesday');
    }

    public function testFormatFunction(): void
    {
        $this->assertEquals($this->date->format('ru'), '28.1.2001');
    }
}