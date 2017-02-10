<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 009 09.02.17
 * Time: 22:40
 */

function arrShow($arr,$s =1)
{

    if ($s == 1){
                echo '<pre>';
                    print_r($arr);
                echo '</pre>';
    }
    else {
        echo '<pre>';
        var_dump($arr);
        echo '</pre>';
    }
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
        ],2


    );