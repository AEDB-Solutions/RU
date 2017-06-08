  <?php

    include("connectDB.php");


    
      function gift($matriculapresente, $qtrefeicoespresente, $mesmasenha){
      $myConnect = new ConnectDB();
      $myConnect->Connect();
      $conn = $myConnect->conn;
      $sql = "INSERT INTO presente (matricula, qntrefeicoes , confirmasenha) VALUES ('$matriculapresente', '$qtrefeicoespresente', '$mesmasenha')";
        if(mysqli_query($conn, $sql)){
        echo "Records inserted successfully.";
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
        } 

      }
     


?>