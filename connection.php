<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "login_leaf_now";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}