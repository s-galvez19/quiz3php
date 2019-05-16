<?php

// get the page to open
if(empty($_GET['p'])) $page = "login";
else $page = $_GET['p'];

// show 404 page not found
if( ! file_exists("controllers/$page.php")) {
	echo "404 Page not found";
	exit;
}

// start the session
session_start();

// force login to continue
$open = ["login", "login_submit"];
if(!in_array($page, $open) && empty($_SESSION["user"])) $page = "login";

// load global variables
$title = "Blog Posts";

// connect to the database
include "classes/Database.php";
$db = new Database();
$db->connect();

// include the controller
include "controllers/$page.php";

// close the mysql connection
$db->disconnect();