<meta charset="utf-8" />
<form action="11-12.php" method="post">
    <input type="text"  name="n"/>
    <input type="submit"/>
</form>
<p>  Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что каждое новое предложение начиняется с большой буквы.
</p>
<p>  Написать функцию, которая в качестве аргумента принимает строку, и форматирует ее таким образом, что предложения идут в обратном порядке.

</p>
<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 010 10.02.17
 * Time: 14:19
 */


function calcUnic ($str){

   $upFirstLet = mb_convert_case($str, MB_CASE_TITLE, "UTF-8");

    $txt1 = explode('. ', $str);
#print_r ($txt1);
        foreach ($txt1 as &$v){
        $firs = mb_substr($v, 0, 1, 'UTF-8');
        $firs = mb_convert_case($firs, MB_CASE_TITLE, "UTF-8");

        $all_simv = mb_substr($v, 1, mb_strlen($v), 'UTF-8');

        $v = $firs . $all_simv;

    }
     #print_r ($txt1);
    $str_ok = implode ($txt1,'. ');
    $str_reverce = implode(array_reverse($txt1),'. ');
    echo '11. Первая большая - '.$str_ok.'<br><br>';
    echo '12. Первая большая в обратном плрядке - '.$str_reverce.'<br>';
};


if (isset ($_POST['n'])) {$name = $_POST['n'];

    calcUnic ($_POST['n']);



};


