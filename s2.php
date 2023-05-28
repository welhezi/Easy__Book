<!DOCTYPE html>
<html>
  <head>
    <title><b>hotel</b></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source Sans Pro">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
      html {
      scroll-behavior: smooth;
    }
    h1,h2,h3,h4,h5,h6 {font-family: "Roboto"}
    body {font-family: "Source Sans Pro"}
    </style>
  </head>
  <script>
function myFunction() {
  var x = document.getElementById("demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

<body class="w3-light-white w3-margin">

<div class="w3-bar w3-white w3-text-black">
  <h2 class="w3-left w3-tag w3-pale-red w3-round"> HOTEL    </h2>
  <a href="#Contact" class="w3-hide-small w3-bar-item w3-button w3-mobile w3-medium w3-right" style="margin-top:10px;">CONTACT</a>
  <a href="#reservation" class="w3-hide-small w3-bar-item w3-button w3-mobile w3-medium w3-right" style="margin-top:10px;">RESERVATION</a>
  <a href="#service" class="w3-hide-small w3-bar-item w3-button w3-mobile w3-medium w3-right" style="margin-top:10px;">SERVICES</a>
  <a href="#gallery" class="w3-hide-small w3-bar-item w3-button w3-mobile w3-medium w3-right" style="margin-top:10px;">GALLERY</a>
  <a href="#Home" class="w3-hide-small w3-bar-item w3-button w3-mobile w3-medium w3-right" style="margin-top:10px;">HOME</a>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-right w3-hide-medium w3-hide-large" style="margin-top:10px;" onclick="myFunction()">&#9776;</a>
</div>

<div id="demo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-small">
  <a href="#Home" class="w3-bar-item w3-button">HOME</a>
  <a href="#gallery" class="w3-bar-item w3-button">GALLERY</a>
  <a href="#service" class="w3-bar-item w3-button">SERVICES</a>
  <a href="#reservation" class="w3-bar-item w3-button">RESERVATION</a>
  <a href="#Contact" class="w3-bar-item w3-button">CONTACT</a>
</div>


<div class="w3-content" style="max-width:1600px">

  <header class="w3-display-container w3-wide" style="padding-bottom:32px;" id="Home">
    <img class="w3-image" src="https://www.halekulani.com/wp-content/uploads/2021/04/suites-mood1.jpg" alt="Photo by Jamie Street" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-blue">AN OASIS ON THE SHORES OF WAIKIKI</h1>
      <h1 class="w3-jumbo w3-text-navy w3-hide-small"><b>HALEKULANI</b></h1>
      <h6><button class="w3-button w3-round w3-pale-red w3-padding-large w3-large w3-hover-opacity-off"><a href="#Contact">BOOK NOW</a></button></h6>
    </div>
  </header>
  <h2 align="center" style="color:#b8228b">Discover serenity and elegance in the midst of Waikiki</h2>
  <p align="center" style="color:#8481ac">One of the first and finest hotels in Hawaii, Halekulani has welcomed guests to these tranquil beachfront grounds for more than a century. We believe in anticipating your needs and making sure you want for nothing. Top-tier service, award-winning cuisine and unique amenities are all here for one reason: You. 
    We look forward to welcoming you to our House Befitting Heaven.</p>
  
  <div class="w3-row-padding" id="gallery">
    <div class="w3-center w3-padding-32">
      <h2 class="w3-wide w3-center">GALLERY</h2>
         <p class="w3-opacity w3-center"><i>Explore the "House Befitting Heaven"</i></p><br>
    </div>

    <div class="w3-row-padding" style="margin:0 -16px">
        <div class="w3-third">
          <img src="https://www.halekulani.com/wp-content/uploads/2021/04/Halekulani-Diamond-Head-Oceanfront-Prime-Lanai-view.jpg" alt="Photo by Meritt Thomas" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Diamond head oceanfront prime lanai view</b></p>
          </div>
        </div>
        <div class="w3-third">
          <img src="https://www.halekulani.com/wp-content/uploads/2021/03/Halekulani_RoyalSuite_07.jpg" alt="Photo " style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Royel suite,a primer suite</b></p>
          </div>
        </div>
        <div class="w3-third">
          <img src="https://www.halekulani.com/wp-content/uploads/2021/03/Kukaoo1-sm.jpg" alt="Photo by Marcos Ferreira" style="width:100%" class="w3-hover-opacity">
          <div class="w3-container w3-white">
            <p><b>Kuka o o heiau at Manoa heritage center</b></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <form action="gallery.html" method="post">
    <button class="w3-button w3-round w3-blue w3-margin-bottom" onclick="document.getElementById('ticketModal').style.display='block'" style="width:300px">LEARN MORE</button>
  </form>


  <div class="w3-row-padding" id="service">
    <div class="w3-center w3-padding-32">
      <h2 class="w3-wide w3-center">SERVICES</h2>
         <p class="w3-opacity w3-center"><i>LUXURY SERVICES</i></p><br>
    </div> 

    <div class="w3-third">
      <div class="w3-container w3-white">
        <ul>
          <li>Luggage storage</li>
          <li>Daily maid service</li>
          <li>Common lounge/TV room</li>
          <li>Quick check-in/checkout</li>
          <li>24-hour reception</li>
        </ul>
      </div>
    </div>
    <p style="color:#8481ac" tyle="font-size:160%;" style="text-align:left;">We invite you to get out of the house – and onto the beach. From surf to SUP, boogie boards to sand castle building, enjoying Hawaii’s beaches might be exactly what you and your family need. There's never been a better time for a staycation. And for a limited time, we're offering special Kamaaina rates. 
      Book our Waikiki hotels and resorts and get all these included:
<br>
      50% off parking on 1 car <br>
      No resort charge <br>
      PLUS earn HawaiianMiles!</p>



  <div class="w3-white" id="reservation">
    <div class="w3-container">
      <div class="w3-center w3-padding-32">
      <h2 class="w3-wide">RESERVATION</h2>
      <p class="w3-opacity"><i>Save money</i></p><br>
      <p class="w3-left-align w3-white w3-text-black">
        Find out why the Halekulani Hotel is the hotel of choice for travelers visiting this site. Offering great comfort and excellent value for money, it offers a family atmosphere and a wide range of services designed for travelers like you.
      </p>
      </div>

      <div class="w3-third w3-margin-bottom">
        <div class="w3-card-4">
          <img src="https://www.halekulani.com/wp-content/uploads/2021/04/royal-suite-01-550x350-c-x50y50.jpg" alt="Photo" style="width:100%">
          <div class="w3-container">
            <h3>Suite</h3>
            <p class="w3-opacity">ACCOMMODATIONS FIT FOR ROYALTY</p>
            <p>Our Royal Suite offers an unrivaled level of service in an impeccable setting. Take your semi-private elevator to the top floor of the Premier Suites section to luxuriate in the inviting surroundings featuring unobstructed views of Diamond Head, Waikiki Beach and the Pacific Ocean. The warm neutral tones of the tropical-influenced décor allow the vivid greens and blues of the Island sea and sky to take center stage.</p>
            <p style="color:#af0a0a"><b><u>Price : $850</u></b></p>
            <p><button class="w3-button w3-round w3-pale-red w3-block"><a href="#Contact">BOOK NOW</a></button></p>
          </div>
        </div>
      </div>
  
      <div class="w3-third w3-margin-bottom">
        <div class="w3-card-4">
          <img src="https://www.halekulani.com/wp-content/uploads/2021/03/Halekulani_Halekulani-Suite_05-550x350-c-x50y50.jpg" alt="Photo" style="width:100%">
          <div class="w3-container">
            <h3>double</h3>
            <p class="w3-opacity">SUBLIMELY SOPHISTICATED LIVING</p>
            <p> Neutral colors and jewel-toned accents serve to emphasize the sun, sand and sea elements that reflect the natural splendors just outside the balcony doors. Island-inspired and Asian-influenced furnishings create a refined, romantic atmosphere, befitting the Vera Wang and Halekulani reputations for luxury and elegance.</p>
            <p style="color:#af0a0a"><b><u>Price : $720</u></b></p>
            <p><button class="w3-button w3-round w3-pale-red w3-block"><a href="#Contact">BOOK NOW</a></button></p>
          </div>
        </div>
      </div>
  
      <div class="w3-third w3-margin-bottom">
        <div class="w3-card-4">
          <img src="https://www.halekulani.com/wp-content/uploads/2021/04/premier-suites-feature-550x350-c-x50y50.jpg" style="width:100%">
          <div class="w3-container">
            <h3>simple</h3>
            <p class="w3-opacity">CLASSIC ELEGANCE AND SIGNATURE STYLE</p>
            <p>Floor-to-ceiling windows open onto a private lawn, landscaped to maintain privacy, in this unique ground-floor suite with views of Diamond Head, Waikiki Beach and House Without A Key’s iconic, century-old kiawe tree. Located on the original site of the Lewers family residence,it celebrates the spirit of Halekulani and our signature blend of indoor-outdoor lifestyle. </p>
            <p style="color:#af0a0a"><b><u>Price : $650</u></b></p>
            <p><button class="w3-button w3-round w3-pale-red w3-block"><a href="#Contact">BOOK NOW</a></button></p>
          </div>
        </div>
      </div>
    </div>
  
    <form action="gallery.html" method="get">
        <center><button class="w3-button w3-round w3-blue" onclick="document.getElementById('ticketModal').style.display='block'" style="width:600px">show more</button></center>
      </form>



<div class="w3-white" id="Contact">
  <div class="w3-container w3-padding-32">
    <div class="w3-center w3-padding-32">
<h2 class="w3-wide">CONTACT</h2>
 <p class="w3-opacity"><i>Book now or just send us a message</i></p><br>
<p class=" w3-center-align" style="color:#aa377c">
  Enjoy the understated elegance and world-class service of Halekulani, an oasis on the shores of Waikiki.
  </p>
      </div>
<div class="links-container" align="center">
  <a href="#log1" class="w3-button w3-hover-yellow w3-large w3-blue" style="width: 620px;" target="_blank" ></i>create new account</a>
  <br></br>
  <a href="#log2" class="w3-button w3-hover-yellow w3-large w3-blue" style="width: 620px;" target="_blank" ></i>log in</a>
</div>
<p style="text-align:center"><b>new account</b></p>
<div id="log1">
<form action="s2.php" target="_blank" method="get">
<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="first name"  name="n1" id="id1"></p>
<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="last name"  name="n2" id="id2"></p>
<p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="CIN" name="n3" id="id3" ></p>
<p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="address" name="n4" id="id4"></p>
<p><input class="w3-input w3-padding-16 w3-border" type="tel" placeholder="phone number" name="n5" id="id5"></p>
<p><button class="w3-button w3-round w3-pale-red w3-block" type="submit">register</button></p>
</form>
<?php 
require_once 'connectbd.php';echo '<br>';
$n1=isset($_GET['n1'])?$_GET['n1']:'';
$n2=isset($_GET['n2'])?$_GET['n2']:'';
$n3=isset($_GET['n3'])?$_GET['n3']:'';
$n4=isset($_GET['n4'])?$_GET['n4']:'';
$n5=isset($_GET['n5'])?$_GET['n5']:'';
$sql = "SELECT  * FROM clients where clients.cin=".$n3;
if ($result = mysqli_query($connect, $sql)){
if(mysqli_num_rows($result)>0){ echo 'complete the form to have an account ';}
else{ $s="INSERT INTO clients(cin, nom, prenom, adresse, tel) VALUES ('".intval($n3)."','".$n2."','".$n1."','".$n4."','".intval($n5)."')";
$l= mysqli_query($connect,$s);if($l){echo "insert with success";}else{echo "insert error ";}
} 
}
?>
</div>
<p style="text-align:center"><b>log in</b></p>
<div id="log2">
  <form action="contact.php" method="get">
    <p><input class="w3-input w3-padding-16 w3-border" type="number" placeholder="CIN" name="cin" id="cin" ></p>
    <p><button class="w3-button w3-round w3-pale-red w3-block" type="submit"> log in </button></p>
  </form>
</div>
</div>
</div>
<hr>
<form>
  <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Message" name="Message" id="mesg"></p>
  <p><button class="w3-button w3-round w3-pale-red w3-block" type="submit">SEND MESSAGE</button></p>
</form>

<footer class="w3-container w3-pale-red w3-center w3-margin-top" >
    <p>Find us on social media.</p>
    <a href="https://fr-fr.facebook.com/"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
    <a href="https://www.instagram.com/"><i class="fa fa-instagram w3-hover-opacity"></i></a>
    <a href="https://www.snapchat.com/fr-FR"><i class="fa fa-snapchat w3-hover-opacity"></i></a>
    <a href="https://www.pinterest.com/"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
    <a href="https://twitter.com/"><i class="fa fa-twitter w3-hover-opacity"></i></a>
    <a href="https://www.linkedin.com/"><i class="fa fa-linkedin w3-hover-opacity"></i></a>
    </footer>
</body>
</html>