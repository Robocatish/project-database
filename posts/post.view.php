<?php include $_SERVER['DOCUMENT_ROOT']. '/templates/header.php';?>
<div class="main">
    <?php if ($post): ?>
    <div class="mb-3">
    <img src="../img/<?= $post->image?>" alt="" style="width: 200px">
    <p><?= $post->title?></p>
    <div><?= $post->text?></div>
    </div>

        <form action="delete.Post.php" method="post">
            <input type="hidden" name="id" value="<?= $post->id ?>">
            <button type="submit" class="btn btn-danger px-3"
                    name="deleteBtn" id="deleteBtn"
            onclick="return confirm(`вы действительно хотите удалить статью?`);">
                удалить статью
            </button>
        </form>
        <a href="edit.php?id=<?=$post->id?>" class="btn btn-info px-3">Изменить статью</a>
<?php else: ?>
    <div>Запрашиваемый ресурс не найден...</div>
<?php endif;?>
</div>
<?php include $_SERVER['DOCUMENT_ROOT']. '/templates/footer.php';?>