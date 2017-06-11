  <?php

    include("connectDB.php");


    
      function gift($matricula,$password, $matriculagift,$qtrefeicoesgift, $confirmpassword){
      
        if (($matricula > $saldo)&&($confirmpassword == $password)){
          $qtrefeicoesgift = $qtrefeicoesgift*(2.5);
          alert("Refeicao dada de presente com sucesso");
        }
        else
          alert("Voce nao possui saldo suficiente ou a matricula selecionada nao existe");
      }
     


?>