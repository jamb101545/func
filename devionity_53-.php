<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 009 09.02.17
 * Time: 1:27
 */
$recstr = '';
$txt_File = fopen('php-writing-data-to-files.txt', 'w');
    for ($i = 1; $i <=10; $i++){

        for ($j = 1; $j <= $i; $j++) {
            $recstr =$i.$recstr;
        }
            $txt_File = fopen('php-writing-data-to-files.txt', 'a+');
            fwrite($txt_File, $recstr . "\n". PHP_EOL);
            fclose($txt_File);

        $recstr = '';

    };
$txt_File = fopen('php-writing-data-to-files.txt', 'r');
$text = fread ($txt_File, filesize('php-writing-data-to-files.txt'));
print_r( $text);
fclose($txt_File);