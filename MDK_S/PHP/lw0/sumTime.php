<?php

function sumTime($argv): string
{
    $full_check = ' 0123456789:';
    $date_one = [];
    $date_two = [];
    $result = [];
    foreach (str_split($argv[1]) as $char) {
        if (!(strpos($full_check, $char))) {
            return 'Input error!';
        } else {
            $date_one = explode(':', $argv[1]);
        }
    }
    foreach (str_split($argv[2]) as $char) {
        if (!(strpos($full_check, $char))) {
            return 'Input error!';
        } else {
            $date_two = explode(':', $argv[2]);
        }
    }
    $result[0] = (intval($date_one[0])) + (intval($date_two[0]));
    $result[1] = (intval($date_one[1])) + (intval($date_two[1]));
    $result[2] = (intval($date_one[2])) + (intval($date_two[2]));
    if ((intval($result[2])) > 59) {
        $result[1] = (intval($result[1])) + 1;
        $result[2] = (intval($result[2])) - 60;
    }
    if ((intval($result[1])) > 59) {
        $result[0] = (intval($result[0])) + 1;
        $result[1] = (intval($result[1])) - 60;
    }
    if ((intval($result[0])) > 24) {
        $result[0] = (intval($result[0])) - 24;
    }
    return "$result[0]:$result[1]:$result[2]";
}

echo sumTime($argv);