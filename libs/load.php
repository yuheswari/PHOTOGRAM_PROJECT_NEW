<?php

function load_template($name){
    
    include $_SERVER['DOCUMENT_ROOT']. "/app_new/__templates/$name.php";  //not consistant with the path
    
}
function validate_credentials($username,$password){

    //print("validate_credentials()");
    if($username== "yuhes@gmail.com" and $password== password){
        return true;
    }else{
        return false;
    }
}