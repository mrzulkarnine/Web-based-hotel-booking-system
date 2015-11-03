<html>

<head>
<title>reservation</title>
</head>
<body>
This is normal HTML code
	<?php
	$checkin_date =  date('y-m-d', strtotime($_POST['checkin']));
	$checkout_date =  date('y-m-d', strtotime($_POST['checkout']));
	echo "<br>".$checkin_date."<br>";
	echo $checkout_date;
	include './auth.php';
	
	//execute the SQL query and return records
	$result = mysql_query("select * from Room where room.room_id in 
		  (
              select booking.room_id
              from booking 
	       )");
	//fetch tha data from the database 
	while ($row = mysql_fetch_array($result)) {
	   echo "<br>room_id:".$row{'room_id'}." Room_type:".$row{'bed_type'}."Occupany: ".$row{'occupancy'}."<br>"; //display the results
		print "<div class=\"row\">\n";
		print "				<div class=\"large-4 columns\" >\n";
		print "					<img src=\"".$row{'imgpath'}."\" alt=\"room #1\" ></img>\n";
		print "				</div>\n";
		print "				<div class=\"large-4 columns\" style=\"font-size: 18px;\">\n";
		print "					Occupancy : ".$row{'occupancy'}."<br>\n";
		print "					Size : ".$row{'size'}."<br>\n";
		print "					View : ".$row{'view'}."\n";
		print "					Bed : ".$row{'bed_type'}."\n";
		print "				</div>\n";
		print "				<div class=\"large-4 columns\" style=\"font-size: 18px;\">\n";
		print "					From: $ ".$row{'rate'}." / night\n";
		print "					<button type=\"button\" href=\"#\" class=\"button small selectroom fontslabo\" style=\"background-color:#2ecc71;\"  value=\"".$row{'room_id'}."\">Select Room</button>\n";
		print "					\n";
		print "				</div>\n";
		print "			</div><hr>";


	   
	}
	mysql_close($dbhandle);
	
	?>
</body>
</html>