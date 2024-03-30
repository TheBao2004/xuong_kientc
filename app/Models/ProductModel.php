<?php


namespace App\Models;

class ProductModel extends BaseModel{

    function __construct()
    {

        parent::__construct();

        $this->tableName = "products";

    }

}