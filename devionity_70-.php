<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 009 09.02.17
 * Time: 22:40
 */


function simle($a){

        if ($a > 2) {
            for ($i = 2; $i < $a; $i++) {
                echo $i;
                if ($a % $i == 0) {
                    echo 'НЕ Простое';
                    break;
                }
            };
        }
        else {
            echo 'Простое';

        };

    };

simle(236997693677987);