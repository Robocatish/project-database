<?php include $_SERVER['DOCUMENT_ROOT']. '/templates/header.php';?>
<div class="container">
    <p class="alert <?= $_SESSION['alert'] ?>"><?=$_SESSION['msg']?? ''?></p>
<form action="insert.post.php" method="post" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="title" class="form-label">Название статьи
            <input type="text" name="title" class="form-control">
        </label>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">
            Изображение<input type="file" name="image" class="form-control" id="image">
        </label>
    </div>
    <div class="mb-3">
        <label for="text" class="form-label">Текст статьи
            <textarea name="text" class="form-control" rows="3"></textarea>
        </label>
    </div>
    <img src="" alt="" id="loadImage" style="width: 200px">
    <button type="submit" class="btn btn-primary" name="submit">Добавить</button>
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