<?php
	//connection to mysql server

	$link = mysqli_connect("localhost","root","", "menagerie");

	if ($link){
		print "You're connected to MySQL Server <br>";
	} else {
		print "cannot connect <br>";
	}


	$query = ("SELECT * FROM pet");

	$result = mysqli_query($link, $query);

	/*if ($query){
		print "Successfully added new info <br>";
	} else {
		print "Cannot insert new info <br>";
	}*/

	$num_rows = mysqli_num_rows($result);

	print "<br>There are $num_rows records <br>";

	print "<p><table border=\"1\">\n";

	while ($a_row = mysqli_fetch_row($result)) {
		print "<tr>\n";
		
		foreach ($a_row as $field) {
			print "\t<td>".$field."</td>\n";
		}
		
		print "</tr>\n"; 
	}

	print "</table></p>\n";
?>