<meta charset="utf-8" />
<form action="2.php" method="post">
    <input type="text"  name="txt1"/>
    <input type="submit"/>
</form>


<?php

function getTop($a){




    echo 'POST';
    echo "<pre>";
    print_r($_POST);
    echo "</pre>";
    if (isset ($_POST['txt1'])) {
        $txt1 = explode(' ', $_POST['txt1']);
        $cnt = count ($txt1);
        for ($i =0; $i < $cnt; $i++)
         {
            $k =  mb_strlen ($txt1[$i],'UTF-8');

                $txt2 [$i] = $k;


          };
    /*   echo "<pre>";
        print_r($txt1);
        echo "</pre>";
        echo "<pre>";
        print_r($txt2);
        echo "</pre>";
    */
        $newTxt = array_combine ($txt1, $txt2);
      /*  echo "<pre>";

        print_r($newTxt);
        echo "</pre>";
        */
        #$noDiff = array_intersect($txt1, $txt2);
        #$stringNoDiff = implode(',', $noDiff);
        arsort($newTxt);
        $i   = 0;
        foreach($newTxt as $key=>$value) {
            if ($i++ == 3) break;
            echo 'TOP ',"$key <br >";
        }
    }
    else;
}
if (isset ($_POST['txt1'])){
    getTop($_POST['txt1']);
}

else;
