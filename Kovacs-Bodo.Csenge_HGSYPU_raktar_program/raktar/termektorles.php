<?php
$conn = "";
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $cikkszam = $_GET["cikkszam"];
    $temaID = $_GET["temaID"];
    $sql_torol="DELETE FROM termek WHERE cikkszam=$cikkszam";
    $run_sql_torol = $conn -> query($sql_torol);

    header('Location: termekek.php?temaID='.$temaID);
}
