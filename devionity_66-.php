<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 009 09.02.17
 * Time: 22:40
 */

function arrShow($arr)
{
   echo '<pre>';
        print_r($arr);
    echo '</pre>';
}
    arrShow(
        [   1,
            2,
            3,
            4,
            55,
            6,
            77,
            8888,
            8
        ]


    );