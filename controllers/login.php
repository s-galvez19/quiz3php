<?php

$title = "Login";

// check if there is a possible login error
$error = isset($_GET["error"]);

// load the list of users
$users = $db->query("SELECT username FROM users");

// display the template 
include "views/login.tpl";


