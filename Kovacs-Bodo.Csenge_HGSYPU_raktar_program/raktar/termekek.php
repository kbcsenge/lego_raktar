<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="legoicon.png">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="JS/jquery-3.3.1.min.js" charset="UTF-8"></script>
    <script src="JS/bootstrap.min.js"></script>

    <title>Termékek</title>

<body>
<?php
$conn = "";
require "menu.php";
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $temaID = $_GET["temaID"];
    $sql_temanev="SELECT temanev FROM tema WHERE temaID=$temaID";
    $run_sql_temanev=$conn->query($sql_temanev);
    $tomb_sql_temanev=mysqli_fetch_assoc($run_sql_temanev);
    $sql_tema="SELECT * FROM termek INNER JOIN tema ON termek.temaID=tema.temaID WHERE tema.temaID=$temaID";
    $run_sql_tema = $conn -> query($sql_tema);
    echo "<b><h2 style='text-align: center; margin-top: 15px'>".$tomb_sql_temanev['temanev']."</h2></b>";
}
?>
<table class="table" style="margin-left: auto ; margin-right: auto ; width: 1100px; border: 1px black; border-collapse: collapse">
    <thead class="thead-light">
    <tr>
        <th scope="col">Termék cikkszáma</th>
        <th scope="col">Termék neve</th>
        <th scope="col">Korosztály</th>
        <th scope="col">Építőelemek száma</th>
        <th scope="col">Ár Forintban</th>
        <th scope="col">Műveletek</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($row = $run_sql_tema -> fetch_array()){
        echo
        "<tr><td>{$row[0]}</td>
              <td>{$row[1]}</td>
              <td>{$row[2]}</td>
              <td>{$row[3]}</td>
              <td>{$row[5]}</td>
              <td>
                  <a href='termektorles.php?cikkszam={$row[0]}&temaID={$_GET["temaID"]}'><button type='button' class='btn btn-primary' role='button' data-toggle='button'>Törlés</button></a>
                  <a href='termekmodositas.php?cikkszam={$row[0]}&temaID={$_GET["temaID"]}&termeknev={$row[1]}&korosztaly={$row[2]}&epitoelemek={$row[3]}&ar={$row[5]}'><button type='button' class='btn btn-primary' role='button' data-toggle='button'>Módosítás</button></a>
              </td>";
    }
    ?>
</table>
    <div class="text-center">
         <button type="button" onclick="location.href='ujtermek.php?temaID=<?php echo $_GET['temaID']?>'" class="btn btn-primary" role="button" data-toggle="button">Új termék felvitele</button>
    </div>
</tbody>
</div>
</body>
</html>
