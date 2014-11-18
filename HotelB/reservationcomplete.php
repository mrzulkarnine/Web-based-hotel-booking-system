<?php
session_start();
if( isset($_POST["firstname"])&& isset($_POST["lastname"]) ){
$_SESSION['firstname'] = $_POST["firstname"];
$_SESSION['lastname'] = $_POST["lastname"];
$_SESSION['email'] = $_POST["email"];
$_SESSION['phone'] = $_POST["phone"];
$_SESSION['addressline1'] = $_POST["addressline1"];
$_SESSION['addressline2'] = $_POST["addressline2"];
$_SESSION['postcode'] = $_POST["postcode"];
$_SESSION['city'] = $_POST["city"];
$_SESSION['state'] = $_POST["state"];
$_SESSION['country'] = $_POST["country"];
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
	<div class="large-8 columns blackblur fontcolor" style="padding:10px">
	
		<div class="large-12 columns" >
		<p><b>Reservation Complete</b></p><hr>
		<p>Details of your reservation have just been sent to you
		in a confirmation email, we look forward to see you soon. In the
		meantime, if you have any questions, feel free to contact us</p>
		<p>
		<i class="icon-phone" style="font-size:24px"></i> <span class="i-name fontgrey">Phone</span><span class="i-code">&emsp; 60328951744</span><br>
        <i class="icon-fax" style="font-size:24px"></i> <span class="i-name fontgrey">Fax</span><span class="i-code"> &emsp;&emsp;60328951744</span><br>
        <i class="icon-mail-alt"style="font-size:24px"> </i> <span class="i-name fontgrey">Email</span><span class="i-code">&emsp; nicestuff@hotmail.com</span>
		</p><hr>
		<div class="row">
			<div class="large-12 columns" >
					<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" >
					<input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="business" value="mrzulkarnine@gmail.com">
					<input type="hidden" name="lc" value="MY">
					<input type="hidden" name="item_name" value="15% Hotel Deposit Payment">
					<input type="hidden" name="amount" value="<?php $amount = $_POST['global_deposit']; print $amount; ?>">
					<input type="hidden" name="currency_code" value="MYR">
					<input type="hidden" name="button_subtype" value="services">
					<input type="hidden" name="no_note" value="0">
					<input type="hidden" name="bn" value="PP-BuyNowBF:btn_buynowCC_LG.gif:NonHostedGuest">
					<img type="image" src="img/paypal.jpg" style="background-color:white; width:32%; height:14%; padding:2px; " ></img>
					<br><button class="button small " border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" style="width:32%;background-color:#2ecc71; ">Pay Room Deposit Now</button>
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
			</div>
		</div>
		</div>
	


	</div>


</div>

<script>
</script>
</body></html>