<?php
session_start();

unset($_SESSION['room_id']);
unset($_SESSION['roomname']);
unset($_SESSION['roomqty']);
unset($_SESSION['ind_rate']);
unset($_SESSION['total_amount']);
unset($_SESSION['deposit']);
header("location: checkroom.php");
?>