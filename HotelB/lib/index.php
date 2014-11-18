<!DOCTYPE html>
<!-- saved from url=(0046)http://foundation.zurb.com/templates/blog.html -->
<html class=" js flexbox flexboxlegacy canvas canvastext webgl no-touch geolocation postmessage websqldatabase indexeddb hashchange history draganddrop websockets rgba hsla multiplebgs backgroundsize borderimage borderradius boxshadow textshadow opacity cssanimations csscolumns cssgradients cssreflections csstransforms csstransforms3d csstransitions fontface generatedcontent video audio localstorage sessionstorage webworkers applicationcache svg inlinesvg smil svgclippaths" lang="en" data-useragent="Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/38.0.2125.111 Safari/537.36"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Reservation</title>
<meta name="description" content="Documentation and reference library for ZURB Foundation. JavaScript, CSS, components, grid and more.">
<meta name="author" content="ZURB, inc. ZURB network also includes zurb.com">
<meta name="copyright" content="ZURB, inc. Copyright (c) 2014">
<link rel="stylesheet" href="scss/foundation.css">
<link rel="stylesheet" href="scss/style.css">
<link href='http://fonts.googleapis.com/css?family=Slabo+13px' rel='stylesheet' type='text/css'>
<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
  
<script>
  $(document).ready(function() {
    $("#checkin").datepicker({ dateFormat: 'dd-mm-yy' });
  });
    $(document).ready(function() {
    $("#checkout").datepicker({ dateFormat: 'dd-mm-yy' });
  });
</script>
<link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
<meta class="foundation-data-attribute-namespace"><meta class="foundation-mq-xxlarge"><meta class="foundation-mq-xlarge"><meta class="foundation-mq-large"><meta class="foundation-mq-medium"><meta class="foundation-mq-small"><style></style><meta class="foundation-mq-topbar"></head>
<body class="fontbody">
 
<div class="row" style="margin:30px auto 30px auto;">
<div class="large-12 columns">
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round blackblur font" style="background-color:#2ecc71;">1</a>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round blackblur font" >2</a>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round blackblur font">3</a>
		</div>
		<div class="large-3 columns centerdiv">
			<a href="#" class="button round blackblur font">4</a>
		</div>
</div>

</div>
</div>
 
<div class="row">
	<div class="large-4 columns blackblur fontcolor" style="padding-top:10px;">
	<p><b>Check Date</b></p><hr>
			<form action="checkavailability.php" method="post">
			<div class="row">
				
					<div class="large-5 columns">
						<label class="fontcolor">Check In
							<input name="checkin" id="checkin" style="width:100%;"/>
						</label>
					</div>
					
					<div class="large-5 columns end">
						<label class="fontcolor">Check Out
							<input name="checkout" id="checkout" style="width:100%;"/>
						</label>
					
					<!--div class="large-1 columns"></div-->
					</div>
			</div>
			
			
			<!--div class="row">
				
					<div class="large-4 columns end">
						<label class="fontcolor">Rooms
							<select id="totalrooms" style="width:100%; color:black;">
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
					
					<!--div class="large-1 columns"></div>
				
			</div-->
			
			<div class="row">
				
					<div class="large-4 columns">
						<label class="fontcolor">Adults
							<select id="totaladults" style="width:100%; color:black;">
							<option value="1">0</option>
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
					
					<div class="large-4 columns end"  style="margin-right:65px;">
						<label class="fontcolor">Children
							<select id="totalchildrens" style="width:100%; color:black;">
							<option value="1">0</option>
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
					<!--div class="large-1 columns"></div-->
				
			</div>
			<br><br>
			  <div class="row">
				<div class="large-12 columns" >
					<button type="submit" href="#" class="button small" style="background-color:#2ecc71;" >Check Availability</button>
				</div>
			  </div>
			</form>
	</div>


</div>


</body></html>