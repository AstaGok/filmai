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
        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container-fluid">
            <a href="index.php"><img src="img/filmai-logo.png" class="img-fluid" alt="logo" style="padding: 15px 0;"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="nav navbar-nav ms-auto w-100 justify-content-end">
                <li class="nav-item">
                  <a class="nav-link" href="#">NAUJIENOS</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">IŠSIRINKTI FILMĄ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">PARDUOTUVĖ</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">KONTAKTAI</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>

      <!--Slide-->
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/slide-1.png" class="d-block w-100" alt="filmu-repertuaras">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="slide1 fw-light">Filmai, geriausiomis kainomis!</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide-2.png" class="d-block w-100" alt="filmu-repertuaras">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="slide1 fw-light">Superherojai! Jau nuo 2021 liepos 1 d.</h5>
            </div>
          </div>
          <div class="carousel-item">
            <img src="img/slide-3.png" class="d-block w-100" alt="filmu-repertuaras">
            <div class="carousel-caption d-none d-md-block">
              <h5 class="slide1 fw-light">Kino premjeros! Jau 2022 metais!</h5>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
        <!-- Content --> 
        <div class="container" style="padding: 2em 0;">
          <h1 class="afterfilter fw-light">Išsirink mėgstamiausia filmą</h1>
          <div id="myBtnContainer" class="text-center">
            <button class="btn" onclick="filterSelection('zanras')" style="margin-bottom: 0.7em;"> Pagal žanrą</button>
            <button class="btn" onclick="filterSelection('metai')" style="margin-bottom: 0.7em;"> Pagal metus</button>
            <button class="btn" onclick="filterSelection('rezisierius')" style="margin-bottom: 0.7em;"> Pagal režisierių</button>
          </div>

          
          <div class="container-1">
              <form action="#" method="POST">
              <button class="filterDiv zanras" name="zanras" value="animaciniai">Animaciniai</button>
              <button class="filterDiv zanras" name="zanras" value="dedektyviniai">Dedektyviniai</button>
              <button class="filterDiv zanras" name="zanras" value="drama">Drama</button>
              <button class="filterDiv zanras" name="zanras" value="fantastiniai">Fantastiniai</button>
              <button class="filterDiv zanras" name="zanras" value="istoriniai">Istoriniai</button>
              <button class="filterDiv zanras" name="zanras" value="komedijos">Komedijos</button>
              <button class="filterDiv zanras" name="zanras" value="miuziklai">Miuziklai</button>
              <button class="filterDiv zanras" name="zanras" value="miuziklai">Veiksmo</button>
              <button class="filterDiv zanras" name="zanras" value="siaubo">Siaubo</button>
            <button class="filterDiv metai" name="metai" value="1975 - 1980">1975 - 1980</button>
            <button class="filterDiv metai" name="metai" value="1981 - 1985">1981 - 1985</button>
            <button class="filterDiv metai" name="metai" value="1986 - 1990">1986 - 1990</button>
            <button class="filterDiv metai" name="metai" value="1991 - 1995">1991 - 1995</button>
            <button class="filterDiv metai" name="metai" value="1996 - 2000">1996 - 2000</button>
            <button class="filterDiv metai" name="metai" value="2001 - 2005">2001 - 2005</button>
            <button class="filterDiv metai" name="metai" value="2006 - 2010">2006 - 2010</button>
            <button class="filterDiv metai" name="metai" value="2011 - 2015">2011 - 2015</button>
            <button class="filterDiv metai" name="metai" value="2016 - 2020">2016 - 2020</button>
            <button class="filterDiv metai" name="metai" value="2021 - 2022">2021 - 2022</button>
            <button class="filterDiv rezisierius" name="rezisierius" value="Steven Spielberg">Steven Spielberg</button>
            <button class="filterDiv rezisierius" name="rezisierius" value="Quentin Tarantino">Quentin Tarantino</button>
            <button class="filterDiv rezisierius" name="rezisierius" value="Woody Allen">Woody Allen</button>
            <button class="filterDiv rezisierius" name="rezisierius" value="Roberto Benigni">Roberto Benigni</button>
            <button class="filterDiv rezisierius" name="rezisierius" value="Roman Polański">Roman Polański</button>
            <button class="filterDiv rezisierius" name="rezisierius" value="Martin Scorsese">Martin Scorsese</button>
            </form>
          </div>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">

<?php
if (isset($_POST['zanras'])){
$zanras = $_POST['zanras'];   
$query = "SELECT *
FROM filmu_lentele WHERE zanras ='$zanras'";
$connect = new PDO("mysql:host=localhost;dbname=filmai", "root", "");
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach ($result as $row) {
?>
<form method="POST" class="col d-grid gap-2 pt-2">
        <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
            <img src="img/<?php echo $row['img']; ?>" style="vertical-align: middle; max-width: 100%; height: auto;" />
            <h4 class="text-secondary"><?php echo $row['pavadinimas']; ?></h4>
            <h4 class="text-danger">€ <?php echo $row['price']; ?></h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["pavadinimas"]; ?>" />
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
            <input type="hidden" name="hidden_id" value="<?php echo $row["ID"]; ?>" />
            <input type="submit" name="add_to_cart" style="margin-top:5px; background-color: #000;" class="btn btn-dark" value="Plačiau" />
        </div>
    </form>

<?php
}}
?>

<?php
if (isset($_POST['metai'])){
$metai = $_POST['metai'];   
$query = "SELECT *
FROM filmu_lentele WHERE metai ='$metai'";
$connect = new PDO("mysql:host=localhost;dbname=filmai", "root", "");
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach ($result as $row) {
?>
    <form method="POST" class="col d-grid gap-2 pt-2">
        <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
            <img src="img/<?php echo $row['img']; ?>" style="vertical-align: middle; max-width: 100%; height: auto;" />
            <h4 class="text-secondary"><?php echo $row['pavadinimas']; ?></h4>
            <h4 class="text-danger">€ <?php echo $row['price']; ?></h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["pavadinimas"]; ?>" />
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
            <input type="hidden" name="hidden_id" value="<?php echo $row["ID"]; ?>" />
            <input type="submit" name="add_to_cart" style="margin-top:5px; background-color: #000;" class="btn btn-dark" value="Plačiau" />
        </div>
    </form>
<?php
}}
?>

<?php
if (isset($_POST['rezisierius'])){
$rezisierius = $_POST['rezisierius'];   
$query = "SELECT *
FROM filmu_lentele WHERE rezisierius ='$rezisierius'";
$connect = new PDO("mysql:host=localhost;dbname=filmai", "root", "");
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach ($result as $row) {

?>
    <form method="POST" class="col d-grid gap-2 pt-2">
        <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
            <img src="img/<?php echo $row['img']; ?>" style="vertical-align: middle; max-width: 100%; height: auto;" />
            <h4 class="text-secondary"><?php echo $row['pavadinimas']; ?></h4>
            <h4 class="text-danger">€ <?php echo $row['price']; ?></h4>
            <input type="hidden" name="hidden_name" value="<?php echo $row["pavadinimas"]; ?>" />
            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
            <input type="hidden" name="hidden_id" value="<?php echo $row["ID"]; ?>" />
            <input type="submit" name="add_to_cart" style="margin-top:5px; background-color: #000;" class="btn btn-dark" value="Plačiau" />
        </div>
    </form>
<?php
}}

?>   
</div>
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

