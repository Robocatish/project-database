<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css"
          integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1"
          crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
<div class="header">
    <a href="/posts/insert.view.php" class="main">Добавить статью</a>
    <a href="/index.php" class="main">Статьи</a>
    <div class="sub-header">
        <a class="account" href="#"
        style="display: <?= $user ? 'inline': 'none'?>">
        <?=$user ? $user->name: '' ?></a>
        <a href="/register" class="account"
        style="display: <?=$user ? 'none':'inline'?>"> Регистрация</a>
        <a href="/auth" class="account">
            <?= $user ? 'Выйти' : "Авторизация"?>
        </a>
    </div>
</div>
