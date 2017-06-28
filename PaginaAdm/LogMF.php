<?php
// define variables and set to empty values

    $name = $_GET["User"];
    $password = $_GET["Password"];
    $cript = hash('sha256', $password);
include ('connectDB.php');
$sql = "SELECT ID FROM Admins WHERE User = '$name' and Senha = '$cript'";
$myConnect = new ConnectDB();
$myConnect->Connect();
$conn = $myConnect->conn;
$result = mysqli_query($conn, $sql);
$count = mysqli_num_rows($result);
if($count == 1) {
session_start();
$_SESSION["User"] = $name;
//echo $_SESSION["User"];
 header('Location: afteradmlogin.php');
}
else {

}

?>
