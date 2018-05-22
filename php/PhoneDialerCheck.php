<?php
 
$servername = "localhost";
$username = "kalaiselvi";
$password = "kalaiselvi";
$dbname = "appcommunication";

/* Create connection */
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT PhoneDialerStatus FROM applogs";
$result = mysqli_query($conn, $sql);
$value = mysqli_fetch_object($result);

if ($value->PhoneDialerStatus == "ON") {
	$PhoneDialer = 1;
    //echo "UPnP Phone Dialer is ON";
} else {
	$PhoneDialer = 0;
    //echo "UPnP Phone Dialer is OFF";
}
echo $PhoneDialer; 

mysqli_close($conn);
 ?>  