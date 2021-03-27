<?php include $_SERVER["DOCUMENT_ROOT"]. '/templates/header.php';?>
<div class="container col-8 offset-2">
    <p><span class="error" style="display: <?=$_SESSION['errors']['update']?'block':'none'?>;">
        <?=$_SESSION['errors']['update']?>
        </span></p>
    <form action="update.post.php" method="post" enctype="multipart/form-data">
        <div class="row">
            <div class="col-8">
                <input type="hidden" name="id" value="<?=$post->id?>">
            </div>

        <div class="mb-3">
            <label for="title" class="form-label">Название статьи</label>
                <input type="text" name="title" class="form-control" id="title" value="<?=$post->title?>">
        </div>
        <div class="mb-3">
            <label for="text" class="form-label">Текст статьи</label>
                <textarea name="text" id="text" class="form-control" rows="3"><?=$post->text?></textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Изображение</label>
                <input type="file" name="image" class="form-control" id="image">
        </div>
        <div class="col"><img src="../img/<?=$post->image?>" alt="" id="loadImage" class="w-100 rounded"></div>

        <button type="submit" class="btn btn-outline-info col-3 float-end" name="submitUpdate">Изменить</button>
        </div>
    </form>
</div>
    <script>
        let loadImage = document.querySelector("#loadImage"),
            image=document.querySelector('#image');

        image.addEventListener('change', function(e){
            loadImage.src = URL.createObjectURL(e.target.files[0]);
            loadImage.style.display='block';
            loadImage.onload = function (){
                URL.revokeObjectURL(e.target.src)
            };
        });
    </script>
<?php include $_SERVER['DOCUMENT_ROOT']. '/templates/footer.php';?>