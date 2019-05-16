<?php

// catch params from the get
$id = $_GET["id"];
$action = $_GET["action"]; // likes or dislikes

// update likes or dislike
if(in_array($action, ['content'])) {
	$db->query("UPDATE posts SET $action=$action WHERE id=$id");
}

// redirect to login
header("Location: ?p=list");