<?php

include_once("connect3.php");
require("homepage.html");


$search = $_GET['search'];


$query=("SELECT * FROM pet WHERE name = \"$search\"");

mysqli_query($link, $query);


?>