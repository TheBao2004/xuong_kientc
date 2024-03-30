<?php

namespace App\Controllers;

use App\Models\ProductModel;
use App\Models\UserModel;

class OtherController extends BaseController{

    function store(){

        if(!empty($_SESSION['login'])){
            redirect('categories');
        }

        $model = ProductModel::all();

        return $this->view("Other/Store", ['model' => $model]);

    }

    function login(){

        if(!empty($_SESSION['login'])){
            redirect('categories');
        }

        return $this->view("Other/Login");

    }

    function handle(){

        $users = UserModel::find(1);

        if($users->Email != $_POST["Email"]){
            redirect("login");
        }

        if($users->Password != $_POST["Pass"]){
            redirect("login");
        }

        $_SESSION['login'] = true;

        redirect("categories");

    }

    function logout(){

        unset($_SESSION['login']);

        redirect("products");

    }


}