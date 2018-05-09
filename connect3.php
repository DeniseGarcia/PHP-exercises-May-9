<?php
	//connection to mysql server

	$link = mysqli_connect("localhost","root","", "menagerie");

	if ($link){
		print "You're connected to MySQL Server <br>";
	} else {
		print "cannot connect to MySQL<br>";
	}

?>