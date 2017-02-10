<?php
/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 009 09.02.17
 * Time: 0:50
 */echo "Функция, которая может принимать любое количетство числовых аргументов и будет возвращать их сумму <br>";
function unlimSumm() {
    $num = func_num_args();
    $summ = 0;
    for ($i = 0; $i < $num; $i++) {
        $arg = func_get_arg($i);

        $summ = $summ + $arg;

    }

    return $summ;
}

echo 'Сумма = ' .unlimSumm(1, 10, 20, 15,100 ) . '<br>';



