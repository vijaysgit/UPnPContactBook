 <?php
 
$servername = "localhost";
$username = "kalaiselvi";
$password = "kalaiselvi";
$dbname = "appcommunication";

$PhoneNoSelected = $_GET['phoneno'];
$datetimenew = new DateTime('now');
$datetimenow = $datetimenew->format('Y-m-d H:i:s');

//echo $PhoneNoSelected;

/* Create connection */
$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "UPDATE applogs SET PhoneDialLog = '', PhoneNoSelected = ". $PhoneNoSelected . ", PhoneBookDate = '". $datetimenow ."' , PhoneBookLog = '".'Make a call'."'";
echo $sql;

if (mysqli_query($conn, $sql) == TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record";
}

mysqli_close($conn);

 ?> 