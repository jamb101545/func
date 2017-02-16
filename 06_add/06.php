<p>  Создать страницу, на которой можно загрузить несколько фотографий в галерею.
    Все загруженные фото должны помещаться в папку gallery и выводиться на странице в виде таблицы.
    +++
    кроме gallery добавить еще одну подпапку.
    Добавить в форму загрузки выпадающий список в какую подпапку грузить.
    Отображать картинки для каждой подпапки.

</p>
<p style="font-size:  30px"> Выберите файл для загрузки</p>
<form  enctype="multipart/form-data" action="06.php" method="post">
    <select name="save_dir">
        <option value="gallery/">gallery 1</option>
        <option value="gallery1/">gallery 2</option>
    </select>
    <input type="file"  name="file"/>
    <input type="submit"  name="send"/>
</form>


<?php

$dir_list =  ['gallery', 'gallery1'];

function loadImg($location)
{
    if (isset($_FILES['file']['name'])) {


        if (move_uploaded_file($_FILES['file']['tmp_name'], $location.DIRECTORY_SEPARATOR. $_FILES['file']['name'])) {
            print "Файл загружен.";
        } else {
            print "Ошибка";
        };

    };
}

    if (isset($_POST['save_dir'])) {

        loadImg($_POST['save_dir']);
    }






#echo '<br> Список файлов - $_POST[\'save_dir\']  <br>';
#var_export($filelist);
foreach ($dir_list as $val){
    $filelist = glob($val.DIRECTORY_SEPARATOR .'*');
?>
   <div style="width: 50%; float: left">
       <p style="font-size: 26px"> Список файлов директория <? echo $val ?> </p>
        <table >
            <? foreach ($filelist as $v){
                echo '<tr>';


                echo "<td> <img style='width: 200px;' src=$v> </img>" .  '</td>';



                echo '</tr>';
            }
                ?>

        </table>

   </div>
<?php
}