<meta charset="utf-8" />
<form action="10.php" method="post">
    <input type="text"  name="n"/>
    <input type="submit"/>
</form>

<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 010 10.02.17
 * Time: 14:19
 */


function calcUnic ($str){

    $txt1 = explode(' ', $str);

    $txt2 = array_unique($txt1);
    $unic = count ($txt2);


    echo 'Уникальных слов - '.$unic.'<br>';
        };


if (isset ($_POST['n'])) {$name = $_POST['n'];

    calcUnic ($_POST['n']);



};


