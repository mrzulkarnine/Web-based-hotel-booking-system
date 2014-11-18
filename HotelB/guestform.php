<?php
session_start();
if(isset($_POST["checkin"])&& isset($_POST["checkout"])){
$_SESSION['checkin_date'] = $_POST["checkin"];
$_SESSION['checkout_date'] = $_POST["checkout"];
$_SESSION['adults'] = $_POST["totaladults"];
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
<link rel="stylesheet" href="icon/css/fontello.css">
<link rel="stylesheet" href="icon/css/animation.css"><!--[if IE 7]><link rel="stylesheet" href="css/fontello-ie7.css"><![endif]-->
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
			<a href="#" class="button round blackblur fontslabo" >2</a>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round blackblur fontslabo">3</a>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round fontslabo" style="background-color:#2ecc71;">4</a>
		</div>
</div>

</div>
</div>
 
<div class="row">
	<div class="large-4 columns blackblur fontcolor" style="margin-left:-10px; padding:10px;">
	
		<div class="large-12 columns " >
		<p><b>Your Reservation</b></p><hr>
				<form action="index.php" method="post">
				<div class="row">
					
						<div class="large-6 columns" style="max-width:100%;">
							<p class="fontgrey">Check In<br> Check Out<br>Adults<br>Childrens
							</p>
						</div>
						
						<div class="large-4 columns" style="max-width:100%;">
							<p class="">: 17-11-14<br>: 18-11-14<br>: 4<br>: 0
							</p>				
						
						</div>
				</div>
				<div class="row">					
						<div class="large-12 columns" style="max-width:100%;">
							<p class="fontgrey borderstyle" style="text-align:center;">15% Deposit Due Now<br>
							<span class="fontslabo " style="font-size:32px; text-align:center;">RM 15</span>
							<br><span class="fontgrey" style="text-align:center;">Total</span><br>
							<span class="fontslabo" style="font-size:32px; text-align:center;">RM 100</span></p>
							
						</div>
						
						<div class="large-12 columns" style="max-width:100%;">
							
							
						</div>
				</div>
						

				
				  <div class="row">
					<div class="large-12 columns" >
						<button name="submit" href="#" class="button small fontslabo" style="background-color:#2ecc71; width:100%;" >Edit Reservation</button>
					</div>
				  </div>
				</form>
		</div>
	


	</div>

	<div class="large-8 columns blackblur fontcolor" style="padding-top:10px;">
		<p><b>Guest Details</b></p><hr>
		<form action="reservationcomplete.php" method="post">
		  <div class="row">
			<div class="large-6 columns">
			  <label class="fontcolor">First Name*
				<input id="firstname" type="text" placeholder="" />
			  </label>
			</div>
			<div class="large-6 columns">
			  <label class="fontcolor">Last Name*
				<input id="lastname" type="text" placeholder="" />
			  </label>
			</div>
		  </div>
		  <div class="row">
			<div class="large-6 columns">
			  <label class="fontcolor">Email Address*
				<input id="email" type="text" placeholder="" />
			  </label>
			</div>
			<div class="large-6 columns">
			  <label class="fontcolor">Telephone Number*
				<input id="phone" type="text" placeholder="" />
			  </label>
			</div>
		  </div>
		  <div class="row">
			<div class="large-6 columns">
			  <label class="fontcolor">Address Line 1*
				<input id="addressline1" type="text" placeholder="" />
			  </label>
			</div>
			<div class="large-6 columns">
			  <label class="fontcolor">Address Line 2
				<input id="addressline2" type="text" placeholder="" />
			  </label>
			</div>
		  </div>
		  <div class="row">
			<div class="large-6 columns">
			  <label class="fontcolor">Zip/Postcode*
				<input id="postcode" type="text" placeholder="" />
			  </label>
			</div>
			<div class="large-6 columns">
			  <label class="fontcolor">City*
				<input id="city" type="text" placeholder="" />
			  </label>
			</div>
		  </div>
		  <div class="row">
			<div class="large-6 columns">
			  <label class="fontcolor">State*
				<input id="state" type="text" placeholder="" />
			  </label>
			</div>
			<div class="large-6 columns">
			  <label class="fontcolor">Country*
				<input id="country" type="text" placeholder="" />
			  </label>
			</div>
		  </div>
		  
		  <div class="row">
			<div class="large-12 columns">
			  <label class="fontcolor">Special Requirements
				<textarea id="specialrequirements" placeholder=""></textarea>
			  </label>
			</div>
		  </div>
		  <div class="row">
			<div class="large-12 columns" style="text-align:right;"><button type="button" class="button small fontslabo" style="background-color:#2ecc71;"  >Confirm</button>
			</div>

		  </div>
		</form>

	</div>

</div>
  

<script>
</script>
</body></html>