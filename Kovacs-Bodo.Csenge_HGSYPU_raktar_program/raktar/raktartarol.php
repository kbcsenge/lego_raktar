<!doctype html>
<html lang="hu">
  <head>
    <meta charset="utf-8">
      <link rel="icon" href="legoicon.png">
      <link rel="stylesheet" href="style/bootstrap.min.css">
      <script src="JS/jquery-3.3.1.min.js" charset="UTF-8"></script>
      <script src="JS/bootstrap.min.js"></script>

    <title>Raktárak</title>

  </head>
  <body>
    <?php
        $conn="";
        require "menu.php";
        require "connect.php";

        if ($_SERVER["REQUEST_METHOD"] == "GET"){
         $raktarnev = $_GET["raktarnev"];
         $sql_raktar="SELECT * FROM tarol WHERE raktarnev='$raktarnev'";
         $run_sql_raktar = $conn -> query($sql_raktar);
         echo "<b><h2 style='text-align: center; margin-top: 15px'>$raktarnev</h2></b>";
        }
    ?>
      <table class="table" style="margin-left: auto ; margin-right: auto ; width: 1000px; border: 1px black; border-collapse: collapse">
        <thead class="thead-light">
          <tr>
            <th scope="col">Termék azonosítója</th>
            <th scope="col">Szoba</th>
            <th scope="col">Polc</th>
            <th scope="col">Tárolt darabszám</th>
            <th scope="col">Műveletek</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while ($row = $run_sql_raktar -> fetch_array()){
              echo
              "<tr>
              <td>{$row[1]}</td>
              <td>{$row[2]}</td>
              <td>{$row[3]}</td>
              <td>{$row[4]}</td>
              <td>
                <a href='atmozgatas.php?raktarnev=$row[0]&cikkszam=$row[1]'><button type='button' class='btn btn-primary' role='button' data-toggle='button'>Átmozgatás boltba</button></a>
                <a href='bovites.php?raktarnev=$row[0]&cikkszam=$row[1]'><button type='button' class='btn btn-primary' role='button' data-toggle='button'>Készlet bővítése</button></a></td>
              </tr>";
            }
          ?>
        </tbody>
      </table>
    <div class="text-center">
        <button type="button" onclick="location.href='tarhelyezes.php?raktarnev=<?php echo $_GET["raktarnev"]?>'" class="btn btn-primary" role="button" data-toggle="button">Új termék tárhelyezése</button>
    </div>
  	</div>
  </body>
</html>
