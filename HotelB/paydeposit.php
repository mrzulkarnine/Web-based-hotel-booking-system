<?php

include './auth.php';
if(!empty($_POST['id']) &&!empty($_POST['deposit'])){
	$_SESSION['id'] = $_POST['id'];
	$_SESSION['deposit'] = $_POST['deposit'];
	$result = mysql_query("select * from booking where booking_id = '".$_SESSION['id']."';");
	$validate = 1;
		if(mysql_num_rows($result) > 0){
			while ($row = mysql_fetch_array($result))
				{
					$validate = strcasecmp($row['payment_status'], 'pending');	
				}

		}
	if($validate != 0){
		header("location: message.php");
	}
}

?>

