<?php

function calculator(string $firstString): string
{
    $fullCheck = ' 0123456789+-';
    $numberCheck = ' 0123456789';
    $tempString = '';
    $numberArr = [];
    $symbolArr = [];
    $sum = 0;
    foreach (str_split($firstString) as $char) {
        if (!(strpos($fullCheck, $char))) {
            return 'Input error!';
        } else {
            if (strpos($numberCheck, $char)) {
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

echo calculator($argv[1]);