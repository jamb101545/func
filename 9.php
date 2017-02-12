<meta charset="utf-8" />
<form action="9.php" method="post">
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
function rotate($str)
{


        echo 'Оригинальная строка строка ' . $str . '<br>';
    $str = iconv('utf-8', 'utf-16le', $str);
    $str = strrev($str);
        echo 'Перевернутая строка ' . iconv('utf-16be', 'utf-8', $str);

    };



if (isset ($_POST['n'])) {
    rotate ($_POST['n']);
};




