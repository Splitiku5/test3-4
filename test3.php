<?php

function naturalSummMultiples ($number, $multiplesOne = 3 , $multiplesTwo = 5): ?int
{
    $summ = 0;
    for ($i = 0; $i < $number; $i++)
    {
        if($i % $multiplesOne === 0 || $i % $multiplesTwo === 0)
        {
            $summ += $i;
        }
    }
return $summ;
}

$a = naturalSummMultiples(1000);
var_dump($a);