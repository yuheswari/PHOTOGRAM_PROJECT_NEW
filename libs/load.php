<?php

function load_template($name)
{
    include $_SERVER['DOCUMENT_ROOT']."/app/_templates/$name.php"; //not consistant.
}

function validate_credentials($username, $password)
{
    if ($username == "uk@gmail.com" and $password == "password") {
        return true;
    } else {
        return false;
    }
}

