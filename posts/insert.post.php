<?php
session_start();
include $_SERVER["DOCUMENT_ROOT"]. '/bootstrap.php';

if (isset($_POST['submit'])){
    $data['title']=htmlspecialchars($_POST['title']);
    $data['text']=htmlspecialchars($_POST['text']);

    [$error,$fileName] =
        loadImg($maxFileSize, $validFileTypes, $uploadPath,'image');

    if(empty($error)){
        $_SESSION['msg']= 'файл успешно загружен';
        $_SESSION['alert']= 'alert-success';
        $data['image']=$fileName;

        $dataPost->insertPost($data);

        header('Location: /posts');
    }
   else{
        $_SESSION['msg']= $error;
        $_SESSION['alert']='alert-danger';

        header('Location: /posts/insert.php');
    }
}