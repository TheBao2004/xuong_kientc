<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<title>Title</title>
</head>
<body>

<?php


?>

<div class="container pt-5 mt-5">
     
<nav class="navbar navbar-expand-lg bg-light mb-5">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="<?php echo ROOT_PATH."categories" ?>">Danh mục</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_PATH."products" ?>">Sản phẩm</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo ROOT_PATH."logout" ?>">Đăng xuất</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php echo alert(getFlashData('msg')) ?>


    <h1 class="text-center">Sửa sản phẩm</h1>

    <form action="" method="post">

        <input type="hidden" name="Id" value="<?php echo $model->Id ?>">

        <div class="mb-3">
            <label for="" class="mb-2">Category</label>
            <select name="Cate_id" id="" class="form-select">
                <?php foreach ($categories as $cate): ?>

                    <option <?php echo $cate->Id == $model->Cate_id ? "selected" : "" ?> value="<?php echo $cate->Id ?>"><?php echo $cate->Name ?></option>

                <?php endforeach; ?>
            </select>
        </div>

        <div class="mb-3">
            <label for="" class="mb-2">Name</label>
            <input type="text" name="Name" class="form-control" value="<?php echo $model->Name ?>"> 
        </div>

        
        <div class="mb-3">
            <label for="" class="mb-2">Price</label>
            <input type="text" name="Price" class="form-control" value="<?php echo $model->Price ?>"> 
        </div>

        <div class="mb-3">
            <input type="submit" class="btn btn-primary">
        </div>

    </form>
    
    <a href="<?php echo ROOT_PATH."products" ?>" class="btn btn-success">Danh sách</a>

</div>



<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>