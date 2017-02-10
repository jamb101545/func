

<form action="1.php" method="post">
    <input type="text"  name="txt1"/>
    <input type="text"  name="txt2"/>
    <input type="submit"/>
</form>


<?php

function getCommonWords($a, $b){




    echo 'POST';
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    if (isset ($_POST['txt1']) or isset($_POST['txt2'])) {
        $txt1 = explode(' ', $_POST['txt1']);
        $txt2 = explode(' ', $_POST['txt2']);
        $noDiff = array_intersect($txt1, $txt2);
        $stringNoDiff = implode(',', $noDiff);
        echo $stringNoDiff;
    }
else;
}
    if (isset ($_POST['txt1']) or isset($_POST['txt2'])){
        getCommonWords($_POST['txt1'],$_POST['txt2']);
        }

    else;
