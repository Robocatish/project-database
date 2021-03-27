<?php
include "bootstrap.php";
$posts=$dataPost->getAllPosts();
include $_SERVER['DOCUMENT_ROOT']. '/posts/posts.view.php';