<meta charset="utf-8" />
<form action="13.php" method="post">
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


function calcUnic ($str)
{

    $txt1 = explode(' ', $str);

    echo '<pre>';
    $txt2 = array_count_values ($txt1);
    arsort($txt2);
    echo '</pre>';
    foreach ($txt2 as $k => $v) {
        $cnt = substr_count($str,$v);

        echo $k. ' - '. $v. '<br>';

    };
};


if (isset ($_POST['n'])) {$name = $_POST['n'];

    calcUnic ($_POST['n']);



};


