<?php
	//connection to mysql server
	$link = mysqli_connect("localhost","root","", "menagerie");

	if ($link){
		print "You're connected to MySQL Server <br>";
	} else {
		print "cannot connect <br>";
	}

	$delete = ("DELETE FROM pet WHERE name='sCRUFF'");

	mysqli_query($link, $delete);

	if($delete){
		print "Successfully deleted info";
	} else {
		print "Cannot update";
	}

?>