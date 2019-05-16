<?php

$title = "Pictures";

$user = $_SESSION["user"];

// get the images
$images = $db->query("
	SELECT A.id, A.title, A.content,  A.picture AS pic, B.username AS user
	FROM posts A
	JOIN users B
	ON A.userid = B.id");

// include the view
include "views/list.tpl";