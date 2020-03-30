<?php
include_once ('Include/connection.php');
include ('links.php');
$base='posts';
$sql2= "SELECT * FROM $base ORDER BY date_add desc";
$result = $connection->prepare($sql2);
$result->execute();
$myStrings=$result->fetchAll();
?>

<div class="container margin-15">
    <div class="header-h1 header-h1-center">
        <h1>Добавленные материалы</h1>
    </div>
    <div class="row row-cols-5 myRow">
        <div class="col myDiv myBorders1 hovers"><p class="text-center">Название</p></div>
        <div class="col myDiv hovers"><p class="text-center">Логин автора</p></div>
        <div class="col myDiv hovers"><p class="text-center">Описание</p></div>
        <div class="col myDiv hovers"><p class="text-center ">Дата добавления</p></div>
        <div class="col myDiv myBorders2 hovers"><p class="text-center">Файлы</p></div>
    </div>
    <?php
    foreach ($myStrings as $str){
        $id=$str['post_id'];
        $dirMain='public/files_student/'.$id.'/';
        $filesPath=scandir($dirMain);
        $stringDescription='';
        $str['post_description']=trim($str['post_description']);
        unset($filesPath[0], $filesPath[1]);
        if(mb_strlen($str['post_description'],'UTF-8')>40){

            $stringDescription=mb_substr($str['post_description'],0,40,'UTF-8').' ...';
        }
        else {$stringDescription=$str['post_description'];}
        echo '<div class="row row-cols-5 ">
        <div class="col myDiv"><a href="one_post.php?post_id='.$str['post_id'].'"><p class="text-left">',$str['post_name'],'</p></a></div>
        <div class="col myDiv"><p class="text-left">',$str['user_name'],'</p></div>
        <div class="col myDiv"><p class="text-left">', $stringDescription,'</p></div>
        <div class="col myDiv"><p class="text-left">',$str['date_add'],'</p></div>
        <div class="col myDiv">',addLinks($filesPath,$dirMain),'</div>
    </div>';
    }
    ?>
</div>