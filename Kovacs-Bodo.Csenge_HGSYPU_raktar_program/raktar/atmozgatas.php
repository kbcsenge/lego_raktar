<?php
$conn = "";


require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $raktarnev=$_POST["raktarnev"];
    $cikkszam=$_POST["cikkszam"];
    $boltID=$_POST["boltok"];
    $darabszam=$_POST["darab"];

    $sql_mennyivan="SELECT taroldb FROM tarol WHERE raktarnev='$raktarnev' AND cikkszam=$cikkszam";
    $run_sql_mennyivan=$conn-> query($sql_mennyivan);
    $tomb_sql_mennyivan= mysqli_fetch_assoc($run_sql_mennyivan);

    $sql_kaphato="SELECT COUNT(*) AS kaphato from kaphato where cikkszam=$cikkszam and boltID=$boltID";
    $run_sql_kaphato=$conn-> query($sql_kaphato);
    $tomb_sql_kaphato = mysqli_fetch_assoc($run_sql_kaphato);

    $sql_boltkapacitas="SELECT SUM(kaphatodb) AS kaphatodb, bolt.boltkapacitas FROM kaphato INNER JOIN bolt ON bolt.boltID=kaphato.boltID WHERE kaphato.boltID=$boltID";
    $run_sql_boltkapacitas=$conn-> query($sql_boltkapacitas);
    $tomb_sql_boltkapacitas=mysqli_fetch_assoc($run_sql_boltkapacitas);

    if($tomb_sql_boltkapacitas['kaphatodb']+$darabszam<=$tomb_sql_boltkapacitas['boltkapacitas']){

        if($darabszam<=$tomb_sql_mennyivan['taroldb']){
            $sql_szallit="UPDATE tarol SET taroldb=(SELECT taroldb FROM tarol WHERE raktarnev='$raktarnev' AND cikkszam=$cikkszam LIMIT 1)-$darabszam WHERE raktarnev='$raktarnev' AND cikkszam=$cikkszam";
            $run_sql_szallit = $conn -> query($sql_szallit);

            if(($tomb_sql_mennyivan['taroldb']-$darabszam)==0){
                $sql_torol="DELETE FROM tarol WHERE cikkszam=$cikkszam AND raktarnev='$raktarnev' AND taroldb=0";
                $run_sql_torol=$conn->query($sql_torol);
            }

            if($tomb_sql_kaphato['kaphatodb']==0){
                $sql_hozzaad="INSERT INTO kaphato (boltID , cikkszam, kaphatodb) VALUES ($boltID,$cikkszam,$darabszam)";
                $run_sql_hozzaad=$conn-> query($sql_hozzaad);
            } else {
                $sql_boltbatesz="UPDATE kaphato SET kaphatodb=(SELECT kaphatodb FROM kaphato WHERE boltID=$boltID AND cikkszam=$cikkszam LIMIT 1)+$darabszam WHERE boltID=$boltID AND cikkszam=$cikkszam";
                $run_sql_boltbatesz=$conn-> query($sql_boltbatesz);
            }

            header('Location: raktartarol.php?raktarnev='.$raktarnev);
        } else {
            header('Location: atmozgatas.php?raktarnev='.$raktarnev.'&cikkszam='.$cikkszam.'&hiba=Nem szállítható át a mennyiség!');
        }
    } else if($tomb_sql_boltkapacitas['kaphatodb']+$darabszam>$tomb_sql_boltkapacitas['boltkapacitas'] && ($tomb_sql_boltkapacitas['kaphatodb']<$tomb_sql_boltkapacitas['boltkapacitas'])){
        header('Location: atmozgatas.php?raktarnev='.$raktarnev.'&cikkszam='.$cikkszam.'&hiba=Ezzel a mennyiséggel több termék kerülne a boltba, mint amennyi lehetséges!');
    } else if($tomb_sql_boltkapacitas['kaphatodb']==$tomb_sql_boltkapacitas['boltkapacitas']){
        header('Location: atmozgatas.php?raktarnev='.$raktarnev.'&cikkszam='.$cikkszam.'&hiba=Betelt a bolt!');
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

    <title>Termékszállítás</title>

</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="card mx-auto" style="width: 600px">
        <div class="card-body">
            <form class="px-4 py-3">
                <label>Raktár neve</label>
                <input type="text" class="form-control" name="raktarnev" value="<?php if(isset($_GET["raktarnev"])){ echo $_GET["raktarnev"]; } ?>" readonly>
                </br>
                <label>Termék azonosítója</label>
                <input type="text" class="form-control" name="cikkszam" value="<?php if(isset($_GET["cikkszam"])){ echo $_GET["cikkszam"]; } ?>"  readonly>
                <br>
                <label for="boltok">Válasszon egy boltot:</label>
                <select name="boltok" id="boltok">
                    <?php

                    $conn = "";

                    require "connect.php";

                    $sql = "SELECT boltID, boltnev FROM bolt";
                    $res = $conn -> query($sql);

                    while ($row = $res -> fetch_array()){
                        echo "<option value='$row[0]'>$row[0] | $row[1]</option>";
                    }
                    ?>
                </select>
                <br>
                <br>
                <label>Darabszám</label>
                <input type="number" min="0" class="form-control" name="darab" required>
                </br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" role="button" data-toggle="button">Termékek szállítása</button>
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