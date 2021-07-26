<?php 
session_start();


if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {

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
    <meta content="width=device-width, initial-scale=1" name="viewport" />

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
        Heló,  
        <?php echo $_SESSION['name']; ?>
      </h1>
    </div>
    <div class="hero-overlay"></div>





    <div class="container">
  <form id='monday' action="insert.php" method="POST">
    <h2 class='day'>Menü megváltoztatása</h2>


    <h3 class="week-day-name">Hétfő</h3>
    <h3></h3>
    <label>Hétfő levesek :</label>
    <input type="text" name='monday_soup'>

    <label>Hétfő menü A : </label>
    <input type="text" name='monday_main_1'>
    <label>Hétfő menü B : </label>
    <input type="text" name='monday_main_2'>
    <label>Hétfő menü C : </label>
    <input type="text" name='monday_main_3'>

    <label>Hétfő ár A :</label>
    <input type="text" name='monday_price_1'>
    <label>Hétfő ár B :</label>
    <input type="text" name='monday_price_2'>
    <label>Hétfő ár C :</label>
    <input type="text" name='monday_price_3'>
    

    <hr class="second-line">
    <hr class="second-line">

    <h3 class="week-day-name">Kedd</h3>
    <h3></h3>
    <label>Kedd levesek :</label>
    <input type="text" name='tuesday_soup'>

    <label>Kedd menü A : </label>
    <input type="text" name='tuesday_main_1'>
    <label>Kedd menü B : </label>
    <input type="text" name='tuesday_main_2'>
    <label>Kedd menü C : </label>
    <input type="text" name='tuesday_main_3'>

    <label>Kedd ár A :</label>
    <input type="text" name='tuesday_price_1'>
    <label>Kedd ár B :</label>
    <input type="text" name='tuesday_price_2'>
    <label>Kedd ár C :</label>
    <input type="text" name='tuesday_price_3'>
    


    <hr class="second-line">
    <hr class="second-line">

    <h3 class="week-day-name">Szerda</h3>
    <h3></h3>
    <label>Szerda levesek :</label>
    <input type="text" name='wednesday_soup'>

    <label>Szerda menü A : </label>
    <input type="text" name='wednesday_main_1'>
    <label>Szerda menü B : </label>
    <input type="text" name='wednesday_main_2'>
    <label>Szerda menü C : </label>
    <input type="text" name='wednesday_main_3'>

    <label>Szerda ár A :</label>
    <input type="text" name='wednesday_price_1'>
    <label>Szerda ár B :</label>
    <input type="text" name='wednesday_price_2'>
    <label>Szerda ár C :</label>
    <input type="text" name='wednesday_price_3'>
    

    <hr class="second-line">
    <hr class="second-line">

    <h3 class="week-day-name">Csütörtök</h3>
    <h3></h3>
    <label>Csütörtök levesek :</label>
    <input type="text" name='thursday_soup'>

    <label>Csütörtök menü A : </label>
    <input type="text" name='thursday_main_1'>
    <label>Csütörtök menü B : </label>
    <input type="text" name='thursday_main_2'>
    <label>Csütörtök menü C : </label>
    <input type="text" name='thursday_main_3'>

    <label>Csütörtök ár A :</label>
    <input type="text" name='thursday_price_1'>
    <label>Csütörtök ár B :</label>
    <input type="text" name='thursday_price_2'>
    <label>Csütörtök ár C :</label>
    <input type="text" name='thursday_price_3'>

    <hr class="second-line">
    <hr class="second-line">

    <h3 class="week-day-name">Péntek</h3>
    <h3></h3>
    <label>Péntek levesek :</label>
    <input type="text" name='friday_soup'>

    <label>Péntek menü A : </label>
    <input type="text" name='friday_main_1'>
    <label>Péntek menü B : </label>
    <input type="text" name='friday_main_2'>
    <label>Péntek menü C : </label>
    <input type="text" name='friday_main_3'>

    <label>Péntek ár A :</label>
    <input type="text" name='friday_price_1'>
    <label>Péntek ár B :</label>
    <input type="text" name='friday_price_2'>
    <label>Péntek ár C :</label>
    <input class="down-more" type="text" name='friday_price_3'> 


      
  <input class="submit" type="submit" name="submit" value="Új menü feltöltése">

  </form>

</div>
<div class="logout-container">
  <a class="logout" href="./logout.php">Kijelentkezés</a>
</div>

<footer>
  <div class="social-media">
    <p class="follow">Kövess minket !</p>
    <a href="https://www.facebook.com/vincentpizzeria" target="_blank">
      <i class="fab fa-facebook" aria-hidden="true"></i>
    </a>
    <a href="https://www.instagram.com/vincent.pizzeria/" target="_blank">
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



  <script src="./menu-result.js"></script>
</body>
</html>


<?php 
}else{
     header("Location: menu.php");
     exit();
}
 ?>
