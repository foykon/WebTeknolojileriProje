<?php 
                          
                          $myemail="G201210014@sakarya.edu.tr";
                          $mysifre="G201210014";
                          $email = $_POST['email'];
                          $sifre = $_POST['sifre'];
                          $namen=explode("@",$email);
                          $signal=false;
                          if($email==$myemail && $mysifre==$sifre)
                          {
                            $signal=true;
                            
                          }else {
                            $signal=false;
                            header("refresh:5;url=login.html");

                            
                            
                            
                            //header("Location:login.html");
                          }
                        ?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/logincss.css">

        <title>LogIn</title>
    
    </head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top shadow-lg">
        <a class="navbar-brand" href="index.html">WebÖdev</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="ozgecmis.html">Özgeçmiş</a>
          </li>
            <li class="nav-item">
                <a class="nav-link" href="sehrim.html">Şehrim</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="mirasimiz.html">Mirasımız</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="hakkımda.html">Hakkımda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Bana Ulaşın</a>
            </li>
          </ul>
              <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="login.html">Login</a>
                </li>
              </ul>
            </div>
          </nav>

      <header id="headerSection">
        <div class="overlay">
            <div class="container">
                <div class="row text-center">
                    <div class="col my-auto">
                        <h1 class="display-3 text-white" ></h1>
                    </div>
                </div>
            </div>
        </div>
      </header>

      <section id="abilities3" class="text-white mx-5 mb-5">
        <div class="bg-dark container border border-secondary rounded shadow-lg">
          <div class="row my-3 ">
            <div class="col-lg-12 my-4">
              <h1 class="display-4 text-white" align="center" >
                  <?php
                    if($signal==true)
                    {
                      echo $namen[0]."  Hoşgeldin" ;
                    }
                    else
                    {
                      echo "Kullanıcı epostası yada şifre hatalı ";
                      echo "5 saniye içinde geri yönlendiriliyorsunuz";
                    }
                  ?>
              </h1>
            </div>
          </div>
        </div>
      </section>

    </table>
    <script src="bootstrap/js/jquery.js" ></script>
    <script src="bootstrap/js/popper.min.js" ></script>
    <script src="bootstrap/js/bootstrap.js" ></script>
    </body>
<html>
