

<html>

<head>

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="style.css">
  <?php require_once('oop.php'); ?> 
</head>

<body>
<header>
    <nav class="navbar navbar-light bg-jumpers navbar-expand-lg">
      <a class="navbar-brand " href="#"><img src="img/logo.png" width="100" height="100" class="d-inline-block mr-1 align-bottom" alt="LOGO"></a>

      <button class="navbar-toggler  " type="button" data-toggle="collapse" data-target="#mainmenu" aria-controls="mainmenu" aria-expanded="false" aria-label="przełącznik nawigacji ">
        <span class="navbar-toggler-icon"></span>
      </button>


      <div class="collapse navbar-collapse" id="mainmenu">

        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link ml-1 middle" href="spoldzielnia-Asprod-Strzyzow">START</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle ml-5 middle dropbtn active" href="#" data-toggle="dropdown" role="button" aria-expanded="false" id="submenu" aria-haspopup="true"> FIGURY</a>

            <div class="dropdown-menu dropdown-content" aria-labelledby="submenu">
              <a class="dropdown-item drop-item" href="figury.php"> Pola figur</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="figury_przestrzenne.php">Pola figur przestrzennych</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="meble.html"> MEBLE </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="mala_architekrua_ogrodowa.html"> MAŁA ARCHITEKTURA OGRODOWA </a>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link ml-5 middle" href="o-nas">O NASZEJ FIRMIE</a>
          </li>

          <li class="nav-item">
            <a class="nav-link ml-5 middle " href="kontakt">KONTAKT</a>
          </li>

          <li class="nav-item">
            <a class="nav-link ml-5 middle" href="lokalizacja">GDZIE NAS ZNALEŹĆ ?</a>
          </li>
        </ul>

      </div>
    </nav>
  </header>

  <section class="container">
          <h2>Kalkulator figur napisany obiektowo w PHP</h2>
      <div class="row">
          <div class="col-md-3 my-5 kafelek">

          <h1>Prostopadłościan:</h1>
          <form method="POST">
              <input type="text" name="prosto_a" placeholder=" Podaj a"> <br>
              <input type="text" name="prosto_b" placeholder=" Podaj b "> <br>
              <input type="text" name="prosto_c" placeholder=" Podaj c"> <br>

              <?php
                                      $cuboidPC = new Cuboid($_POST['prosto_a'],$_POST['prosto_b'],$_POST['prosto_c']);
                                      echo  $cuboidPC -> getAreaSpatialFigure().'cm<sup>2</sup><br/>';
                                      echo  $cuboidPC -> getVolume().'cm<sup>3</sup><br/>';
                                      echo  $cuboidPC -> getDiagonal().'<br/>';
                                      echo $cuboidPC -> getDiagonalBase().'<br/>';
                                      echo $cuboidPC -> getBaseArea().'<br/>';

                                      
                              ?>
              <input  type="submit" value="policz">
          </form>
        
          </div>
          <div class="col-md-3 my-5 kafelek">
          <h1>Sześcian:</h1>
          <form method="POST">
              <input type="text" name="szescian_a" placeholder=" Podaj długość krawędzi"> <br>
                <?php
                                    $cube = new Cube($_POST['szescian_a']);
                                    echo  $cube -> getAreaSpatialFigure().'cm<sup>2</sup><br/>';
                                    echo  $cube -> getVolume().'cm<sup>3</sup><br/>';
                                    echo  $cube -> getDiagonal().'<br/>';
                                    echo $cube -> getDiagonalBase().'<br/>';
                                    echo $cube -> getBaseArea().'cm<sup>2</sup><br/>';
                                ?>
              <input type="submit" value="policz">
          </form>
         
          </div>

          <div class="col-md-3 my-5 kafelek">
          <h1>Graniastosłup: </h1>
          <form method="POST">
              <input type="text" name="prism_pc" placeholder="  Podaj  Pc "> <br>
              <input type="text" name="prism_pb" placeholder="  Podaj  Pb "> <br>
              <input type="text" name="prism_h" placeholder="  Podaj  H"> <br>
                <?php
                                    $prism = new Prism($_POST['prism_pc'], $_POST['prism_pb'], $_POST['prism_h']);
                                    echo  $prism -> getAreaSpatialFigureLite().'cm<sup>2</sup><br/>';
                                    echo  $prism -> getVolumeSpatialFigureLite().'cm<sup>3</sup><br/>';
                                ?>
              <input type="submit" value="policz">
          </form>
         
          </div>
      </div>

      <div class="row">
          <div class="col-md-3 my-5 kafelek">
              <h1>Walec</h1>
              <form method="POST">
              <input type="text" name="roller_h" placeholder="  Podaj wysokośc "> <br>
              <input type="text" name="roller_r" placeholder="  Podaj promień podstawy "> <br>
                <?php
                                    $roller = new Roller($_POST['roller_r'], $_POST['roller_h']);
                                    echo  $roller -> getAreaSpatialFigureLite().'cm<sup>2</sup><br/>';
                                    echo  $roller -> SideField().'cm<sup>2</sup><br/>';
                                    echo  $roller -> getBaseArea().'cm<sup>2</sup><br/>';
                                    echo  $roller-> getVolumeSpatialFigureLite().'cm<sup>3</sup><br/>';
                                ?>
              <input type="submit" value="policz">
          </form>
         
          </div>
              
          <div class="col-md-3 my-5 kafelek">
              <h1>Stozek</h1>
              <form method="POST">
                  <input type="text" name="stozek_r" placeholder="  Podaj r  "> <br>
                  <input type="text" name="stozek_l" placeholder="  Podaj l "> <br>
                  <input type="text" name="stozek_h" placeholder="  Podaj wysokość "> <br>
                      <?php
                          $cone = new Cone($_POST['stozek_r'], $_POST['stozek_l'], $_POST['stozek_h']);
                          echo $cone -> getAreaSpatialFigureLite().'cm<sup>2</sup><br/>';
                          echo $cone -> getVolumeSpatialFigureLite().'cm<sup>3</sup><br/>';
                      ?>
                  <input type="submit" value="policz">
              </form>
              
              </div>


              <div class="col-md-3 my-5 kafelek">
              <h1>Kula</h1>
              <form method="POST">
                  <input type="text" name="kula_r" placeholder="  Podaj r  "> <br>
                 
                      <?php
                          $ball = new Ball($_POST['kula_r']);
                          echo $ball -> getAreaSpatialFigureLite().'cm<sup>2</sup><br/>';
                          echo $ball -> getVolumeSpatialFigureLite().'cm<sup>3</sup><br/>';
                      ?>
                  <input type="submit" value="policz">
              </form>
              
              </div>
      </div>                    

  </section>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>

