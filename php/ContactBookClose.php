 <?php
 
$servername = "localhost";
$username = "kalaiselvi";
$password = "kalaiselvi";
$dbname = "appcommunication";


/* Create connection */
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "UPDATE applogs SET PhoneDialLog = '', PhoneBookStatus = '".'OFF'."' , PhoneNoSelected = ". 0 . ", PhoneBookDate = '". "" ."' , PhoneBookLog = '".""."'";
echo $sql;

if (mysqli_query($conn, $sql) == TRUE) {
    echo "UPnP Contact Book is closed now";
} else {
    echo "Error updating record";
}

mysqli_close($conn);

 ?> 