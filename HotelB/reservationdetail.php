<?php

session_start();
?>
<div class="row">
<?php
$_SESSION["firstname"] = $_POST['fname'];
$_SESSION["lastname"] = $_POST['lname'];
$_SESSION["email"] = $_POST['email'];
$_SESSION["phone"] = $_POST['phone'];
$_SESSION["addressline1"] = $_POST['addressline1'];
$_SESSION["addressline2"] = $_POST['addressline2'];
$_SESSION["postcode"] = $_POST['postcode'];
$_SESSION["city"] = $_POST['city'];
$_SESSION["state"] = $_POST['state'];
$_SESSION["country"] = $_POST['country'];
$_SESSION["requirement"] = $_POST['specialrequirements'];
$_SESSION["checkindate"] = date('d-m-y', strtotime($_POST['startcheckin']));
$_SESSION["checkoutdate"] = date('d-m-y', strtotime($_POST['endcheckout']));
$_SESSION["deposit"] = $_POST['global_deposit'];
$_SESSION["total"] = $_POST['global_totalamountnight'];
//$_SESSION["balance"] = $_SESSION["total"] - $_SESSION["deposit"];
$_SESSION["nightstay"] = $_POST['global_night'];
$_SESSION["chosenroom"] = $_POST['global_roomchosen'];
$_SESSION["totaladult"] = $_POST['totaladult'];
$_SESSION["totalchild"] = $_POST['totalchild'];
?>
	<div class="large-12 columns blackblur fontcolor" style="padding-top:10px;" id="guestdetails">
		<p><b>Your Reservation Details</b><hr></p>
		<p><b>Guest Details</b></p>
		<form>
		  <div class="row">
			<div class="large-6 columns">
				<p>First Name : <b><?php  if (isset($_POST['fname'])){$name = $_POST['fname'];}else{$name='';}   echo $_POST['fname']; ?></b></p>
			</div>
			<div class="large-6 columns">
				<p>Last  Name : <b><?php echo $_POST['lname']; ?></b></p>
			</div>
		  </div>
		  <div class="row">
			<div class="large-6 columns">
			  <p>Email Address : <b><?php echo $_POST['email']; ?></b>
			  </p>
			</div>
			<div class="large-6 columns">
			  <p>Telephone : <b><?php echo $_POST['phone']; ?></b>
			  </p>
			</div>
		  </div>
		  <div class="row">
			<div class="large-6 columns">
				<p><?php print "Address :<br><b>";echo $_POST['addressline1']; ?><br><?php echo $_POST['addressline2']; ?><br><?php echo "".$_POST['postcode'].""; ?><?php echo $_POST['city']; ?><br><?php echo "".$_POST['state'].""; ?><?php echo $_POST['country']; ?></b></p>
			</div>
			<div class="large-6 columns">
			  <p>Special Requirements<br><b><?php echo $_POST['specialrequirements'];?></b>
				</p>
			</div>
		  </div>
		<p><b>Room Details</b></p>
		<div class="row">
			<div class="large-6 columns">
				<p>Check In Date :<b><?php echo $_SESSION["checkindate"];?></b></p>
			</div>
			<div class="large-6 columns">
			  <p>Check Out Date :<b><?php echo $_SESSION["checkoutdate"];?></b></p>
			</div>
		</div>
		<div class="row">
			<div class="large-6 columns">
			  <p>Adult :<b><?php echo $_SESSION["totaladult"];?></b></p>
			</div>
			<div class="large-6 columns">
			  <p>Children :<b><?php echo $_SESSION["totalchild"];?></b></p>
			</div>
		</div> 
		  
		  <div class="row">
			<div class="large-12 columns" >

			</div>
		  </div>
		</form>
		
			<div class="row">
				<br>
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
					<input type="image" src="img/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!" style="width:20%; height:20%; background-color:#2ecc71; padding:1%;">
					<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">
					</form>
				</div>
			</div>

	</div>


</div>

</body></html>
