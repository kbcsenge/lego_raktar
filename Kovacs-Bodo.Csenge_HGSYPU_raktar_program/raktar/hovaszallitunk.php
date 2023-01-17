<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="legoicon.png">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="JS/jquery-3.3.1.min.js" charset="UTF-8"></script>
    <script src="JS/bootstrap.min.js"></script>

    <title>Elérhető boltok</title>

</head>
<body>
<?php
$conn = "";
require "menu.php";
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET"){
   $sql_lekerdezes="SELECT kaphato.boltID, bolt.boltnev , bolt.boltkapacitas-(SUM(kaphatodb)) AS termekdb , bolt.boltkapacitas FROM bolt, kaphato WHERE bolt.boltID=kaphato.boltID GROUP BY kaphato.boltID";
   $run_sql_lekerdezes=$conn->query($sql_lekerdezes);
}
?>
<h4 style="text-align: center; margin-top: 15px">Ez a lekérdezés megmutatja, hogy egyes boltokba még hány darab termék szállítható.</h4>
<br>
<table class="table" style="margin-left: auto ; margin-right: auto ; width: 1000px; border: 1px black; border-collapse: collapse">
    <thead class="thead-light">
    <tr>
        <th scope="col">Bolt azonosítója</th>
        <th scope="col">Bolt neve</th>
        <th scope="col">Még mennyi terméket szállíthatunk?</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($row = $run_sql_lekerdezes -> fetch_array()){
        echo
        "<tr><td>{$row[0]}</td>
              <td>{$row[1]}</td>
              <td>{$row[2]}</td> ";
    }
    ?>
</table>
</tbody>
</div>
</body>
</html>
