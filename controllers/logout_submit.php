<?php

// delete the variables
unset($_SESSION["id"]);
unset($_SESSION["user"]);

// destroy the session
session_destroy();

// redirect to login
header("Location: ?p=login");