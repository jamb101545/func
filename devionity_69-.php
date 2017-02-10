<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 009 09.02.17
 * Time: 22:40
 */



$nullArr = [    1,
                2,
                3,
                4,
                55,
                6,
                77,
                8888,
                8
            ];

echo 'Исходный <pre>';
print_r($nullArr);
echo '</pre>';

function arrShow(&$arr)
{
    array_push($arr, count ($arr));


    }

arrShow ($nullArr);


echo '+1 элемент <pre>';
print_r($nullArr);
echo '</pre>';