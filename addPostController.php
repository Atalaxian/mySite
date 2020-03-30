<?php
include_once ('session.php');
include_once ('autorizationProof.php');
include ('Include/connection.php');
if (!empty($_FILES)){
    $count=count($_FILES['filename']['name']);
    $count_proof=0;
    $whitelist=array('.zip','.doc','.docs','.docx','.xls','.xlsx','.pdf','.jpg','.png');
    for($i=0;$i<$count;$i++){
        foreach ($whitelist as $wish){
            if(preg_match("/$wish\z/i",$_FILES['filename']['name'][$i])) {
                $count_proof++;
                break;
            }
        }
    }
    if($count==$count_proof){
        $data=$_POST;
        $namePost=filter_var($_POST['namePost'],FILTER_SANITIZE_STRING);
        $description=filter_var($_POST['description'],FILTER_SANITIZE_STRING);
        $base='posts';
        $date=date("Y/m/d");
        $time=date("H:i:s");
        $date_time=$date.' '.$time;
        $user_name=$_SESSION['currentUser'];
        $prepared = $connection->prepare("INSERT INTO $base(post_name,user_name,post_description,date_add) VALUES ('$namePost','$user_name','$description','$date_time')");
        $result = $prepared->execute();
        $id = $connection->lastInsertId();
        $dirMain='public/files_student/'.$id.'/';
        mkdir($dirMain);
        for($i=0;$i<$count;$i++){
            $upload=$dirMain.$_FILES['filename']['name'][$i];
            move_uploaded_file($_FILES['filename']['tmp_name'][$i],$upload);
        }
        header('Location: one_post?post_id='.$id);
        exit();
    }
    else{
        $_SESSION['invalidData']=1;
        $_SESSION['namePost']=$_POST['namePost'];
        $_SESSION['description']=$_POST['description'];
        header('Location:addPost');
        exit();
    }
}
?>
