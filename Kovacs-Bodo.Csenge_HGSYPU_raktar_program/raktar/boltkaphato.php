<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <link rel="icon" href="legoicon.png">
    <script src="JS/jquery-3.3.1.min.js" charset="UTF-8"></script>
    <script src="JS/bootstrap.min.js"></script>

    <title>Boltok</title>
</head>
<body>
<?php
$conn = "";
require "menu.php";
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $boltID = $_GET["boltID"];

    $sql_boltadatok="SELECT boltnev, iranyitoszam , telepules , kozteruletnev , hazszam FROM bolt WHERE boltID='$boltID'";
    $run_sql_boltadatok=$conn -> query($sql_boltadatok);
    $tomb_sql_eredmeny=mysqli_fetch_assoc($run_sql_boltadatok);

    echo "<br><h1 style='text-align: center ; margin-top: 15px '>". $tomb_sql_eredmeny['boltnev']. "</h1><br>";
    echo "<h1 style='text-align: center'>cím: ".$tomb_sql_eredmeny['iranyitoszam']." ".$tomb_sql_eredmeny['telepules'].", ".$tomb_sql_eredmeny['kozteruletnev']." ".$tomb_sql_eredmeny['hazszam']."."."</h1>";

    $sql_boltlista="SELECT * FROM kaphato INNER JOIN bolt ON bolt.boltID=kaphato.boltID WHERE bolt.boltID='$boltID'";
    $run_sql_boltlista = $conn -> query($sql_boltlista);
}
?>
<table class="table" style="margin-left: auto ; margin-right: auto ; width: 1000px; border: 1px black; border-collapse: collapse">
    <thead class="thead-light">
    <tr>
        <th scope="col">Termék azonosítója</th>
        <th scope="col">Kapható darabszám</th>
        <th scope="col">Módosítás</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($row = $run_sql_boltlista -> fetch_array()){
        echo
        "<tr>
              <td>{$row[1]}</td>
              <td>{$row[2]}</td>
              <td>
                <a href='boltmodositas.php?cikkszam={$row[1]}&boltID={$_GET["boltID"]}&kaphatodb={$row[2]}'><button type='button' class='btn btn-primary' role='button' data-toggle='button'>Csökkentés eggyel</button></a>
              </td></tr>";
    }
    ?>
    </tbody>
</table>
</div>
</body>
</html>