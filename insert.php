<?php

//goes through every input here
$monday_soup = $_POST['monday_soup'];
$monday_main_1 = $_POST['monday_main_1'];
$monday_main_2 = $_POST['monday_main_2'];
$monday_main_3 = $_POST['monday_main_3'];
$monday_price_1 = $_POST['monday_price_1'];
$monday_price_2 = $_POST['monday_price_2'];
$monday_price_3 = $_POST['monday_price_3'];

$tuesday_soup = $_POST['tuesday_soup'];
$tuesday_main_1 = $_POST['tuesday_main_1'];
$tuesday_main_2 = $_POST['tuesday_main_2'];
$tuesday_main_3 = $_POST['tuesday_main_3'];
$tuesday_price_1 = $_POST['tuesday_price_1'];
$tuesday_price_2 = $_POST['tuesday_price_2'];
$tuesday_price_3 = $_POST['tuesday_price_3'];

$wednesday_soup = $_POST['wednesday_soup'];
$wednesday_main_1 = $_POST['wednesday_main_1'];
$wednesday_main_2 = $_POST['wednesday_main_2'];
$wednesday_main_3 = $_POST['wednesday_main_3'];
$wednesday_price_1 = $_POST['wednesday_price_1'];
$wednesday_price_2 = $_POST['wednesday_price_2'];
$wednesday_price_3 = $_POST['wednesday_price_3'];

$thursday_soup = $_POST['thursday_soup'];
$thursday_main_1 = $_POST['thursday_main_1'];
$thursday_main_2 = $_POST['thursday_main_2'];
$thursday_main_3 = $_POST['thursday_main_3'];
$thursday_price_1 = $_POST['thursday_price_1'];
$thursday_price_2 = $_POST['thursday_price_2'];
$thursday_price_3 = $_POST['thursday_price_3'];

$friday_soup = $_POST['friday_soup'];
$friday_main_1 = $_POST['friday_main_1'];
$friday_main_2 = $_POST['friday_main_2'];
$friday_main_3 = $_POST['friday_main_3'];
$friday_price_1 = $_POST['friday_price_1'];
$friday_price_2 = $_POST['friday_price_2'];
$friday_price_3 = $_POST['friday_price_3'];
//connects to database
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "vincent_menu";

//create connection
$conn = new MySQLI($host,$dbUsername,$dbPassword,$dbname);

if (mysqli_connect_error()) {
  die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
 } else {
  $INSERT = "INSERT Into menu (monday_soup, monday_main_1,	monday_main_2,	monday_main_3,	monday_price_1,	monday_price_2,	monday_price_3, tuesday_soup, tuesday_main_1,	tuesday_main_2,	tuesday_main_3,	tuesday_price_1,	tuesday_price_2,	tuesday_price_3, wednesday_soup, wednesday_main_1,	wednesday_main_2,	wednesday_main_3,	wednesday_price_1,	wednesday_price_2,	wednesday_price_3, thursday_soup, thursday_main_1,	thursday_main_2,	thursday_main_3,	thursday_price_1,	thursday_price_2, thursday_price_3, friday_soup, friday_main_1,	friday_main_2,	friday_main_3,	friday_price_1,	friday_price_2,	friday_price_3) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
}
  //prepare statement

    $stmt = $conn->prepare($INSERT);
    $stmt->bind_param("ssssiiissssiiissssiiissssiiissssiii", $monday_soup, $monday_main_1, $monday_main_2, $monday_main_3, $monday_price_1, $monday_price_2, $monday_price_3, $tuesday_soup, $tuesday_main_1, $tuesday_main_2, $tuesday_main_3, $tuesday_price_1, $tuesday_price_2, $tuesday_price_3, $wednesday_soup, $wednesday_main_1, $wednesday_main_2, $wednesday_main_3, $wednesday_price_1, $wednesday_price_2, $wednesday_price_3, $thursday_soup, $thursday_main_1, $thursday_main_2, $thursday_main_3, $thursday_price_1, $thursday_price_2, $thursday_price_3, $friday_soup, $friday_main_1, $friday_main_2, $friday_main_3, $friday_price_1, $friday_price_2, $friday_price_3);
    $stmt->execute();

  $stmt->close();
  $conn->close();
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Vincent - Adminisztráció</title>
    <link rel="stylesheet" href="./admin.css"> 

    <link
      href="https://fonts.googleapis.com/css2?family=Cabin:wght@400;700&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Italianno&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Inika&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css"
    />
  </head>
  <body>

    <header>
      <div class="logo">
        <h1>Vincent</h1>
        <h2>Pizzeria & bar</h2>
      </div>
      <nav>
        <ul>
          <li><a href="" id="admin">Admin</a></li>

        </ul>
      </nav>
      <div class="hamburger">
        <i class="fas fa-bars" aria-hidden="true"></i>
      </div>
      <div class="close">
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>

    </header>

    <div class="hero">
      <h1>
        Heti menü szerkesztése <br>
    
      </h1>
    </div>
    <div class="hero-overlay"></div>
        <?php echo "új menü sikeresen feltöltve" ?>



<div class="logout-container">
  <a class="logout" href="./logout.php">Kijelentkezés</a>
</div>

<footer>
  <div class="social-media">
    <p class="follow">Kövess minket !</p>
    <a href="">
      <i class="fab fa-facebook" aria-hidden="true"></i>
    </a>
    <a href="">
      <i class="fab fa-instagram" aria-hidden="true"></i>
    </a>
    <p>Cookie policy</p>
  </div>

  <div class="open">
    <h6>NYITVATARTÁS</h6>
    <p>
      Hétfőtől Péntekig: 10:30 -tól 23:00-ig <br />
      Szombaton és Vasárnap: 11:00 - 23:00
    </p>
  </div>

  <div class="rights">
    <p>
      Copyright &#169; <span id="copyright-year"></span> Vincent Pizzeria &
      Bar - Párkány Sturovo.
    </p>
    <p>Minden jog fenntartva !</p>
  </div>
</footer>

</body>
</html>