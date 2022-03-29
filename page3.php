
<?php

$connect = new PDO("mysql:host=localhost;dbname=filmai", "root", "");
$message = '';

if (isset($_POST["add_to_cart"])) {
    if (isset($_COOKIE["shopping_cart"])) {
        $cookie_data = stripslashes($_COOKIE['shopping_cart']);

        $cart_data = json_decode($cookie_data, true, JSON_UNESCAPED_UNICODE);
    } else {
        $cart_data = array();
    }

    $item_id_list = array_column($cart_data, 'item_id');

    if (in_array($_POST["hidden_id"], $item_id_list)) {
        foreach ($cart_data as $keys => $values) {
            if ($cart_data[$keys]["item_id"] == $_POST["hidden_id"]) {
                $cart_data[$keys]["item_quantity"] = $cart_data[$keys]["item_quantity"] + $_POST["quantity"];
            }
        }
    } else {
        $item_array = array(
            'item_id' => $_POST["hidden_id"],
            'item_name' => $_POST["hidden_name"],
            'item_price' => $_POST["hidden_price"],
            'item_quantity' => $_POST["quantity"]
        );
        $cart_data[] = $item_array;
    }


    $item_data = json_encode($cart_data, JSON_UNESCAPED_UNICODE);
    setcookie('shopping_cart', $item_data, time() + (86400 * 30));
    header("location:page3.php?success=1");
}

if (isset($_GET["action"])) {
    if ($_GET["action"] == "delete") {
        $cookie_data = stripslashes($_COOKIE['shopping_cart']);
        $cart_data = json_decode($cookie_data, true, JSON_UNESCAPED_UNICODE);
        foreach ($cart_data as $keys => $values) {
            if ($cart_data[$keys]['item_id'] == $_GET["id"]) {
                unset($cart_data[$keys]);
                $item_data = json_encode($cart_data, JSON_UNESCAPED_UNICODE);
                setcookie("shopping_cart", $item_data, time() + (86400 * 30));
                header("location:page3.php?remove=1");
            }
        }
    }
    if ($_GET["action"] == "clear") {
        setcookie("shopping_cart", "", time() - 3600);
        header("location:page3.php?clearall=1");
    }
}

if (isset($_GET["success"])) {
    $message = '
	<div class="alert alert-success alert-dismissible">
	  	<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
	  	Pridėta į krepšelį
	</div>
	';
}

if (isset($_GET["remove"])) {
    $message = '
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		Prekė pašalinta iš krepšelio
	</div>
	';
}
if (isset($_GET["clearall"])) {
    $message = '
	<div class="alert alert-success alert-dismissible">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
		Krepšelis išvalytas...
	</div>
	';
}
?>

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
                <li class="nav-item">
                    <button type="button" class="btn btn-light"><a href="cart.php" style="color:#000">          <?php
            if (isset($_COOKIE["shopping_cart"])) {
                $total = 0;
                $cookie_data = stripslashes($_COOKIE['shopping_cart']);
                $cart_data = json_decode($cookie_data, true, JSON_UNESCAPED_UNICODE);
                foreach ($cart_data as $keys => $values) {

        $total = $total + ($values["item_quantity"] * $values["item_price"]);
    }
    ?>
                        <tr>
                            <td colspan="3" align="right">Mokėti</td>
                            <td align="right">€ <?php echo number_format($total, 2); ?></td>
                            <td></td>
                        </tr>
                        <?php
                    } else {
                        echo '
				<tr>
					<td colspan="5" align="center">Krepšelis</td>
				</tr>
				';
                    }
                    ?></a></button>

                </li>
              </ul>
            </div>
          </div>
        </nav>

<!--        Krepselis-->


