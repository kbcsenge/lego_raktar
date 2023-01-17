<?php
$conn = "";
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $cikkszam = $_GET["cikkszam"];
    $boltID = $_GET["boltID"];
    $kaphatodb = $_GET["kaphatodb"];

    if($kaphatodb>1){
        $sql_kivonas="UPDATE kaphato SET kaphatodb=$kaphatodb-1 WHERE boltID=$boltID AND cikkszam=$cikkszam";
        $run_sql_kivonas = $conn -> query($sql_kivonas);
    }else{
        $sql_torol="DELETE FROM kaphato WHERE boltID=$boltID AND cikkszam=$cikkszam";
        $run_sql_torol=$conn->query($sql_torol);
    }
    header('Location: boltkaphato.php?boltID='.$boltID);
}
