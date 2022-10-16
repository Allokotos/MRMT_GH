<?php

class Date
{
    private int $day, $month, $year;

    public static array $daysOfWeek = ['Sunday','Monday','Tuesday','Wednesday','Thursday','Friday','Saturday'];

    public function __construct(int $day, int $month, int $year)
    {
        if ($day >= 1 && $day <= 31) {
            $this->day = $day;
        } else {
            $this->day = 1;
        }
        if ($month >= 1 && $month <= 12) {
            $this->month = $month;
        } else {
            $this->month = 1;
        }
        if ($year >= 1 && $year <= 9999) {
            $this->year = $year;
        } else {
            $this->year = 1;
        }        
    }

    public function diffDay(Date $dateTwo): int
    {
        int $dateOneSum, $dateTwoSum, $dayDifference;
        $dateOneSum = ($year * 365) + ($month * 31) + $day;
        $dateTwoSum = ($dateTwo.year * 365) + ($dateTwo.month * 31) + $dateTwo.day;
        $dayDifference = $dateOneSum - $dateTwoSum;
        if ($dayDifference < 0)
        {
            $dayDifference = $dayDifference * (-1);
            return $dayDifference;
        }
        else
        {
            return $dayDifference;
        }
    }

    public function minusDay(int $removedDays)
    {
        $day = $day - $removedDays;
        while ($day < 1)
        {
            $month--;
            $day = $day + 31;
        }
        while ($month < 1)
        {
            $year--;
            $month = $month + 12;
        }
        format('ru');
    }

    public function getDateOfWeek(): string
    {
        int $dateSum, $dateName;
        $dateSum = ($year * 365) + ($month * 31) + $day;
        $dateName = $dateSum % 7;
        return $daysOfWeek[$dateName];
    }

    public function format(string $mode): void
    {
	    switch ($mode) 
	    {
		    case 'ru':
			    echo "$day.$month.$year";
			    break;
		    case 'en':
			    echo "$year-$month-$day";
			    break;
        }
    }
}

$date = new Date(1, 2, 2001);
$date2 = new Date(1, 4, 2001);
$date->diffDay($date2); // 59
$date->minusDay(4); // ’28.01.2001’
$date->getDateOfWeek(); // ‘Thursday’
$date->format('ru'); // ’01.02.2001’
$date->format('en'); // ‘2001-02-01’