<!--            <div class="table-responsive">
<?php echo $message; ?>
                <div align="right">
                    <a href="page3.php?action=clear" class="remove-text-cart"><b>Išvalyti krepšelį</b></a>
                </div>
                <table class="table table-bordered" style="color: #fff">
                    <tr>
                        <th width="40%">Pavadinimas</th>
                        <th width="10%">Kiekis</th>
                        <th width="20%">Kaina</th>
                        <th width="15%">Viso</th>
                        <th width="5%">Veiksmas</th>
                    </tr>
            <?php
            if (isset($_COOKIE["shopping_cart"])) {
                $total = 0;
                $cookie_data = stripslashes($_COOKIE['shopping_cart']);
                $cart_data = json_decode($cookie_data, true, JSON_UNESCAPED_UNICODE);
                foreach ($cart_data as $keys => $values) {
                    ?>
                            <tr>
                                <td><?php echo $values["item_name"]; ?></td>
                                <td><?php echo $values["item_quantity"]; ?></td>
                                <td>€ <?php echo $values["item_price"]; ?></td>
                                <td>€ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                                <td><a href="page3.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="remove-text">Pašalinti</span></a></td>
                            </tr>
        <?php
        $total = $total + ($values["item_quantity"] * $values["item_price"]);
    }
    ?>
                        <tr>
                            <td colspan="3" align="right">Viso</td>
                            <td align="right">€ <?php echo number_format($total, 2); ?></td>
                            <td></td>
                        </tr>
                        <?php
                    } else {
                        echo '
				<tr>
					<td colspan="5" align="center">Krepšelis tuščias</td>
				</tr>
				';
                    }
                    ?>
                </table>
            </div>-->

        <!-- Content --> 
        <div class="container" style="padding: 2em 0;">
          <h1 class="afterfilter fw-light">PAIEŠKA</h1>
          <div id="myBtnContainer" class="text-left">
            <button class="btn" onclick="filterSelection('zanras')" style="margin-bottom: 0.7em;"> Pagal žanrą</button>
            <button class="btn" onclick="filterSelection('metai')" style="margin-bottom: 0.7em;"> Pagal metus</button>
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
            </form>
          </div>
        </div>

        <div class="container">
            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-2 row-cols-lg-4">
<?php
if (!isset($_POST["zanras"]) and (!isset($_POST["metai"]))){  
$query = "SELECT * FROM `filmu_lentele` WHERE 1 LIMIT 8";
$connect = new PDO("mysql:host=localhost;dbname=filmai", "root", "");
$statement = $connect->prepare($query);
$statement->execute();
$result = $statement->fetchAll();
foreach ($result as $row) {
?>
<form method="POST" class="col d-grid gap-2 pt-2">
        <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
                           <img src="img/<?php echo $row["img"]; ?>" style="vertical-align: middle; max-width: 100%; height: auto;" />
                            <h4 class="text-secondary"><?php echo $row["pavadinimas"]; ?></h4>
                            <h4 class="text-danger">€ <?php echo $row["price"]; ?></h4>
                            <input type="text" name="quantity" value="1" class="form-control" />
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pavadinimas"]; ?>" />
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                            <input type="hidden" name="hidden_id" value="<?php echo $row["ID"]; ?>" />
                            <input type="submit" name="add_to_cart" style="margin-top:5px; background-color: #000;" class="btn btn-dark" value="Į Krepšelį" />
        </div>
    </form>

<?php
}}
?>
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
                           <img src="img/<?php echo $row["img"]; ?>" style="vertical-align: middle; max-width: 100%; height: auto;" />
                            <h4 class="text-secondary"><?php echo $row["pavadinimas"]; ?></h4>
                            <h4 class="text-danger">€ <?php echo $row["price"]; ?></h4>
                            <input type="text" name="quantity" value="1" class="form-control" />
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pavadinimas"]; ?>" />
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                            <input type="hidden" name="hidden_id" value="<?php echo $row["ID"]; ?>" />
                            <input type="submit" name="add_to_cart" style="margin-top:5px; background-color: #000;" class="btn btn-dark" value="Į Krepšelį" />
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
                           <img src="img/<?php echo $row["img"]; ?>" style="vertical-align: middle; max-width: 100%; height: auto;" />
                            <h4 class="text-secondary"><?php echo $row["pavadinimas"]; ?></h4>
                            <h4 class="text-danger">€ <?php echo $row["price"]; ?></h4>
                            <input type="text" name="quantity" value="1" class="form-control" />
                            <input type="hidden" name="hidden_name" value="<?php echo $row["pavadinimas"]; ?>" />
                            <input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
                            <input type="hidden" name="hidden_id" value="<?php echo $row["ID"]; ?>" />
                            <input type="submit" name="add_to_cart" style="margin-top:5px; background-color: #000;" class="btn btn-dark" value="Į Krepšelį" />
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