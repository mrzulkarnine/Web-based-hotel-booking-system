<?php
session_start();
if(isset($_POST["checkin"]) && !empty($_POST["checkin"]) && isset($_POST["checkout"]) && !empty($_POST["checkout"])){
	$_SESSION['checkin_date'] = date('d-m-y', strtotime($_POST['checkin'])); 
	$_SESSION['checkout_date'] = date('d-m-y', strtotime($_POST['checkout']));
	$_SESSION['checkin_db'] = date('y-m-d', strtotime($_POST['checkin'])); 
	$_SESSION['checkout_db'] = date('y-m-d', strtotime($_POST['checkout']));
	$_SESSION['datetime1'] = new DateTime($_SESSION['checkin_db']);
	$_SESSION['datetime2'] = new DateTime($_SESSION['checkout_db']);
	$_SESSION['checkin_unformat'] = $_POST["checkin"]; 
	$_SESSION['checkout_unformat'] = $_POST["checkout"];
	$_SESSION['interval'] = $_SESSION['datetime1']->diff($_SESSION['datetime2']);

	$_SESSION['total_night'] = $_SESSION['interval']->format('%d');

}
if(isset( $_POST["totaladults"] ) ){
$_SESSION['adults'] = $_POST["totaladults"];
}

if(isset( $_POST["totalchildrens"] ) ){
$_SESSION['childrens'] = $_POST["totalchildrens"];
}


?>
<!DOCTYPE html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservation</title>
<meta name="reservation hotel for malaysia" >
<meta name="zulkarnain" content="gambohnetwork.com.my">
<meta name="copyright" content="Hotel Malaysia, inc. Copyright (c) 2014">
<link rel="stylesheet" href="scss/foundation.css">
<link rel="stylesheet" href="scss/style.css">
<link href='http://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<meta class="foundation-data-attribute-namespace"><meta class="foundation-mq-xxlarge"><meta class="foundation-mq-xlarge"><meta class="foundation-mq-large"><meta class="foundation-mq-medium"><meta class="foundation-mq-small"><style></style><meta class="foundation-mq-topbar"></head>
<body class="fontbody">
<div class="row foo" style="margin:30px auto 30px auto;">
<div class="large-12 columns">
		<div class="large-3 columns centerdiv">
			<a href="sessiondestroy.php" class="button round blackblur fontslabo" >1</a>
			<p class="fontgrey">Please select Date</p>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round fontslabo" style="background-color:#2ecc71;">2</a>
			<p class="fontgrey">Select Room</p>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round blackblur fontslabo" >3</a>
			<p class="fontgrey">Guest Details</p>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round blackblur fontslabo" >4</a>
			<p class="fontgrey">Reservation Complete</p>
		</div>
</div>

</div>
</div>
 
