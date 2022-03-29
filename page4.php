<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="description" content="Geriausi filmai Lietuvoje">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Filmai</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/882b9e1db2.js" crossorigin="anonymous"></script>
    <script src="js/filter.js"></script>
    <link rel="stylesheet" href="CSS/style.css">

  </head>
  <body>
        <!--Navi-->
        <nav class="navbar navbar-expand-lg navbar-light" style="border-bottom: 1px solid #FAD006">
          <div class="container-fluid">
            <a href="index.php"><img src="img/filmai-logo.png" class="img-fluid" alt="logo" style="padding: 15px 0;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ms-auto w-100 justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="naujienos.php">NAUJIENOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="page2.php">IŠSIRINKTI FILMĄ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="page3.php">PARDUOTUVĖ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="page4.php">KONTAKTAI</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
        
<!--CONTENT-->
<div class="container" style="padding-top:40px">
  <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2">
      <div class="col fw-light" style="color: #fff">
          <p>
              <b>UAB Filmai</b><br>
        Įmonės kodas: 30226588<br>
        Adresas: Žirmūnų g. 139, Vilnius<br>
        a/s LT187300000000000 AB Swedbank<br>
        Duomenys kaupiami ir saugomi Juridinių asmenų registre. <br>
        Registro tvarkytojas: VĮ Registrų centras<br>
        Telefono numeris: 8 655 5555<br>
        Email: info@filmai.lt<br>
         </p>
    </div>
    <div class="col">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=%C5%BDirm%C5%ABn%C5%B3%20g.%20139,%20Vilnius&t=&z=13&ie=UTF8&iwloc=&output=embed"></iframe><br />
    </div>
  </div>
</div>

<!--    forma   -->
<div class="container" style="padding-top: 3em;">
    <h3 style="color: #fff; text-align: center;">Susisiekite</h3>
    <form class="custom-centered">
    <div class="mb-3 col-12">
    <label for="inputName" class="form-label">Vardas</label>
    <input type="text" class="form-control" id="inputName">
  </div>
     <div class="mb-3 col-12">
    <label for="phone" class="form-label">Telefonas</label>
    <input type="tel" class="form-control" id="iphone">
  </div>
  <div class="mb-3 col-12">
    <label for="exampleInputEmail1" class="form-label">El. paštas</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
    <div class="mb-3 col-12">
  <label for="exampleFormControlTextarea1" class="form-label">Žinutė</label>
  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
  <div class="mb-3 form-check col-12">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">“Sutinku, jog mano nurodyti asmens duomenys būtų naudojami Privatumo politikoje nustatyta tvarka”</label>
  </div>
        <button type="submit" class="btn btn-primary" onclick="myFunction()" style="color: #000">Siųsti</button>
</form>
</div>

<!-- Footer -->
       <div class="container" style="padding-bottom: 1em; padding-top: 3em;">
          <div class="row align-items-center">
          <div class="col-sm-8">
            <h6 style="color: #fff;" class="fw-light">KONTAKTAI</h6>
            <ul class="list-inline" style="color: #fff;">
              <li class="list-inline-item fw-light"> Adresas: Žirmūnų g. 139, Vilnius </li>
              <li class="list-inline-item fw-light"> Tel.: 8 655 5555 </li>
              <li class="list-inline-item fw-light"> Email.: info@filmai.lt </li>
            </ul>
          </div>
          <div class="col-sm-4">
            <h6 style="color: #fff;" class="fw-light">SEKITE MUS</h6>
            <ul class="list-inline">
              <li class="list-inline-item"><i class="fab fa-facebook-f"></i></li>
              <li class="list-inline-item"><i class="fab fa-tiktok"></i></li>
            </ul>
          </div>
        </div>
        </div>
    <div class="container-fluid">
      <div class="row" style="background-color: #2b2b35; border-top: 1px solid #FAD006">
       <div class="col-12" style="text-align: center;">
        <p class="footer-copyright">© 2011-2022 UAB „Filmai“ | filmai.lt </p>
         </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
  </body>
</html>