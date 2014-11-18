<!DOCTYPE html>
<html>
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
<script src="jquery.backstretch.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<meta class="foundation-data-attribute-namespace"><meta class="foundation-mq-xxlarge"><meta class="foundation-mq-xlarge"><meta class="foundation-mq-large"><meta class="foundation-mq-medium"><meta class="foundation-mq-small"><style></style><meta class="foundation-mq-topbar"></head>
<body class="fontbody">
 
<div class="row foo" style="margin:30px auto 30px auto;">
<div class="large-12 columns">
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round blackblur fontslabo" >1</a>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round fontslabo" style="background-color:#2ecc71;">2</a>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round blackblur fontslabo">3</a>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round blackblur fontslabo">4</a>
		</div>
</div>

</div>
</div>
 
<div class="row">
	<div class="large-4 columns blackblur fontcolor" style="margin-left:-10px; padding:10px;">
	
		<div class="large-12 columns " >
		<p><b>Check Date</b></p><hr>
				<form action="checkavailability.php" method="post">
				<div class="row">
					
						<div class="large-6 columns" style="max-width:100%;">
							<label class="fontcolor">Check In
								<input name="checkin" id="checkin" style="width:100%;"/>
							</label>
						</div>
						
						<div class="large-6 columns" style="max-width:100%;">
							<label class="fontcolor">Check Out
								<input name="checkout" id="checkout" style="width:100%;"/>
							</label>
						
						
						</div>
				</div>
						
				<div class="row">
					
						<div class="large-6 columns">
							<label class="fontcolor">Adults
								
									<select  name="totaladults" id="totaladults" style="width:100%;">
									<option value="0">0</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									</select>
								
							</label>
						</div>
						
						<div class="large-6 columns"  style="max-width:100%;">
							<label class="fontcolor">Children
								<select  name="totalchildrens" id="totalchildrens" style="width:100%; color:black;">
								<option value="0">0</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								</select>
							</label>
						</div>
						
					
				</div>
				
				  <div class="row">
					<div class="large-12 columns" >
						<button name="submit" href="#" class="button small fontslabo" style="background-color:#2ecc71; width:100%;" >Check Availability</button>
					</div>
				  </div>
				</form>
		</div>
	


	</div>
	<div class="large-8 columns blackblur fontcolor" style="padding:10px">
	
		<div class="large-12 columns" >
		<p><b>Choose Your Room</b></p><hr>
				<form action="placeyourreservation.php" method="post">
					<p><h4>Deluxe Suite Room</h4></p>
					<div class="row">
					
						<div class="large-4 columns">
							<img src="img/room2.png"></img>
						</div>
						<div class="large-4 columns">
						<p><span class="fontgrey">Occupancy : </span> 10<br>
						<span class="fontgrey">Size : </span> 10
						<br><span class="fontgrey">View : </span> 10</p>

						</div>
						<div class="large-4 columns">
						<p ><span class="fontgrey">Rate : MYR </span><span style="font-size:24px;">180</span><span class="fontgrey">/ night</span><br>
						<span style="text-align:right;">6 room available</span>
						</p>
							<div class="row">
								<div class="large-6 columns">
									<label class="fontcolor">
										<select  name="totalchildrens" id="value.room_id" style="width:100%; color:black; height:45px;">
											<option value="0">0</option>
											<option value="1">1</option>
											<option value="2">2</option>
											<option value="3">3</option>
											<option value="4">4</option>
											<option value="5">5</option>
											<option value="6">6</option>
										</select>
									</label>
								</div>
								<div class="large-6 columns">
									<button type="submit" id="button.room_id" class="button small" style="background-color:#2ecc71; width:100%; height:45px; !important;" >Book</button>
								</div>
							</div>
						</div>
						
					</div>
					
				</form>
		</div>
	


	</div>


</div>

<script>
</script>
</body></html>