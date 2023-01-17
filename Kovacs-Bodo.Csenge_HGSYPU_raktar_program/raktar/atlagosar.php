<!doctype html>
<html lang="hu">
<head>
    <meta charset="utf-8">
    <link rel="icon" href="legoicon.png">
    <link rel="stylesheet" href="style/bootstrap.min.css">
    <script src="JS/jquery-3.3.1.min.js" charset="UTF-8"></script>
    <script src="JS/bootstrap.min.js"></script>

    <title>Átlagárhoz közel</title>

</head>
<body>
<?php

$conn = "";
require "menu.php";
require "connect.php";

if ($_SERVER["REQUEST_METHOD"] == "GET"){
    $sql_atlagar="SELECT AVG(ar) AS atlagar FROm termek";
    $run_sql_atlagar=$conn->query($sql_atlagar);
    $tomb_sql_atlagar=mysqli_fetch_assoc($run_sql_atlagar);
    $sql_lekerdezes="SELECT termeknev, ar FROM termek WHERE ar BETWEEN (SELECT AVG(ar) FROM termek)-5000 AND (SELECT AVG(ar) FROM termek)+5000";
    $run_sql_lekerdezes=$conn->query($sql_lekerdezes);
    echo "<h4 style='text-align: center; margin-top: 15px'>Ez a lekérdezés kilistázza azokat a termékeket, amelyek ára az átlagárhoz közel van, azaz maximum 5000 Ft-tal tér el. Átlagár:". round($tomb_sql_atlagar['atlagar'])." Ft</h4>";
}
?>
<br>
<table class="table" style="margin-left: auto ; margin-right: auto ; width: 1000px; border: 1px black; border-collapse: collapse">
    <thead class="thead-light">
    <tr>
        <th scope="col" style="width: 500px">Termék neve</th>
        <th scope="col" style="width: 500px">Ár Forintban</th>
    </tr>
    </thead>
    <tbody>
    <?php
    while ($row = $run_sql_lekerdezes -> fetch_array()){
        echo
        "<tr><td>{$row[0]}</td>
              <td>{$row[1]}</td></tr>";
    }
    ?>
</table>
</tbody>
</div>
</body>
</html>
