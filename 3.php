<meta charset="utf-8" />
<form action="3.php" method="post">
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

if (isset ($_POST['n'])) {$name = $_POST['n'];};

$txt_File = fopen('test.txt', 'r');
$text = fread ($txt_File, filesize('test.txt'));
echo "<pre>";
print_r($text);
echo "</pre>";
fclose($txt_File);

$txt1 = explode(' ', $text);

    foreach ($txt1 as  &$v){
         $k =  mb_strlen ($v,'UTF-8');

            if ($k < $_POST['n']*1 ){
                $v = '';
            }


    };

$newTxt = implode(' ', $txt1);
echo "Новый текст<pre>";
print_r($newTxt);
echo "</pre>";
$txt_File_new = fopen('txt_File_new.txt', 'a+');

fwrite($txt_File_new, $newTxt );
fclose($txt_File_new);