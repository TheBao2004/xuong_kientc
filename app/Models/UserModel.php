<?php


namespace App\Models;

class UserModel extends BaseModel{

    function __construct()
    {

        parent::__construct();

        $this->tableName = "users";

    }

}