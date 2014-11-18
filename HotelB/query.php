<?php
//execute the SQL query and return records
$result = mysql_query("SELECT id, model,year FROM cars");

//fetch tha data from the database 
while ($row = mysql_fetch_array($result)) {
   echo "ID:".$row{'id'}." Name:".$row{'model'}."Year: ". //display the results
   $row{'year'}."<br>";
}
//close the connection
mysql_close($dbhandle);
?>