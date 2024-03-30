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


<h1 class="text-center">Danh sách sản phẩm</h1>

<a class="btn btn-primary" href="<?php echo ROOT_PATH."products/create" ?>">Tạo</a>

<table class="table">

    <tr>
        <th>STT</th>
        <th>Name</th>
        <th>Price</th>
        <th>Sửa</th>
        <th>Xóa</th>
    </tr>

    <?php
        foreach ($list as $key => $value):
    ?>

        <tr>
            <td><?php echo $key + 1; ?></td>
            <td><?php echo $value->Name ?></td>
            <td><?php echo $value->Price ?></td>
            <td>
                <a href="<?php echo ROOT_PATH."products/edit?id=".$value->Id ?>" class="btn btn-warning">Sửa</a>
            </td>
            <td>
                <a onclick="return confirm('xác nhận')" href="<?php echo ROOT_PATH."products/delete?id=".$value->Id ?>" class="btn btn-danger">Xóa</a>
            </td>
        </tr>

    <?php endforeach; ?>

</table>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>