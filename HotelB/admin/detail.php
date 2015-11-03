<?php session_start();
include './auth.php';
$re = mysql_query("select * from user where username = '".$_SESSION['username']."'  AND password = '".$_SESSION['password']."' " );
echo mysql_error();
if(mysql_num_rows($re) > 0)
{

} 
else
{

session_destroy();
header("location: index.htm");
}

 ?>
<!DOCTYPE html>
<!-- saved from url=(0044)http://getbootstrap.com/examples/dashboard/# -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="http://getbootstrap.com/favicon.ico">

    <title>Booking System</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <!--script src="js/ie-emulation-modes-warning.js"></script-->
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<link href="css/datepicker.css" rel="stylesheet" type="text/css"/>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
 
  <link rel="stylesheet" href="css/fontello.css">
    <link rel="stylesheet" href="css/animation.css">

 </head>
	<script>
	  $(document).ready(function() {
			$("#checkout").datepicker();
			$("#checkin").datepicker({
			minDate : new Date(),
			onSelect: function (dateText, inst) {
			var date = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);
			$("#checkout").datepicker("option", "minDate", date);
			}
			});
			
		
	  });

function fnSearch()
		{
			var checkin=document.getElementById('checkin').value;
			var checkout=document.getElementById('checkout').value;
			var bookingid=document.getElementById('bookingid').value;
			var firstname=document.getElementById('firstname').value;
			$.ajax({
				type: "POST",
				url: "search.php",
				data: "checkin=" + checkin + "&checkout=" + checkout + "&bookingid=" + bookingid + "&firstname=" + firstname,
				success: function(resPonsE) 
					{
						document.getElementById('bookinginfo').innerHTML=resPonsE;
						return true;
					}
			});
		}
	  
	</script>
  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container-fluid" style="background-color: #4aa3df;">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color: #ffffff;">Admin Booking Panel</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="signout.php" style="color: #ffffff;">Sign Out</a></li>
          </ul>
        </div>
      </div>
    </nav>
	
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="dashboard.php"><i class="icon-gauge"></i> Dashboard <span class="sr-only">(current)</span></a></li>
            
			<li><a href="room.php"><i class="icon-key"></i> Rooms</a></li>
			
			<li><a href="http://www.hotel.gamboh.com.my"><i class="icon-share"></i> Booking Page</a></li>
          </ul>

        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main bookinginfo">
          

          <h2 class="sub-header">Booking Details</h2>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Particulars</th>
                  <th>Descriptions</th>
                </tr>
              </thead>
              <tbody >
			  <?php 
			  include './auth.php';
			  $result = mysql_query("Select * from booking where booking_id=".$_GET['booking']."");
				if( mysql_num_rows($result) >0){
					while ($rows = mysql_fetch_array($result)){
										
					print "				<tr><td>Booking ID</td>\n";
					print "				<td>".$rows['booking_id']." </td></tr>\n";
					print "				<tr><td>Room Book</td>\n";
					print "<td>";
					$q = mysql_query("SELECT roombook.totalroombook AS total, room.room_name AS name
																FROM roombook
																LEFT JOIN room ON roombook.room_id = room.room_id
																WHERE roombook.booking_id =".$rows['booking_id'].";");
																echo mysql_error();
											while($r = mysql_fetch_array($q))
											{
											print "                  ".$r['total']." ".$r['name']."<br> \n";
											}
					print "</td>";
					print "				</tr>\n";
					print "				<tr><td>Total Adult</td>\n";
					print "				<td>".$rows['total_adult']." </td></tr>\n";
					print "				<tr><td>Total Children</td>\n";
					print "				<td>".$rows['total_children']." </td>	</tr>\n";
					print "				<tr><td>Checkin Date</td>\n";
					print "				<td>".$rows['checkin_date']."</td></tr>\n";
					print "				<tr><td>Checkout Date</td>\n";
					print "				<td>".$rows['checkout_date']."</td></tr>\n";
					print "				<tr><td>Special Requirements</td>\n";
					print "				<td>".$rows['special_requirement']."</td></tr>\n";
					print "				<tr><td>Payment Status</td>\n";
					print "				<td>".$rows['payment_status']." </td>	</tr>\n";
					print "				<tr><td>Total Amount</td>\n";
					print "				<td>RM ".$rows['total_amount']."</td></tr>\n";
					print "				<tr><td>Deposit</td>\n";
					print "				<td>RM ".$rows['deposit']."</td></tr>\n";
					print "				<tr><td>Balance</td>\n";
					print "				<td>RM ".($rows['total_amount']-$rows['deposit'])."</td></tr>\n";
					print "				<tr><td>Booking Date</td>\n";
					print "				<td>".$rows['booking_date']." </td>	</tr>\n";
					print "				<tr><td>First Name</td>\n";
					print "				<td>".$rows['first_name']." </td>	</tr>\n";
					print "				<tr><td>Last Name</td>\n";
					print "				<td>".$rows['last_name']." </td>	</tr>			\n";
					print "				<tr><td>Email</td>\n";
					print "				<td>".$rows['email']." </td>	</tr>\n";
					print "				<tr><td>Telephone</td>\n";
					print "				<td>".$rows['telephone_no']."</td></tr>\n";
					print "				<tr><td>Address Line 1</td>\n";
					print "				<td>".$rows['add_line2']." </td>	</tr>\n";
					print "				<tr><td>Address Line 2</td>\n";
					print "				<td>".$rows['add_line2']."</td></tr>		</tr>\n";
					print "				<tr><td>City</td>\n";
					print "				<td>".$rows['city']."</td></tr>	</tr>\n";
					print "				<tr><td>State</td>\n";
					print "				<td>".$rows['state']."</td></tr>	</tr>\n";
					print "				<tr><td>Postcode</td>\n";
					print "				<td>".$rows['postcode']."</td></tr>	</tr>\n";
					print "				<td>Country</td>\n";
					print "				<td>".$rows['country']."</td></tr>	</tr>";
								
					
					}
				
				}
			  ?>
				
              </tbody>
            </table>
          </div>
		  <button type="button" class="btn" id="editbook">Edit Booking</button>
        </div>
		
		<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main editbooking" style="display:none">
			 <button type="button" class="btn" id="back">Back</button><hr>
				 <form  role="form" action="updatebooking.php" method="post">
					
						 <div class="form-group">
	
						<?php
						include './auth.php';
						$id = $_GET['booking'];
						$r = mysql_query("select * from booking where booking_id=".$id."");
						if(mysql_num_rows($r)>0){
							while($rows = mysql_fetch_array($r))
							{
print "							<label for=\"paymentstatus\">Payment Status</label>\n";
print "				<input type=\"hidden\" name=\"bookingid\" id=\"bookingid\" value=\"".$id."\">			<select  type=\"text\" class=\"form-control\" name=\"paymentstatus\" id=\"paymentstatus\" placeholder=\"confirmed or pending\" required><option value=\"\"></option><option value=\"confirmed\">confirmed</option><option value=\"pending\">Pending</option></select>\n";
print "\n";
print "							<hr>\n";
print "						<label for=\"firstname\">First Name</label>	<input type=\"text\" class=\"form-control\" name=\"firstname\" id=\"firstname\" placeholder=\"First Name\" value=\"".$rows['first_name']."\">\n";
print "						<hr><label for=\"lastname\">Last Name</label>	<input type=\"text\" class=\"form-control\" name=\"lastname\" id=\"lastname\" placeholder=\"Last Name\" value=\"".$rows['last_name']."\">\n";
print "						<hr><label for=\"email\">Email</label>	<input type=\"text\" class=\"form-control\" name=\"email\" id=\"email\" placeholder=\"Email\" value=\"".$rows['email']."\">\n";
print "						<hr><label for=\"telephone\">Telephone</label>	<input type=\"text\" class=\"form-control\" name=\"telephone\" id=\"telephone\" placeholder=\"Phone No.\" value=\"".$rows['telephone_no']."\">";

							}
						
						}
						
						?>	
					

						  </div>

				  <hr><button type="submit" class="btn btn-default">Update</button>
				</form>
		</div>
      </div>
    </div>
	

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/docs.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug >
    <script src="js/ie10-viewport-bug-workaround.js"></script-->
  <script>
  $( document ).ready(function() {
      $("#editbook").click(function(){
		$(".editbooking").toggle();
		$(".bookinginfo").toggle();
	  });
	  $("#back").click(function(){
		$(".editbooking").toggle();
		$(".bookinginfo").toggle();
	  });
	});
	function moredetail(id)
	{
	var x = "booking"+id;
	document.getElementById(x).style.display = "block";
	}
  </script>

<div id="global-zeroclipboard-html-bridge" class="global-zeroclipboard-container" title="" style="position: absolute; left: 0px; top: -9999px; width: 15px; height: 15px; z-index: 999999999;" data-original-title="Copy to clipboard">      <object classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" id="global-zeroclipboard-flash-bridge" width="100%" height="100%">         <param name="movie" value="/assets/flash/ZeroClipboard.swf?noCache=1416326489703">         <param name="allowScriptAccess" value="sameDomain">         <param name="scale" value="exactfit">         <param name="loop" value="false">         <param name="menu" value="false">         <param name="quality" value="best">         <param name="bgcolor" value="#ffffff">         <param name="wmode" value="transparent">         <param name="flashvars" value="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com">         <embed src="/assets/flash/ZeroClipboard.swf?noCache=1416326489703" loop="false" menu="false" quality="best" bgcolor="#ffffff" width="100%" height="100%" name="global-zeroclipboard-flash-bridge" allowscriptaccess="sameDomain" allowfullscreen="false" type="application/x-shockwave-flash" wmode="transparent" pluginspage="http://www.macromedia.com/go/getflashplayer" flashvars="trustedOrigins=getbootstrap.com%2C%2F%2Fgetbootstrap.com%2Chttp%3A%2F%2Fgetbootstrap.com" scale="exactfit">                </object></div><svg xmlns="http://www.w3.org/2000/svg" width="200" height="200" viewBox="0 0 200 200" preserveAspectRatio="none" style="visibility: hidden; position: absolute; top: -100%; left: -100%;"><defs></defs><text x="0" y="10" style="font-weight:bold;font-size:10pt;font-family:Arial, Helvetica, Open Sans, sans-serif;dominant-baseline:middle">200x200</text></svg></body></html>