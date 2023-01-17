<?php

$conn = "";
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $raktarnev = $_POST["raktarnev"];
    $cikkszam = $_POST["cikkszam"];
    $darabszam = $_POST["darab"];

    $sql_mennyiseg = "SELECT raktarnev , SUM(taroldb) AS ossz FROM tarol WHERE raktarnev='$raktarnev' GROUP BY raktarnev";
    $run_sql_mennyiseg = $conn-> query($sql_mennyiseg);
    $tomb_sql_mennyiseg = mysqli_fetch_assoc($run_sql_mennyiseg);
    $sql_raktarkap = "SELECT raktarnev , raktarkapacitas FROM raktar WHERE raktarnev='$raktarnev'";
    $run_sql_raktarkap = $conn->query($sql_raktarkap);
    $tomb_sql_raktarkap = mysqli_fetch_assoc($run_sql_raktarkap);

    if($tomb_sql_mennyiseg['ossz'] != $tomb_sql_raktarkap['raktarkapacitas']){
        if ($tomb_sql_mennyiseg['ossz'] < $tomb_sql_raktarkap['raktarkapacitas']) {
            if (($tomb_sql_mennyiseg['ossz'] + $darabszam ) > $tomb_sql_raktarkap['raktarkapacitas']) {
                header('Location: bovites.php?raktarnev='.$raktarnev.'&cikkszam='.$cikkszam.'&hiba=Nem bővíthető ezzel a mennyiséggel!');
            } else {
                $sql_bovit = "UPDATE tarol SET taroldb=(SELECT taroldb FROM tarol WHERE raktarnev='$raktarnev' AND cikkszam=$cikkszam LIMIT 1)+$darabszam WHERE raktarnev='$raktarnev' AND cikkszam=$cikkszam";
                $run_sql_bovit = $conn->query($sql_bovit);
                header('Location: raktartarol.php?raktarnev=' .$raktarnev);
            }
        }
    }else{
        header('Location: bovites.php?raktarnev='.$raktarnev.'&cikkszam='.$cikkszam.'&hiba=Betelt a raktár!');
    }

}
require "menu.php";
?>

<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="legoicon.png" type="image/x-icon">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="JS/jquery-3.3.1.min.js" charset="UTF-8"></script>
    <script src="JS/bootstrap.min.js"></script>

    <title>Készletbővítés</title>

</head>

<body>
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="card mx-auto" style="width: 500px">
        <div class="card-body">
            <form class="px-4 py-3">
                <label >Raktár neve</label>
                <input type="text" class="form-control" name="raktarnev" value="<?php if(isset($_GET["raktarnev"])){ echo $_GET["raktarnev"]; } ?>" readonly>
                </br>
                <label>Termék azonosítója</label>
                <input type="text" class="form-control" name="cikkszam" value="<?php if(isset($_GET["cikkszam"])){ echo $_GET["cikkszam"]; } ?>" readonly>
                <br>
                <label>Darabszám</label>
                <input type="number" min="0" class="form-control" name="darab" required>
                </br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" role="button" data-toggle="button">Készlet bővítése</button>
                </div>
            </form>
        </div>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            if(isset($_GET['hiba'])){
                echo "<p style='text-align: center; color: red; font-size: 30px'>{$_GET['hiba']}</p>";
            }
        }
        ?>
    </div>
</form>
</body>
</html>