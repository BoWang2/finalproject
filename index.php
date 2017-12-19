<?php 
ini_set('display_errors', 'on');
error_reporting(E_ALL);

include_once "autload.php";
include_once "database.php";

$response = controller\processRequest::createResponse();// Start tracing the program from here following the classes and methods being called

 ?>