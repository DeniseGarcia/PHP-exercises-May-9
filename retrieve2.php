<?php

	$link = mysqli_connect("localhost","root","", "menagerie");

	if ($link){
		print "You're connected to MySQL Server <br>";
	} else {
		print "cannot connect <br>";
	}

//para pakita yung menu bar
require("homepage.html");



$query = ("SELECT * FROM pet");

	$result = mysqli_query($link, $query);

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