<?php
$conn = "";
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $raktarnev=$_POST["raktarnev"];
    $cikkszam=$_POST["cikkszam"];
    $szoba=$_POST["szoba"];
    $polc=$_POST["polc"];
    $taroldb=$_POST["taroldb"];

    $sql_termekhalmaz="SELECT COUNT(cikkszam) AS cikkszamdb FROM termek WHERE cikkszam=$cikkszam";
    $run_sql_termekhalmaz=$conn-> query($sql_termekhalmaz);
    $tomb_sql_termekhalmaz= mysqli_fetch_assoc($run_sql_termekhalmaz);

    if($tomb_sql_termekhalmaz['cikkszamdb']>0) {
        $sql_eltaroltuk_e = "SELECT COUNT(cikkszam) AS cikkszam FROM tarol WHERE cikkszam=$cikkszam AND raktarnev='$raktarnev'";
        $run_sql_eltaroltuk_e = $conn->query($sql_eltaroltuk_e);
        $tomb_sql_eltaroltuk_e = mysqli_fetch_assoc($run_sql_eltaroltuk_e);
        if ($tomb_sql_eltaroltuk_e['cikkszam'] > 0) {
            header('Location: tarhelyezes.php?raktarnev='.$raktarnev.'&hiba=Már eltároltuk a terméket!');
        } else {
            $sql_mennyiseg = "SELECT raktarnev , SUM(taroldb) AS ossz FROM tarol WHERE raktarnev='$raktarnev' GROUP BY raktarnev";
            $run_sql_mennyiseg = $conn->query($sql_mennyiseg);
            $tomb_sql_mennyiseg = mysqli_fetch_assoc($run_sql_mennyiseg);
            $sql_raktarkap = "SELECT raktarnev , raktarkapacitas FROM raktar WHERE raktarnev='$raktarnev'";
            $run_sql_raktarkap = $conn->query($sql_raktarkap);
            $tomb_sql_raktarkap = mysqli_fetch_assoc($run_sql_raktarkap);
            if($tomb_sql_mennyiseg['ossz']!=$tomb_sql_raktarkap['raktarkapacitas']){
                if ($tomb_sql_mennyiseg['ossz'] < $tomb_sql_raktarkap['raktarkapacitas']) {
                    if (($tomb_sql_mennyiseg['ossz'] + $taroldb) > $tomb_sql_raktarkap['raktarkapacitas']) {
                    header('Location: tarhelyezes.php?raktarnev='.$raktarnev.'&hiba=Nem bővíthető ezzel a mennyiséggel!');
                    } else {
                    $sql_ujtermek = "INSERT INTO tarol (raktarnev, cikkszam , szoba, polc, taroldb) VALUES('$raktarnev', $cikkszam,$szoba,$polc,$taroldb)";
                    $run_sql_ujtermek = $conn->query($sql_ujtermek);
                    header('Location: raktartarol.php?raktarnev=' . $raktarnev);
                    }
                }
            }
            else{
                header('Location: tarhelyezes.php?raktarnev='.$raktarnev.'&hiba=Betelt a raktár!');
            }
        }
    }
    else {
        header('Location: tarhelyezes.php?raktarnev='.$raktarnev.'&hiba=Nem létezik ilyen cikkszámú termék!');
    }
}
require "menu.php";
?>
<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="legoicon.png">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="JS/jquery-3.3.1.min.js" charset="UTF-8"></script>
    <script src="JS/bootstrap.min.js"></script>

    <title>Termék tárhelyezése</title>

</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="card mx-auto" style="width: 500px">
        <div class="card-body">
            <form class="px-4 py-3">
                <label>Raktár neve</label>
                <input type="text" class="form-control" name="raktarnev" value="<?php if(isset($_GET["raktarnev"])){ echo $_GET["raktarnev"]; } ?>" readonly>
                </br>
                <label>Termék cikkszáma</label>
                <input type="number" class="form-control" name="cikkszam" required>
                </br>
                <label>Szoba</label>
                <input type="number" class="form-control" name="szoba" required>
                </br>
                <label>Polc</label>
                <input type="number" class="form-control" name="polc" required>
                </br>
                <label>Tárolt darabszám</label>
                <input type="number" class="form-control" name="taroldb" required>
                </br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" role="button" data-toggle="button">Új termék tárhelyezése</button>
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