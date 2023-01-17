<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="legoicon.png">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="JS/jquery-3.3.1.min.js" charset="UTF-8"></script>
    <script src="JS/bootstrap.min.js"></script>

    <title>Elérhető raktárak</title>
</head>
<body>
<?php
$conn = "";
require "menu.php";
require "connect.php";
if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $sql_lekerdezes="SELECT raktar.raktarnev , raktar.raktarkapacitas-(SUM(tarol.taroldb)) AS megmennyi FROM raktar , tarol WHERE raktar.raktarnev=tarol.raktarnev GROUP BY tarol.raktarnev";
    $run_sql_lekerdezes=$conn->query($sql_lekerdezes);
}
?>
<h4 style="text-align: center; margin-top: 15px ">Ez a lekérdezés megmutatja, hogy egyes raktárakban még hány darab terméket tárhelyezhetünk.</h4>
<br>
<table class="table" style="margin-left: auto ; margin-right: auto ; width: 1000px; border: 1px black; border-collapse: collapse">
    <thead class="thead-light">
    <tr>
        <th scope="col" style="width: 500px">Raktár neve</th>
        <th scope="col" style="width: 500px">Még mennyi terméket raktározhatunk?</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($row = $run_sql_lekerdezes -> fetch_array()){
        echo
        "<tr><td>{$row[0]}</td>
              <td>{$row[1]}</td>";
    }
    ?>
</table>
</tbody>
</div>
</body>
</html>
