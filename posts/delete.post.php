<?php
include $_SERVER['DOCUMENT_ROOT']. '/bootstrap.php';

if(isset($_POST['id']))
{
    $id=$_POST['id'];

    $post = $dataPost->getOnePost($id);
    deleteImg('../img/'.$post->image);
    $dataPost->deletePost($id);
    header('Location: /posts');
}