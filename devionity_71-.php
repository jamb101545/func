<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 009 09.02.17
 * Time: 22:40
 */

function prinR($arr){

        for($i=0; $i<count($arr); $i++){
            if(is_array($arr[$i]))
            {
                prinR($arr[$i]);
            }
            else
            {
                echo $i. '=>'.$arr[$i].'<br>';
            }
        }


}
prinR(
    [22,33,44,55,66,77]
);