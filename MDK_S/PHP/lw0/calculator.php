<?php

function calculator($argv): string
{
    $full_check = ' 0123456789+-';
    $number_check = ' 0123456789';
    $tempString = '';
    $numberArr = [];
    $symbolArr = [];
    $sum = 0;
    foreach (str_split($argv[1]) as $char) {
        if (!(strpos($full_check, $char))) {
            return 'Input error!';
        } else {
            if (strpos($number_check, $char)) {
                $tempString .= $char;
            } else {
                $symbolArr[] = $char;
                $numberArr[] = intval($tempString);
                $tempString = '';
            }
        }
    }

    $numberArr[] = intval($tempString);

    foreach ($symbolArr as $key => $value) {
        if ($key === 0) {

            if ($value === '+') {
                $sum += $numberArr[$key] + $numberArr[$key + 1];
            }

            if ($value === '-') {
                $sum += $numberArr[$key] - $numberArr[$key + 1];
            }
        } else {
            if ($value === '+') {
                $sum += $numberArr[$key + 1];
            }

            if ($value === '-') {
                $sum -= $numberArr[$key + 1];
            }
        }
    }
    return ($sum);
}

echo calculator($argv);