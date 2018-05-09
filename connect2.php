<?php
	//connection to mysql server
	

	$link = mysqli_connect("localhost","root","", "menagerie");

	if ($link){
		print "You're connected to MySQL Server <br>";
	} else {
		print "cannot connect <br>";
	}




	//inserting data
	$query = ("INSERT INTO pet VALUES('sCRUFF', 'TOM', 'hamster', 'm', '2000-02-04', NULL)");

	mysqli_query($link, $query);

	if ($query){
		print "Successfully added new info <br>";
	} else {
		print "Cannot insert new info <br>";
	}

?>