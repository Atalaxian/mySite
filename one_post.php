<?php include_once ('session.php');
include_once ('Include/connection.php');
include_once ('Include/css_connect.php');
require ('header.php');
include_once ('links.php');

$base='posts';
$id=$_GET['post_id'];
$sql2= "SELECT * FROM $base WHERE post_id=:id";
$result = $connection->prepare($sql2);
$result->bindParam(':id',$id,PDO::PARAM_INT);
$result->execute();
$myString=$result->fetch();
$dirMain='public/files_student/'.$id.'/';
$filesPath=scandir($dirMain);
unset($filesPath[0], $filesPath[1]);
?>

<div class="container margin-15">
    <div class="header-h1 header-h1-center">
        <h1>Пост</h1>
    </div>
    <div class="row row-cols-2">
        <div class="col myDiv hovers"><p class="text-center">Название</p></div>
        <div class="col myDiv"><p class="text-center"><?=$myString['post_name']?></p></div>
    </div>
    <div class="row row-cols-2">
        <div class="col myDiv hovers"><p class="text-center">Логин автора</p></div>
        <div class="col myDiv"><p class="text-center"><?=$myString['user_name']?></p></div>
    </div>
    <div class="row row-cols-2">
        <div class="col myDiv hovers"><p class="text-center">Описание поста</p></div>
        <div class="col myDiv"><p class="text-center"><?=$myString['post_description']?></p></div>
    </div>
    <div class="row row-cols-2">
        <div class="col myDiv hovers"><p class="text-center">Дата добавления</p></div>
        <div class="col myDiv"><p class="text-center"><?=$myString['date_add']?></p></div>
    </div>
    <div class="row row-cols-2">
        <div class="col myDiv hovers"><p class="text-center">Файлы</p></div>
        <div class="col myDiv"><?=addLinks($filesPath,$dirMain)?></div>
    </div>
</div>