<div class="row">
	<div class="large-4 columns blackblur fontcolor" style="margin-left:-10px; padding:10px;">
	
		<div class="large-12 columns " >
		<p><b>Your Reservation</b></p><hr class="line">
				<form action="sessiondestroy.php" method="post">
				<div class="row">
					<div class="large-12 columns">
						<div class="row">
						
							<div class="large-6 columns" style="max-width:100%;">
								<span class="fontgrey">Check In
								</span>
							</div>
							
							<div class="large-4 columns" style="max-width:100%;">
								<span class="">: <?php echo $_SESSION['checkin_date'];?>
								</span>				
							
							</div>
						</div>
						<div class="row">
							<div class="large-6 columns" style="max-width:100%;">
								<span class="fontgrey">Check Out
								</span>
							</div>
							
							<div class="large-4 columns" style="max-width:100%;">
								<span class="">: <?php echo $_SESSION['checkout_date'];?>
								</span>				
							
							</div>
						</div>
						<div class="row">
							<div class="large-6 columns" style="max-width:100%;">
								<span class="fontgrey">Adults
								</span>
							</div>
							
							<div class="large-4 columns" style="max-width:100%;">
								<span class="">: <?php echo $_SESSION['adults'];?>
								</span>				
							
							</div>
						</div>
						<div class="row">
							<div class="large-6 columns" style="max-width:100%;">
								<span class="fontgrey">Childrens
								</span>
							</div>
							
							<div class="large-4 columns" style="max-width:100%;">
								<span class="">: <?php echo $_SESSION['childrens'];?>
								</span>				
							
							</div>
						</div>
						<div class="row">
							<div class="large-6 columns" style="max-width:100%;">
								<span class="fontgrey" style="font-size:13.2px;">No. of Night Stay(s)
								</span>
							</div>
							
							<div class="large-4 columns" style="max-width:100%;">
								<span class="">: <?php echo  $_SESSION['total_night'];?>
								</span>				
							
							</div>
						</div>
						
					</div>	
				</div>
						

				
				  <div class="row">
					<div class="large-12 columns" >
						<br><button name="submit" href="#" class="button small fontslabo" style="background-color:#2ecc71; width:100%;" >Edit Reservation</button>
					</div>
				  </div>
				</form>
		</div>
		<div class="large-12 columns" id="roomselected" style="display:none;" >
				<hr>
							<br><label for="submit-form" class="book button small fontslabo" style="background-color:#2ecc71; width:100%; height:45px; !important;">Proceed To Book</label><!--button name="submit" href="#" class="button small fontslabo" style="background-color:#2ecc71; width:100%;" >Proceed Booking</button-->

		</div>
	


	</div>
	<div class="large-8 columns blackblur fontcolor" style="padding:10px">
	
		<div class="large-12 columns" >
			<?php
				include './auth.php';
				// check available room
				$datestart =  date('y-m-d', strtotime($_SESSION['checkin_unformat']) );
				$dateend =  date('y-m-d', strtotime($_SESSION['checkout_unformat']));
				
				$result = mysql_query("SELECT r.room_id, (r.total_room-br.total) as availableroom from room as r LEFT JOIN ( 
				
										SELECT roombook.room_id, sum(roombook.totalroombook) as total from roombook where roombook.booking_id IN 
											(
												SELECT b.booking_id as bookingID from booking as b 
												where 
												(b.checkin_date between '".$datestart."' AND '".$dateend."') 
												OR 
												(b.checkout_date between '".$dateend."' AND '".$datestart."')
												
												
											)
										
										group by roombook.room_id
										)
										as br
					 
					 ON r.room_id = br.room_id");
				echo mysql_error();
				if(mysql_num_rows($result) > 0){
					echo "<p><b>Choose Your Room</b></p><hr class=\"line\">";
					print "				<form action=\"guestform.php\" method=\"post\">\n";
					
							
					while ($row = mysql_fetch_array($result)) {
				
								
						if($row['availableroom'] != null && $row['availableroom'] > 0  )
						{
							
							$sub_result = mysql_query("select room.* from room where room.room_id = ".$row['room_id']." ");
							
							if(mysql_num_rows($sub_result) > 0)
							{
								
								while($sub_row = mysql_fetch_array($sub_result)){
								
								
								print "					<p><h4>".$sub_row['room_name']."</h4></p>\n";
								print "					<div class=\"row\">\n";
								print "					\n";
								print "						<div class=\"large-4 columns\">\n";
								print "							<img src=\"".$sub_row['imgpath']."\"></img>\n";
								print "						</div>\n";
								print "						<div class=\"large-4 columns\">\n";
								print "						<p><span class=\"fontgrey\">Occupancy : </span> ".$sub_row['occupancy']."<br>\n";
								print "						<span class=\"fontgrey\">Size : </span> ".$sub_row['size']."\n";
								print "						<br><span class=\"fontgrey\">View : </span> ".$sub_row['view']."</p>\n";
								print "\n";
								print "						</div>\n";
								print "						<div class=\"large-4 columns\">\n";
								print "						<p ><span class=\"fontgrey\">Rate : MYR </span><span style=\"font-size:24px;\">".$sub_row['rate']."</span><span class=\"fontgrey\">/ night</span><br>\n";
								print "						<span style=\"text-align:right;\">".$row['availableroom']." room available</span>\n";
								print "						</p>\n";
								print "							<div class=\"row\">\n";
								print "								<div class=\"large-11 columns\">\n";
								print "									<label class=\"fontcolor\">\n";
								print "										<select  class=\"no_of_room\" name=\"qtyroom".$sub_row['room_id']."\" id=\"room".$sub_row['room_id']."\" onChange=\"selection(".$sub_row['room_id'].")\"  style=\"width:100%; color:black; height:45px;\" ;\">\n";
								print "											<option  value=\"0\">0</option>\n";
																				$i = 1;
																				while($i <= $row['availableroom'])
																				{
								print "											<option value=\"".$i."\">".$i."</option>\n";	
																				$i = $i+1;
																				}
								print "										</select>\n";
								print "									</label>\n";
								print "								</div>\n";
								print "								<div class=\"large-1 columns\">\n";
							    print "<input type=hidden name=\"selectedroom".$sub_row['room_id']."\"  id=\"selectedroom".$sub_row['room_id']."\" value=\"".$sub_row['room_id']."\">";
								print "<input type=hidden name=\"room_name".$sub_row['room_id']."\" id=\"room_name".$sub_row['room_id']."\" value=\"".$sub_row['room_name']."\">";
								print "								</div>\n";
								print "							</div>\n";
								print "						</div>\n";
								print "						\n";
								print "					</div>\n";
								print "					\n";
								print "				<hr>";
								}
								
							}
						}
						else if($row['availableroom'] == null ){
							$sub_result2 = mysql_query("select room.* from room where room.room_id = ".$row['room_id']." ");
							if(mysql_num_rows($sub_result2) > 0)
							{
								while($sub_row2 = mysql_fetch_array($sub_result2)){
								
								print "					<p><h4>".$sub_row2['room_name']."</h4></p>\n";
								print "					<div class=\"row\">\n";
								print "					\n";
								print "						<div class=\"large-4 columns\">\n";
								print "							<img src=\"".$sub_row2['imgpath']."\"></img>\n";
								print "						</div>\n";
								print "						<div class=\"large-4 columns\">\n";
								print "						<p><span class=\"fontgrey\">Occupancy : </span> ".$sub_row2['occupancy']."<br>\n";
								print "						<span class=\"fontgrey\">Size : </span> ".$sub_row2['size']."\n";
								print "						<br><span class=\"fontgrey\">View : </span> ".$sub_row2['view']."</p>\n";
								print "\n";
								print "						</div>\n";
								print "						<div class=\"large-4 columns\">\n";
								print "						<p ><span class=\"fontgrey\">Rate : MYR </span><span style=\"font-size:24px;\">".$sub_row2['rate']."</span><span class=\"fontgrey\">/ night</span><br>\n";
								print "						<span style=\"text-align:right;\">".$sub_row2['total_room']." room available</span>\n";
								print "						</p>\n";
								print "							<div class=\"row\">\n";
								print "								<div class=\"large-11 columns\">\n";
								print "									<label class=\"fontcolor\">\n";
								print "										<select  class=\"no_of_room\" name=\"qtyroom".$sub_row2['room_id']."\"  id=\"room".$sub_row2['room_id']."\" onChange=\"selection(".$sub_row2['room_id'].")\" style=\"width:100%; color:black; height:45px;\" >\n";
								print "											<option value=\"0\">0</option>\n";
																				$i = 1;
																				while($i <= $sub_row2['total_room'])
																				{
								print "											<option value=\"".$i."\">".$i."</option>\n";	
																				$i = $i+1;
																				}
								print "										</select>\n";
								print "									</label>\n";
								print "								</div>\n";
								print "								<div class=\"large-1 columns\">\n";
							    print "<input type=hidden name=\"selectedroom".$sub_row2['room_id']."\" value=\"".$sub_row2['room_id']."\">";
								print "<input type=hidden name=\"room_name".$sub_row2['room_id']."\" value=\"".$sub_row2['room_name']."\">";
								//print "				<button type=\"submit\"  class=\"book button small\" style=\"background-color:#2ecc71; width:100%; height:45px; !important;\" >Book</button>\n";	
								print "								</div>\n";
								print "							</div>\n";
								print "						</div>\n";
								print "						\n";
								print "					</div>\n";
								print "					\n";
								print "				<hr>";
								}
								
							}		
						}
					}
				}		
				else{
				echo "<p><b>No room available</b></p><hr>";
				}
					print "<button type=\"submit\" id=\"submit-form\" class=\"hidden\" style=\"display:none\">Book</button>\n";
							print "	</form>";	

			?>
		</div>
	


	</div>

</div>
<script>
function selection(id) {
	var e = document.getElementById('roomselected').style.display='block';

}
</script>
</body></html>