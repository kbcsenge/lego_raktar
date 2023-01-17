<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
<b><a class="navbar-brand" href="index.php" style="margin-left: 15px">LEGO RAKTÁR</a></b>
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
  <span class="navbar-toggler-icon"></span>
</button>
    <b>
<div class="collapse navbar-collapse" id="navbarNav">
  <ul class="navbar-nav">
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-color: #1a1c1d; border-style: outset ; background: url(red-lego-texture.jpg) ; text-shadow: 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black">Raktárak</a>
      <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php

        $conn = "";

        require "connect.php";

        $sql = "SELECT raktarnev FROM raktar";
        $res = $conn -> query($sql);


        while ($row = $res -> fetch_array()){
          echo "<a class='dropdown-item' href='raktartarol.php?raktarnev=$row[0]'>{$row[0]}</a>";
        }

        ?>

      </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-color: #1a1c1d; border-style: outset ; background: url(yellow-lego-texture.jpg); text-shadow: 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black">Boltok</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php

        $conn = "";

        require "connect.php";

        $sql = "SELECT boltID, boltnev FROM bolt";
        $res = $conn -> query($sql);


        while ($row = $res -> fetch_array()){
            echo "<a class='dropdown-item' href='boltkaphato.php?boltID=$row[0]'>$row[0] | $row[1]</a>";
        }

        ?>
        </div>
    </li>

    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="border-color: #1a1c1d; border-style: outset ; background: url(blue.jpg);text-shadow: 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black">Termékek</a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
        <?php

        $conn = "";

        require "connect.php";

        $sql = "SELECT temanev , temaID FROM tema";
        $res = $conn -> query($sql);


        while ($row = $res -> fetch_array()){
            echo "<a class='dropdown-item' href='termekek.php?temaID=$row[1]'>{$row[0]}</a>";
        }

        ?>
        </div>
    </li>
      <li class="nav-item">
          <a class="nav-link active" href='hovaszallitunk.php' style="border-color: #1a1c1d; border-style: outset ; background: url(green-lego-texture.jpg);text-shadow: 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black">Elérhető boltok
              <span class="visually-hidden">(current)</span>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" href='mennyittarhelyezhetunk.php' style="border-color: #1a1c1d; border-style: outset ; background: url(pink.jpg);text-shadow: 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black">Elérhető raktárak
              <span class="visually-hidden">(current)</span>
          </a>
      </li>
      <li class="nav-item">
          <a class="nav-link active" href='atlagosar.php' style="border-color: #1a1c1d; border-style: outset ; background: url(purple.jpg);text-shadow: 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black, 0 0 5px black">Átlagárhoz közeli termékek
              <span class="visually-hidden">(current)</span>
          </a>
      </li>
  </ul>

</div>
    </b>
</nav>
