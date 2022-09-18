<?php

function sumTime($argv): array
{
    $full_check = ' 0123456789:';
    $date_one = [];
    $date_two = [];
    $result = [];
    foreach (str_split($argv[1]) as $char)
    {
        if (strpos($full_check, $char) === false)
        {
            echo 'Input error!';
        }
        else
        {
            $date_one = explode(':', $argv[1]);
        }
    }
    foreach (str_split($argv[2]) as $char)
    {
        if (strpos($full_check, $char) === false)
        {
            echo 'Input error!';
        }
        else
        {
            $date_two = explode(':', $argv[2]);
        }
    }
    $result[1] = (intval($date_one[1])) + (intval($date_two[1]));
    $result[2] = (intval($date_one[2])) + (intval($date_two[2]));
    $result[3] = (intval($date_one[3])) + (intval($date_two[3]));
    if ((intval($result[3])) > 59)
    {
        $result[2] = (intval($result[2])) + 1;
        $result[3] = (intval($result[3])) - 60;
    }
    if ((intval($result[2])) > 59)
    {
        $result[1] = (intval($result[1])) + 1;
        $result[2] = (intval($result[2])) - 60;
    }
    if ((intval($result[1])) > 24)
    {
        $result[1] = (intval($result[2])) - 24;
    }
    return ($result);
}

echo sumTime($argv);