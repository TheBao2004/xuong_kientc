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

    <a href="<?php echo ROOT_PATH."login"; ?>" class="btn btn-primary">Đăng nhập</a>

    <h1 class="text-center pb-5 mb-5">Sản phẩm của STORE</h1>

    <div class="row row-cols-lg-5 mx-0">

        <?php foreach ($model as $key => $value): ?>

            <div class="col text-center">
                <h1><?php echo $value->Name ?></h1>
                <h1><?php echo $value->Price ?></h1>
            </div>

        <?php endforeach; ?>

    </div>

</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.0/js/bootstrap.min.js"></script>
</body>
</html>