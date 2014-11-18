<?php
session_start();
if(isset($_POST["checkin"]) && isset($_POST["checkout"])){
$_SESSION['checkin_date'] = date('d-m-y', strtotime($_POST['checkin'])); 
$_SESSION['checkout_date'] = date('d-m-y', strtotime($_POST['checkout']));
$_SESSION['checkin_unformat'] = $_POST["checkin"]; 
$_SESSION['checkout_unformat'] = $_POST["checkout"];
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
			<a href="index.php" class="button round blackblur fontslabo" >1</a>
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
		<p><b>Your Reservation</b></p><hr>
				<form action="index.php" method="post">
				<div class="row">
					
						<div class="large-6 columns" style="max-width:100%;">
							<p class="fontgrey">Check In<br> Check Out<br>Adults<br>Childrens
							</p>
						</div>
						
						<div class="large-4 columns" style="max-width:100%;">
							<p class="">: <?php echo $_SESSION['checkin_date'];?><br>: <?php echo $_SESSION['checkout_date'];?><br>: <?php echo $_SESSION['adults'];?><br>: <?php echo $_SESSION['childrens'];?>
							</p>				
						
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
		<p><b>Choose Your Room</b></p><hr>
				<form class="form1" action="index.php" method="post" onsubmit="return validateForm()">
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
										<select  class="no_of_room" name="room" id="room0" style="width:100%; color:black; height:45px;" onchange="validateRoom(this);">
											<option selected="selected" value="0">0</option>
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
									<button type="submit"  class="book button small" style="background-color:#2ecc71; width:100%; height:45px; !important;" onchange="validateClick(this);">Book</button>
								</div>
							</div>
						</div>
						
					</div>
					
				</form>
				<form class="form1" id="formaction" action="" method="post" onsubmit="return validateForm()">
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
										<select  class="no_of_room" name="room" id="room7" style="width:100%; color:black; height:45px;" onchange="validateRoom(this);">
											<option selected="selected" value="0">0</option>
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
									<button type="submit" id="room7" class="book button small" style="background-color:#2ecc71; width:100%; height:45px; !important;" onclick="validateClick(this);">Book</button>
								</div>
							</div>
						</div>
						
					</div>
					
				</form>
		</div>
	


	</div>


</div>
<script>


		var selectCount = 0;
        var old_ddl = "";
        var changed_ddl = false;

        function validateRoom(ddl) {
			
            if (selectCount == null) {
                selectCount = 0;
            }

            if (old_ddl != ddl.id) {
                changed_ddl = true;
            }else{
                changed_ddl = false;
            }

            if (old_ddl == "") {
                old_ddl = ddl.id;
            }

            if (changed_ddl == true) {
                selectCount = selectCount + 1;
                old_ddl = ddl.id;
            }
            
            var val = ddl.value;
            var roomid = ddl.id.replace("room","");

            $(".no_of_room").val("0");

            ddl.value = val;
                        
             if (selectCount > 2) {
                changed_ddl = false;
                old_ddl = "";

                selectCount = 0;
                alert("Sorry, you can only book one room type per booking");
                FireEvent(77, "");
                return false;
            }

        }

	function validateForm() {
    var x = $("#room0").val();
    if (x == 0) {
        alert("First name must be filled out");
        return false;
    }
}

</script>
</body></html>