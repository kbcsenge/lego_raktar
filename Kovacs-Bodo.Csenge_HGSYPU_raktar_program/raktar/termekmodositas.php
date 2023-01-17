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

    $sql_modosito="UPDATE termek SET termeknev='$termeknev', korosztaly=$korosztaly, epitoelemek=$epitoelemek, temaID=$temaID , ar=$ar WHERE cikkszam=$cikkszam";
    $run_sql_modosito=$conn->query($sql_modosito);
    header('Location: termekek.php?temaID=' .$temaID);
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

    <title>Termék módosítása</title>

</head>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    <div class="card mx-auto" style="width: 500px">
        <div class="card-body">
            <form class="px-4 py-3">
                <label>Cikkszám</label>
                <input type="number" min="1" class="form-control" name="cikkszam" value="<?php if(isset($_GET["cikkszam"])){ echo $_GET["cikkszam"]; } ?>" readonly>
                </br>
                <label>Termék neve</label>
                <input type="text" class="form-control" name="termeknev" value="<?php if(isset($_GET["termeknev"])){ echo $_GET["termeknev"]; } ?>" required>
                </br>
                <label>Korosztály</label>
                <input type="number"  min="0" class="form-control" name="korosztaly" value="<?php if(isset($_GET["korosztaly"])){ echo $_GET["korosztaly"]; } ?>" required>
                </br>
                <label>Építőelemek száma</label>
                <input type="number" min="1" class="form-control" name="epitoelemek" value="<?php if(isset($_GET["epitoelemek"])){ echo $_GET["epitoelemek"]; } ?>" required>
                </br>
                <label for="temaID">Válasszon egy témát:</label>
                <select name="temaID" id="temaID">
                    <?php

                    $conn = "";

                    require "connect.php";

                    $sql = "SELECT temaID, temanev FROM tema";
                    $res = $conn -> query($sql);


                    while ($row = $res -> fetch_array()){
                        if($row[0] == $_GET['temaID']){
                            echo "<option value='$row[0]' selected>$row[0] | $row[1]</option>";
                        }else{
                            echo "<option value='$row[0]'>$row[0] | $row[1]</option>";
                        }
                    }

                    ?>
                </select>
                <label>Ár Forintban</label>
                <input type="number" min="0" class="form-control" name="ar" value="<?php if(isset($_GET["ar"])){ echo $_GET["ar"]; } ?>" required>
                </br>
                <div class="text-center">
                    <button type="submit" class="btn btn-primary" role="button" data-toggle="button">Termék módosítása</button>
                </div>
            </form>
        </div>
    </div>
</form>
</body>
</html>