<?php

function load_template($name){
    
    include $_SERVER['DOCUMENT_ROOT']. "/app_new/__templates/$name.php";  //not consistant with the path
    
}