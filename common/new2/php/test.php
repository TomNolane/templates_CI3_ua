<?php

require_once realpath(__DIR__ . '/..').'/php/data.php';
require_once realpath(__DIR__ . '/..').'/php/Mobile_Detect.php';

function BewteenBinarySearch($element, $data, $data2)
{
    if(!isset($element) || empty($element)) return 'NONE4'; // если не передали IP |  if IP is empty
    $begin = round((count($data) -1 )/ 2); 
    $temp = explode(".", $element);
    
    if(isset($temp[0]) && isset($temp[1]) && isset($temp[2]) && isset($temp[3]))
        $element =  $temp[0]*256*256*256 + $temp[1]*256*256 + $temp[2]*256 + $temp[3]; //преобразует значение IP в long | convert IP to long
    else
        $element = 2071690107;
    
    $temp = 1; $temp2 = 0;
    $prev_begin = 0; //для выявления рекурсии | for exit to recursion
    while (true) 
    { 
        $temp2++;
        if (isset($data[$begin]))
        {  
                if($data[$begin] > $element)
                {
                    if($begin <= 0)
                        return 'NONE1'; //если ИСКОМОЕ меньше наименьшего значения в Массиве "ОТ" | if $ELEMENT less then minimum of array $DATA
                    else
                    {
                        $begin = $begin - round(($begin / (2 * $temp)));
                        if($begin == $prev_begin && $begin == 1) $begin = 0;
                        else if($begin == $prev_begin) return 'NONE6'; // выход из рекурсии | for exit to recursion
                        $temp++;
                    }
                }
                else
                { 
                    if($data[$begin] <= $element && $data2[$begin] >= $element)
                        return  "RU"; // если ИСКОМОЕ лежит в диапазоне между массивом $data и $data2 | if $ELEMENT between array $DATA and array $DATA2
                    else if($data[$begin] <= $element && $data2[$begin] <= $element && $begin <= count($data) -1)
                    {
                        $begin = $begin + round(($begin / (2 * $temp)));
                        if($begin == $prev_begin) {  return 'NONE7'; } // выход из рекурсии | for exit to recursion
                        else if($begin > count($data2) -1)
                        {
                            return 'NONE8'; //если ИСКОМОЕ больше наибольшего значения в Массиве "ДО" | if $ELEMENT great then maximum of array $DATA2
                        }
                        $temp++;
                    }
                }
            $prev_begin = $begin;
        } else return 'NONE9';
    } 
}

$ip = '127.0.0.1';

$country = BewteenBinarySearch($ip,$data,$data2); 

if($country != 'RU')
{ 
    $country = 'NONE';
    $is_bot = 1;
}

echo 'OK';