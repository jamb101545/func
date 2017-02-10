<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 010 10.02.17
 * Time: 15:19
 */

function listDir($val){
    $val = $val.'*';
    $dirlist = glob($val, GLOB_ONLYDIR);;

    echo "<pre>";
    print_r($dirlist);
    echo "</pre>";
}

listDir('D:/xampp/htdocs/');

