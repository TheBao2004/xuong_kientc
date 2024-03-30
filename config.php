<?php
const ROOT_PATH = "http://localhost/-phpTwo/xuong_ktc/";
const ROOT_URI = "/-phpTwo/xuong_ktc/";

//hàm dd dùng để bug
function dd($data)
{
    echo "<pre>";
    var_dump($data);
    echo "</pre>";
    die;
}

//Hàm chuyển hướng website
function redirect($route)
{
    header("location:" . ROOT_PATH . $route);
    die;
}

function alert($msg){

    if(!empty($msg)){
        echo '<div class="alert alert-danger">'.$msg.'</div>';
    }

};

function setSession($key, $value=''){
    if(!empty(session_id())){
        $_SESSION[$key] = $value;
        return true;
    }
    return false;
}


function getSession($key=''){

if(!empty($key)){
 if(!empty($_SESSION[$key])){
        return $_SESSION[$key];
    }else{
        return false;
    }
}else{

    return $_SESSION;

}
    return false;
}

function removeSession($key=''){

    if(!empty($key)){
        unset($_SESSION[$key]);
        return true;
    }else{
        session_destroy();
        return true;
    }
    return false;

}

function setFlashData($key='', $value=''){
    $key = 'flash_'.$key;

    if($key){
        setSession($key, $value);
        return true;
    }

    return false;

}

function getFlashData($key=''){
    $key = 'flash_'.$key;
    $data = getSession($key);
    removeSession($key);
    return $data;

}



?>