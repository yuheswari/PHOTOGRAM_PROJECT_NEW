<?php

include_once 'includes/Mic.class.php';
include_once 'includes/User.class.php';
include_once 'includes/Database.class.php';

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/app_new/__templates/$name.php"; //not consistant.
}

function validate_credentials($username, $password)
{
    if ($username == "uk@gmail.com" and $password == "password") {   
        return true;
    } else {
        return false;
    }



}