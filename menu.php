<?php
//connects to database
$host = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "vincent_menu";

//create connection
$conn = mysqli_connect($host,$dbUsername,$dbPassword,$dbname);
?>
<!DOCTYPE html>
<html lang="en">
  
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Apollo - Menu</title>

    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon" />

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

    <link rel="stylesheet" href="./styles.css" />
    <link rel="stylesheet" href="./menu.css" />

  </head>
  <body>
    <div class="shadow">
    <header id="navbar">
      <div class="logo">
        <h1>Apollo</h1>
        <h2></h2>
      </div>
      <div class="hamburger">
        <i class="fas fa-bars" aria-hidden="true"></i>
      </div>
      <div class="close">
        <i class="fa fa-times" aria-hidden="true"></i>
      </div>
      <nav>
        <ul>
          <li><a id="homepage" href="./index.html">Home</a></li>
          <li><a id="menu" href="./menu.html">Weekly Menu</a></li>
          <li><a href="./etlap.html">Menu</a></li>
          <li><a href="./contact.html">Contact</a></li>
        </ul>
      </nav>
    </header>
    <div class="hero">
      <h1>Our Weekly Menu</h1>
    </div>
    <div class="hero-overlay"></div>



    <article>

      <div class="monday grid-item" id="date">
        <div class="week-day">Monday</div>
        <span id="monday-date"></span>
        <?php
        $sql = "SELECT * FROM menu ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result); 
        
        if ($resultCheck > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='monday-soup soup'>" . $row['monday_soup'] . "</div>";
            echo "<div class='monday-main-1 main main-1'>" . "A: " . $row['monday_main_1'] . "</div>";
            echo "<div class='monday-main-2 main main-2'>" . "B: " . $row['monday_main_2'] . "</div>"; 
            echo "<div class='monday-main-3 main main-3'>" . "C: " . $row['monday_main_3'] . "</div>";
            echo "<div class='monday-price-1 price price-1'>" . "A: " . $row['monday_price_1'] . " Eur" . "</div>";
            echo "<div class='monday-price-2 price price-2'>" . "A: " . $row['monday_price_2'] . " Eur" . "</div>";
            echo "<div class='monday-price-3 price price-3'>" . "A: " . $row['monday_price_3'] . " Eur" . "</div>";
          }
        }
        ?>
      </div>

      <div class="tuesday grid-item" id="date">
        <div class="week-day">Tuesday</div>
        <span id="tuesday-date"></span>
        <?php
        $sql = "SELECT * FROM menu ORDER BY id DESC LIMIT 1;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result); 
        
        if ($resultCheck > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='tuesday-soup soup'>" . $row['tuesday_soup'] . "</div>";
            echo "<div class='tuesday-main-1 main main-1'>" . "A: " . $row['tuesday_main_1'] . "</div>";
            echo "<div class='tuesday-main-2 main main-2'>" . "B: " . $row['tuesday_main_2'] . "</div>"; 
            echo "<div class='tuesday-main-3 main main-3'>" . "C: " . $row['tuesday_main_3'] . "</div>";
            echo "<div class='tuesday-price-1 price price-1'>" . "A: " . $row['tuesday_price_1'] . " Eur" . "</div>";
            echo "<div class='tuesday-price-2 price price-2'>" . "A: " . $row['tuesday_price_2'] . " Eur" . "</div>";
            echo "<div class='tuesday-price-3 price price-3'>" . "A: " . $row['tuesday_price_3'] . " Eur" . "</div>";
          }
        }
        ?>
      </div>

      <div class="wednesday grid-item" id="date">
        <div class="week-day">Wednesday</div>
        <span id="wednesday-date"></span>
        <?php
        $sql = "SELECT * FROM menu ORDER BY id DESC LIMIT 1;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result); 
        
        if ($resultCheck > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='wednesday-soup soup'>" . $row['wednesday_soup'] . "</div>";
            echo "<div class='wednesday-main-1 main main-1'>" . "A: " . $row['wednesday_main_1'] . "</div>";
            echo "<div class='wednesday-main-2 main main-2'>" . "B: " . $row['wednesday_main_2'] . "</div>"; 
            echo "<div class='wednesday-main-3 main main-3'>" . "C: " . $row['wednesday_main_3'] . "</div>";
            echo "<div class='wednesday-price-1 price price-1'>" . "A: " . $row['wednesday_price_1'] . " Eur" . "</div>";
            echo "<div class='wednesday-price-2 price price-2'>" . "A: " . $row['wednesday_price_2'] . " Eur" . "</div>";
            echo "<div class='wednesday-price-3 price price-3'>" . "A: " . $row['wednesday_price_3'] . " Eur" . "</div>";
          }
        }
        ?>
      </div>

      <div class="thursday grid-item" id="date">
        <div class="week-day">Thursday</div>
        <span id="thursday-date"></span>
        <?php
        $sql = "SELECT * FROM menu ORDER BY id DESC LIMIT 1;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result); 
        
        if ($resultCheck > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='thursday-soup soup'>" . $row['thursday_soup'] . "</div>";
            echo "<div class='thursday-main-1 main main-1'>" . "A: " . $row['thursday_main_1'] . "</div>";
            echo "<div class='thursday-main-2 main main-2'>" . "B: " . $row['thursday_main_2'] . "</div>"; 
            echo "<div class='thursday-main-3 main main-3'>" . "C: " . $row['thursday_main_3'] . "</div>";
            echo "<div class='thursday-price-1 price price-1'>" . "A: " . $row['thursday_price_1'] . " Eur" . "</div>";
            echo "<div class='thursday-price-2 price price-2'>" . "A: " . $row['thursday_price_2'] . " Eur" . "</div>";
            echo "<div class='thursday-price-3 price price-3'>" . "A: " . $row['thursday_price_3'] . " Eur" . "</div>";
          }
        }
        ?>
      </div>

      <div class="friday grid-item" id="date">
        <div class="week-day">Friday</div>
        <span id="friday-date"></span>
        <?php
        $sql = "SELECT * FROM menu ORDER BY id DESC LIMIT 1;";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result); 
        
        if ($resultCheck > 0) {
          while ($row = mysqli_fetch_assoc($result)) {
            echo "<div class='friday-soup soup'>" . $row['friday_soup'] . "</div>";
            echo "<div class='friday-main-1 main main-1'>" . "A: " . $row['friday_main_1'] . "</div>";
            echo "<div class='friday-main-2 main main-2'>" . "B: " . $row['friday_main_2'] . "</div>"; 
            echo "<div class='friday-main-3 main main-3'>" . "C: " . $row['friday_main_3'] . "</div>";
            echo "<div class='friday-price-1 price price-1'>" . "A: " . $row['friday_price_1'] . " Eur" . "</div>";
            echo "<div class='friday-price-2 price price-2'>" . "A: " . $row['friday_price_2'] . " Eur" . "</div>";
            echo "<div class='friday-price-3 price price-3'>" . "A: " . $row['friday_price_3'] . " Eur" . "</div>";
          }
        }
        ?>
      </div>
    </article>



    <div class="delivery-info">
      <h1 class="delivery">0.99 fee for ordering</h1>
      <a>Order from home - 7543 123 123 </a>
    </div>


    <button class="login-btn">
      <span class="login-btn-click">Customize Menu - Login</span>
    </button>

    
    <footer>



      <div class="social-media">
        <p class="follow">Follow us</p>
        <a href="">
          <i class="fab fa-facebook" aria-hidden="true"></i>
        </a>
        <a href="">
          <i class="fab fa-instagram" aria-hidden="true"></i>
        </a>
        <p>Cookie policy</p>
      </div>

      <div class="open">
        <h6>OPEN HOURS</h6>
        <p>
          Monday to Friday: 10:30 am to 11 pm <br />
          Weekends: 11 am to 11 pm
        </p>
      </div>

      <div class="rights">
        <p>
          Copyright &#169; <span id="copyright-year"></span> Apollo Pizzeria &
          Bar.
        </p>
        <p>All rights preserved</p>
      </div>
    </footer>
  </div>
    <form id="login-form" action="login.php" method="post">
      <button class="cancelbtn">X</button>

      <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="uname" required />

        <label><b>Password</b></label>
        <input
          type="password"
          placeholder="Enter Password"
          name="password"
          required
        />

        <button class="submit" type="submit">Login</button>
      </div>

      <div class="container" style="background-color: #f1f1f1"></div>
    </form>

    <script src="./menu-dates.js"></script>
    <script src="./date.js"></script>
    <script src="./navbar.js"></script>
    <script src="./menu-login.js"></script>
  </body>

</html>
