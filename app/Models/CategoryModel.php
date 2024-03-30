<?php


namespace App\Models;

class CategoryModel extends BaseModel{

    function __construct()
    {

        parent::__construct();

        $this->tableName = "categories";

    }

}