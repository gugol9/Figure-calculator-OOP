

<html>

  <head>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <?php require_once('oop.php');  ?> 
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
              <a class="dropdown-item drop-item active" href="figury.php"> Pola figur</a>
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

            <h1>Policz pole kwadratu:</h1>
            <form method="POST">
                <input type="text" name="bok_kwadratu" placeholder=" Podaj bok kwadratu "> <br>
                <?php
                                    $kwadrat = new Kwadrat ($_POST['bok_kwadratu']);
                                    echo  $kwadrat -> getArea().'cm<sup>2</sup><br/>';
                                    echo $kwadrat -> getCircuit().'cm<br/>';
                                ?>
                <input  type="submit" value="policz">
            </form>
          
            </div>
            <div class="col-md-3 my-5 kafelek">
            <h1>Policz pole prostokąta:</h1>
            <form method="POST">
                <input type="text" name="a" placeholder=" Podaj pierwszy bok prostokąta"> <br>
                <input type="text" name="b" placeholder=" Podaj drugi bok prostokąta "> <br>
                <?php
                                    $shape = new Rectangle($_POST['a'], $_POST['b']);
                                    echo $shape -> getArea().'cm<sup>2</sup><br/>';
                                    echo $shape-> getCircuit().'cm<br/>';
                                ?>
                <input type="submit" value="policz">
            </form>
           
            </div>

            <div class="col-md-3 my-5 kafelek">
            <h1>Policz pole koła:</h1>
            <form method="POST">
                <input type="text" name="radius" placeholder="  Podaj promień koła "> <br>
                <?php
                                    $shape1 = new Circle($_POST['radius']);
                                    echo $shape1 -> getArea().'cm<sup>2</sup><br/>';
                                    echo $shape1-> getCircuit().'cm<br/>';
                                ?>
                <input type="submit" value="policz">
            </form>
           
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 my-5 kafelek">
                <h1>Policz pole trójkąta</h1>
                <form method="POST">
                     <input type="text" name="bok_troj" placeholder="  Podaj bok a "> <br>
                     <input type="text" name="wysokosc_troj" placeholder="  Podaj wysokość "> <br>
                        <?php
                            $triangle1 = new Triangle($_POST['bok_troj'], $_POST['wysokosc_troj']);
                            echo $triangle1 -> getArea().'cm<sup>2</sup><br/>';
                          
                        ?>
                    <input type="submit" value="policz">
                </form>
            </div>

            <div class="col-md-3 my-5 kafelek">
                <h1>Policz pole trójkąta równobocznego</h1>
                <form method="POST">
                     <input type="text" name="bok_troj_rowno" placeholder="  Podaj bok a "> <br>
                     
                        <?php
                            $trianglerow = new TriangleRow($_POST['bok_troj_rowno']);
                            echo $trianglerow -> getArea().'cm<sup>2</sup><br/>';
                            echo $trianglerow -> getCircuit().'cm<br/>';
                        ?>
                    <input type="submit" value="policz">
                </form>
            </div>


            
                
            <div class="col-md-3 my-5 kafelek">
                <h1>Policz pole trapezu</h1>
                <form method="POST">
                    <input type="text" name="podstawa_trapezu_a" placeholder="  Podaj 1 podstawe  "> <br>
                    <input type="text" name="podstawa_trapezu_b" placeholder="  Podaj 2 podstawe "> <br>
                    <input type="text" name="wysokosc_trapezu" placeholder="  Podaj wysokość "> <br>
                        <?php
                            $trapez1 = new Trapez($_POST['podstawa_trapezu_a'], $_POST['podstawa_trapezu_b'], $_POST['wysokosc_trapezu']);
                            echo $trapez1 -> getArea().'cm<sup>2</sup><br/>';
                        ?>
                    <input type="submit" value="policz">
                </form>
                
                </div>
        </div>                  

        <div class="row">
            <div class="col-md-3 my-5 kafelek">
                <h1>Romb</h1>
                <form method="POST">
                     <input type="text" name="romb_bok" placeholder="  Podaj bok a "> <br>
                     <input type="text" name="wysokosc_rombu" placeholder="  Podaj wysokość "> <br>
                   
                        <?php
                            $diamond = new Diamond($_POST['romb_bok'], $_POST['wysokosc_rombu'],$_POST['romb_sinus'], $_POST['przekatna_romb_e'], $_POST['przekatna_romb_f']);
                            echo $diamond -> getArea().'cm<sup>2</sup><br/>';
                            echo $diamond -> getCircuit().'cm<br/>';
                          
                        ?>
                    <input type="submit" value="policz">
                </form>
                <h1>Romb z sinusem</h1>
                <form method="POST">
                    
                    <input type="text" name="romb_sinus" placeholder="  Podaj sinus"> <br>
                     <input type="text" name="romb_bok" placeholder=" Podaj bok a "> <br>
                    
                        <?php
                            $diamond1 = new Diamond($_POST['romb_sinus'], $_POST['romb_bok'], $_POST['wysokosc_rombu'], $_POST['przekatna_romb_e'], $_POST['przekatna_romb_f']);
                            echo $diamond1 -> getAreaa().'cm<sup>2</sup><br/>';
                            
                            
                          
                        ?>
                    <input type="submit" value="policz">
                </form>
                
                <h1>Romb z przekątnych </h1>
                <form method="POST">
                    
                    <input type="text" name="przekatna_romb_e" placeholder="  Podaj przekątną e"> <br>
                     <input type="text" name="przekatna_romb_f" placeholder="  Podaj przekątną f "> <br>
                    
                        <?php
                            $diamond2 = new Diamond($_POST['romb_sinus'], $_POST['romb_bok'], $_POST['wysokosc_rombu'], $_POST['przekatna_romb_e'], $_POST['przekatna_romb_f']);
                            echo $diamond2 -> getAreaDiagonal().'cm<sup>2</sup><br/>';
                           
                            
                          
                        ?>
                    <input type="submit" value="policz">
                </form>


            </div>

            <div class="col-md-3 my-5 kafelek">
                <h1>Równologłobok</h1>
                <form method="POST">
                     <input type="text" name="rownoleglobok_a" placeholder="  Podaj bok a "> <br>
                     <input type="text" name="rownoleglobok_b" placeholder="  Podaj bok b "> <br>
                     <input type="text" name="rownoleglobok_h" placeholder="  Podaj wysokośc h"> <br>
                     
                        <?php
                            $parallelogram = new Parallelogram($_POST['rownoleglobok_a'],$_POST['rownoleglobok_b'],$_POST['rownoleglobok_h']);
                            echo $parallelogram -> getArea().'cm<sup>2</sup><br/>';
                            echo $parallelogram -> getCircuit().'cm<br/>';
                            
                        ?>
                    <input type="submit" value="policz">
                </form>
            </div>


            
                
            <div class="col-md-3 my-5 kafelek">
                <h1>Policz pole Deltoidu</h1>
                <form method="POST">
                    <input type="text" name="Deltoid_e" placeholder="  Podaj e  "> <br>
                    <input type="text" name="Deltoid_f" placeholder="  Podaj f "> <br>
                
                        <?php
                            $deltoid = new Deltoid($_POST['Deltoid_a'], $_POST['Deltoid_b'] ,$_POST['Deltoid_e'], $_POST['Deltoid_f'], $_POST['Deltoid_sius']);
                            echo $deltoid -> getArea().'cm<sup>2</sup><br/>';
                           
                        ?>
                    <input type="submit" value="policz">
                </form>

                <h1>Policz pole Deltoida z przekątnych</h1>
                <form method="POST">
                    <input type="text" name="Deltoid_a" placeholder="  Podaj a  "> <br>
                    <input type="text" name="Deltoid_b" placeholder="  Podaj b "> <br>
                    <input type="text" name="Deltoid_sinus" placeholder="  Podaj sinus"> <br>
                        <?php
                            $deltoid1 = new Deltoid($_POST['Deltoid_a'], $_POST['Deltoid_b'] ,$_POST['Deltoid_e'], $_POST['Deltoid_f'], $_POST['Deltoid_sius']);
                            echo $deltoid1 -> getAreaa().'cm<sup>2</sup><br/>';
                        ?>

                    <input type="submit" value="policz">
                </form>

                <h1>Policz obwód Deltoida</h1>
                <form method="POST">
                    <input type="text" name="Deltoid_a" placeholder="  Podaj a  "> <br>
                    <input type="text" name="Deltoid_b" placeholder="  Podaj b "> <br>
                
                        <?php
                            $deltoid2 = new Deltoid($_POST['Deltoid_a'], $_POST['Deltoid_b'] ,$_POST['Deltoid_e'], $_POST['Deltoid_f'], $_POST['Deltoid_sius']);
                            echo $deltoid2 -> getCircuit().'cm<sup>2</sup><br/>';
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

