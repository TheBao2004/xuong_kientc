<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;

class CategoryController extends BaseController{ 

    function __construct()
    {
        if(empty($_SESSION['login'])){
            redirect('login');
        }
    }

    public function index(){

        $list = CategoryModel::all();        

        return $this->view("Category/Index", ['list' => $list]);

    }

    public function create(){

        return $this->view("Category/Create");

    }

    public function store(){

        if(empty($_POST["Name"])){
            setFlashData('msg', 'Vui lòng nhập');
            redirect("categories/create");
        }

        $data = [
            "Name" => $_POST["Name"]
        ];

        CategoryModel::insert($data);

        redirect("categories");

    }


    public function edit(){

        $id = $_GET["id"];

        $model = CategoryModel::find($id);

        return $this->view("Category/Edit", ["model" => $model]);

    }


    public function update(){

        if(empty($_POST["Name"])){
            setFlashData('msg', 'Vui lòng nhập');
            redirect("categories/edit?id=".$_POST['Id']);
        }

        $data = [
            "Name" => $_POST["Name"]
        ];

        CategoryModel::update($_POST["Id"], $data);

        redirect("categories");

    }


    public function delete(){

        $id = $_GET["id"];

        $product = ProductModel::ProductCategory($id);

        if(!empty($product)){
            setFlashData('msg', 'Đang có sản phẩm sử dụng danh mục này');
            redirect("categories");
        }

        CategoryModel::delete($id);

        redirect("categories");

    }

}