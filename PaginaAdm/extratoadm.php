<?php
include("connectDB.php");
$myConnect = new ConnectDB();
$myConnect->Connect();
$conn = $myConnect->conn;
$sql = "SELECT * FROM Compras";
$result = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Checagem de Extrato do Sistema</title>
    <style>
      .button {
        background-color: #4CAF50;
        border: none;
        color: white;
        padding: 10px 30px;
        text-align: center;
        display: inline-block;
        font-size: 16px;
        margin: 4px 2px;
        cursor: pointer;
        position: relative;
        width: 100px;
        height: 50px;
    </style>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	</head>
	<body>
	<div class="w3-container">
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Filtro por matrícula">
  <table class="w3-table-all" id="myTable">
    <thead>
      <tr class="w3-light-grey w3-hover-red">
        <th>Matricula</th>
        <th>Codigo</th>
        <th>Email</th>
        <th>Valor</th>
        <th>Data</th>
        <th>Horário</th>
      </tr>
    </thead>


    <tr class="w3-hover-green">
      <td>15/0011709</td>
      <td>303909309</td>
      <td>henrique.simas@gmail.com</td>
      <td>R$ 15,00</td>
      <td>2017-06-28</td>
      <td>14:44:52</td>
    </tr>
    <?php
while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
    echo "<tr class='w3-hover-green'> ";
    echo "<td>" . $row["Matricula"] . "</td>";
    echo "<td>" . $row["Codigo"] . "</td>";
    echo "<td>" . $row["Email"] . "</td>";
    echo "<td>" . "R$ ". $row["Valor"] . "</td>";
    echo "<td>" . $row["Data"] . "</td>";
    echo "<td>" . $row["Horario"] . "</td>";

}
// close the last row
echo "</tr>";
?>

    <!--<tr class="w3-hover-blue">
      <td>Eve</td>
      <td>Jackson</td>
      <td>94</td>
    </tr>
    <tr class="w3-hover-black">
      <td>Adam</td>
      <td>Johnson</td>
      <td>67</td>
    </tr>
    <tr class="w3-hover-text-green">
      <td>Bo</td>
      <td>Nilson</td>
      <td>35</td>
    </tr>-->
  </table>
</div>	
<form action="afteradmlogin.php">
        <input type="submit" value="Voltar"  class="button"/>
      </form>
	</body>
</html>

<script>
function myFunction() {
  // Declare variables 
  var input, filter, table, tr, td, i;
  var k;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      }
      else {
        tr[i].style.display = "none";
      }
    } 
  }
}
</script>

