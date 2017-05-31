<?php

//session_start();
include ('connectDB.php');
//include ('route.js');
class CheckLogin
{
   function Check($matricula, $senha){
     $myConnect = new ConnectDB();
     $myConnect->Connect();
     $conn = $myConnect->conn;
      if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form
      $sql = "SELECT ID,Matricula FROM Users WHERE Matricula = '$matricula' and Password = '$senha'";
      $result = mysqli_query($conn,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row["active"];
      $count = mysqli_num_rows($result);
      // If result matched $myusername and $mypassword, table row must be 1 row
      if($count == 1) {
        return true;
        //$_SESSION['matricula2'] = $count['Matricula'];
 //        session_register("$matricula");
 //        $_SESSION['login_user'] = $matricula;
   //      header("location: localhost/Testinhos/dump.html");
      }
      else
      {
         return false;
      }
   }
   }
}
?>
