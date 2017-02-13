<p>  Создать страницу, на которой можно загрузить несколько фотографий в галерею.
    Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.

</p>
<p style="font-size:  30px"> Выберите файл для загрузки</p>
<form  enctype="multipart/form-data" action="06.php" method="post">
    <input type="file"  name="file"/>
    <input type="submit"/>
</form>


<?php

$savedir = 'gallery/';
if (isset($_FILES['file']['name'])){
    $file = $_FILES['file']['name'];

        if (move_uploaded_file($_FILES['file']['tmp_name'], $savedir . $_FILES['file']['name']))
        {
            print "Файл загружен.";
        }
        else {
             print "Ошибка";
        };

};

$filelist = glob($savedir.'*');

echo '<br> Список файлов <br>';
#var_export($filelist);

?>
    <table>
        <? foreach ($filelist as $v){
          echo '<tr>';


            echo "<td> <img src=$v> </img>" .  '</td>';



        echo '</tr>';
        }
            ?>

    </table>


