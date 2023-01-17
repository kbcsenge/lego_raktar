<?php
$conn = "";
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $cikkszam=$_POST["cikkszam"];
    $termeknev=$_POST["termeknev"];
    $korosztaly=$_POST["korosztaly"];
    $epitoelemek=$_POST["epitoelemek"];
    $temaID=$_POST["temaID"];
    $ar=$_POST["ar"];

    $sql_termekhalmaz="SELECT cikkszam FROM termek WHERE cikkszam=$cikkszam";
    $run_sql_termekhalmaz=$conn-> query($sql_termekhalmaz);
    $tomb_sql_termekhalmaz= mysqli_fetch_assoc($run_sql_termekhalmaz);

    if($cikkszam==$tomb_sql_termekhalmaz['cikkszam']){
        header('Location: ujtermek.php?temaID='.$temaID.'&hiba=Már létezik a termék!');
    }
    else{
        $sql_ujtermek="INSERT INTO termek(cikkszam, termeknev, korosztaly, epitoelemek, temaID, ar) VALUES ($cikkszam,'$termeknev',$korosztaly,$epitoelemek,$temaID,$ar)";
        $run_sql_ujtermek =$conn-> query($sql_ujtermek);
        header('Location: termekek.php?temaID=' .$temaID);
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

    <title>Új termék hozzáadása</title>

</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="card mx-auto" style="width: 500px">
        <div class="card-body">
            <form class="px-4 py-3">
                <label>Cikkszám</label>
                <input type="number" min="1" class="form-control" name="cikkszam" required>
                </br>
                <label>Termék neve</label>
                <input type="text" class="form-control" name="termeknev" required>
                </br>
                <label>Korosztály</label>
                <input type="number"  min="0" class="form-control" name="korosztaly" required>
                </br>
                <label>Építőelemek száma</label>
                <input type="number" min="1" class="form-control" name="epitoelemek" required>
                </br>
                <label>Téma azonosító</label>
                <input type="number" class="form-control" name="temaID" value="<?php if(isset($_GET['temaID'])) { echo $_GET['temaID'];} ?>" readonly>
                </br>
                <label>Ár Forintban</label>
                <input type="number" min="0" class="form-control" name="ar" required>
                </br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" role="button" data-toggle="button">Új termék hozzáadása</button>
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