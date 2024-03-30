<?php

namespace App\Controllers;

use App\Models\CategoryModel;
use App\Models\ProductModel;

class ProductController extends BaseController{ 

    function __construct()
    {
        if(empty($_SESSION['login'])){
            redirect('login');
        }
    }

    public function index(){

        // redirect("logout");
        // echo 123;
        $list = ProductModel::all();    

        return $this->view("Product/Index", ['list' => $list]);

    }

    public function create(){

        $categories = CategoryModel::all();

        return $this->view("Product/Create", ["categories" => $categories]);

    }

    public function store(){

        if(empty($_POST["Cate_id"]) || empty($_POST['Name']) || empty($_POST['Price'])){
            setFlashData("msg", "Vui lòng nhập đủ trường");
            redirect("products/create");
        }

        $data = [
            "Cate_id" => $_POST["Cate_id"],
            "Name" => $_POST["Name"],
            "Price" => $_POST["Price"]
        ];

        ProductModel::insert($data);

        redirect("products");

    }


    public function edit(){

        $id = $_GET["id"];

        $model = ProductModel::find($id);

        $categories = CategoryModel::all();

        return $this->view("Product/Edit", ["model" => $model, "categories" => $categories]);

    }


    public function update(){


        if(empty($_POST["Cate_id"]) || empty($_POST['Name']) || empty($_POST['Price'])){
            setFlashData("msg", "Vui lòng nhập đủ trường");
            redirect("products/edit?id=".$_POST['Id']);
        }


        $data = [
            "Cate_id" => $_POST["Cate_id"],
            "Name" => $_POST["Name"],
            "Price" => $_POST["Price"]
        ];

        ProductModel::update($_POST["Id"], $data);

        redirect("products");

    }


    public function delete(){

        $id = $_GET["id"];

        ProductModel::delete($id);

        redirect("products");

    }

}