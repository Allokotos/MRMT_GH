<?php

function calculator($argv): int
{
    $full_check = ' 0123456789+-';
    $number_check = '0123456789';
    $number_arr = [];
    $sum = NULL;
    foreach (str_split($argv[1]) as $char)
    {
        if (strpos($full_check, $char) === false)
        {
            echo 'Input error!';
        }
        else
        {
            if (strpos($number_check, $char) === true)
            {
            $number_arr .= (intval($char));
            }
            else
            {
                if (is_null($sum))
                {
                    $sum = (intval($number_arr));
                    $number_arr = '';
                }
                if ($char === '-')
                {
                    $sum = $sum - (intval($number_arr)); 
                    $number_arr = '';
                }
                if ($char === '+')
                {
                $sum = $sum + (intval($number_arr));
                $number_arr = '';
                }
            }
        }   
    }
    return (intval($sum));
}

echo calculator($argv);