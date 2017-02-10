<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 010 10.02.17
 * Time: 15:46
 */
function listDir($val,$searh){
    $val = $val.'*'.$searh.'*';
    $dirlist = glob($val);
echo $val;
    echo "<pre>";
    print_r($dirlist);
    echo "</pre>";
}

listDir('d:/xampp/htdocs/func/','dev');


