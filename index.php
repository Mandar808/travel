<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password);

    // Check for connection success
    if(!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    // echo "Success connecting to the db";

    // Collect post variables
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $desc = $_POST['desc'];
    $sql = "INSERT INTO `trip`.`trip` (`name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ('$name', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";
    // echo $sql;

    // Execute the query
    if($con->query($sql) == true){
        // echo "Successfully inserted";

        // Flag for successful insertion
        $insert = true;
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }

    // Close the database connection
    $con->close();
}
?>









<!DOCTYPE html>
<html>

<head>
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
  <link type="text/css" rel="stylesheet" href="css/main.css" />
  <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Travel</title>
</head>

<body id="home" class="scrollspy">
  <div class="navbar-fixed">
     <nav class="purple darken-4">
       <div class="container">
         <div class="nav-wrapper">
           <a href="#home" class="brand-logo">Travel</a>
           <a href="#" data-activates="mobile-nav" class="button-collapse">
             <i class="material-icons">menu</i>
           </a>
           <ul class="right hide-on-med-and-down">
             <li><a href="#home">Home</a></li>
             <li><a href="#search">Search</a></li>
             <li><a href="#popular">Popular Places</a></li>
             <li><a href="#gallery">Gallery</a></li>
             <li><a href="#contact">Contact</a></li>
           </ul>
         </div>
       </div>
     </nav>
  </div>
  <ul class="side-nav" id="mobile-nav">
    <li><a href="#home">Home</a></li>
    <li><a href="#search">Search</a></li>
    <li><a href="#popular">Popular Places</a></li>
    <li><a href="#gallery">Gallery</a></li>
    <li><a href="#contact">Contact</a></li>
  </ul>

  <!-- Slider -->
  <section class="slider">
    <ul class="slides">
      <li><img src="img/img1.jpg" alt="">
      <div class="caption center-align">
        <h2>Take Your Drean Vacation</h2>
        <h5 class="dark grey-text text-darken-4 hide-on-small-only">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</h5>
        <a href="#" class="btn btn-large purple darken-4 ">Learn More</a>
      </div>
    </li>

    <li><img src="img/img2.jpg" alt="">
      <div class="caption left-align">
        <h2>Let's Travel</h2>
        <h5 class="dark grey-text text-darken-4 hide-on-small-only">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</h5>
        <a href="#" class="btn btn-large purple darken-4">Learn More</a>
      </div>
    </li>

    <li><img src="img/img3.jpg" alt="">
      <div class="caption right-align">
        <h2>Groups & Individuals</h2>
        <h5 class="dark grey-text text-darken-4 hide-on-small-only">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's</h5>
        <a href="#" class="btn btn-large purple darken-4">Learn More</a>
      </div>
    </li>
    </ul>
  </section>

  <!-- Search -->
  <section id="search" class="section section-search purple darken-4 white-text center scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h3>Search Destinations</h3>
          <div class="input-field">
            <input class="white grey-text autocomplete" placeholder="NewYork, London, etc..." type="text" id="autocomplete-input">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Icon Boxes -->
  <section class="section section-icons grey lighten-4 center">
    <div class="container">
      <div class="row">
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large purple-text">room</i>
            <h4>Location</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, quis.</p>            
          </div>
        </div>
      

        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large purple-text">store</i>
            <h4>Shop</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, quis.</p>     
          </div>
        </div>
      
        <div class="col s12 m4">
          <div class="card-panel">
            <i class="material-icons large purple-text">airplanemode_active</i>
            <h4>Destination</h4>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis, quis.</p>
        </div>
      </div>
    </div>
    </div>
  </section>

  <!-- popular places -->
  <section id="popular" class="section section-popular scrollspy">
    <div class="container">
      <div class="row">
        <h4 class="center">
          <span class="purple-text">Popular Places</span></h4>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/img1.jpg" alt="">
              <span class="card-title">Cancun, Mexico</span>
            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                delectus?
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/img4.jpg" alt="">
              <span class="card-title">Okinawa Japan</span>
            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                delectus?
              </p>
            </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card">
            <div class="card-image">
              <img src="img/img5.jpg" alt="">
              <span class="card-title">Doha Quatar</span>
            </div>
            <div class="card-content">
              <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas aliquid fugiat corporis laudantium, architecto
                delectus?
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col s12 center">
          <a href="#contact" class="btn btn-large purple darken-4">
            <i class="material-icons left">send</i> Contact For Booking
          </a>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Follow -->
  <section class="section section-follow purple darken-4 white-text center">
    <div class="container">
      <div class="row">
        <div class="col s12">
          <h4>Follow Us</h4>
          <p>Get special offers on social medias</p>
          <a href="htttps://facebook.com" target="_blank" class="white-text">
            <i class="fab fa-facebook fa-4x"></i>
          </a>
          <a href="htttps://twitter.com" target="_blank" class="white-text">
            <i class="fab fa-twitter fa-4x"></i>
          </a>
          <a href="htttps://linkedin.com" target="_blank" class="white-text">
            <i class="fab fa-linkedin fa-4x"></i>
          </a>
          <a href="htttps://youtube.com" target="_blank" class="white-text">
            <i class="fab fa-youtube fa-4x"></i>
          </a>
          <a href="htttps://instagram.com" target="_blank" class="white-text">
            <i class="fab fa-instagram fa-4x"></i>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- Gallery -->
  <section id="gallery" class="section section-gallery scrollspy">
    <div class="container">
      <h4 class="center">
        <span class="purple-text">Our Gallery</span>
      </h4>
      <div class="row">
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?beach" alt="">
        </div>

        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?travel" alt="">
        </div>

        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?nature" alt="">
        </div>

        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?travel" alt="">
        </div>

        
      </div>

      <div class="row">
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?water" alt="">
        </div>

        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?bridge" alt="">
        </div>

        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?building" alt="">
        </div>

        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?forest" alt="">
        </div>
      </div>

      <div class="row">
        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?vehicle" alt="">
        </div>

        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?travelling" alt="">
        </div>

        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?safari" alt="">
        </div>

        <div class="col s12 m3">
          <img class="materialboxed responsive-img" src="https://source.unsplash.com/1600x900/?surfing" alt="">
        </div> 
      </div>

    </div>
  </section>

  <!-- Contact -->
  <section id="contact" class="section-contact scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <div class="card-panel purple white-text center">
            <i class="material-icons medium">email</i>
            <h5>Contact Us For Booking</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis rerum nihil maiores officia iure velit deserunt inventore rem minima illum?</p>

          

          </div>
          <ul class="collection width-header">
            <li class="collection-header">
              <h4>Location</h4>
            </li>
            <li class="collection-item">Travel Agency</li>
            <li class="collection-item">523 Beach, Suite</li>
            <li class="collection-item">Miami, Florida 23244</li>
          </ul>

        </div>

        <div class="col s12 m6">
          <div class="card-panel purple white-text">
            <!-- <h5>Please fill the form</h5>
            <div class="input-field">
              <input type="text" placeholder="Name" id="name">
              <label for="name">Name</label>
            </div>
            <div class="input-field">
              <input type="email" placeholder="Email" id="email">
              <label for="email">Email</label>
            </div>
            <div class="input-field">
              <input type="text" placeholder="Phone" id="phone">
              <label for="phone">Phone</label>
            </div>
            <div class="input-field">
              <textarea class="materialize-textarea" placeholder="Enter Message" id="message"></textarea>
              <label for="message">Message</label>
            </div>
            <input type="submit" value="Submit" class="btn  purple darken-4"> -->
            <form action="index.php" method="post">
              <input type="text" name="name" id="name" placeholder="Enter your name">
              <input type="text" name="age" id="age" placeholder="Enter your Age">
              <input type="text" name="gender" id="gender" placeholder="Enter your gender">
              <input type="email" name="email" id="email" placeholder="Enter your email">
              <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
              <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter any other information here"></textarea>
              <button class="btn">Submit</button> 
          </form>




          </div>
          
        </div>
      </div>
    </div>
  </section>


  <!--Import jQuery before materialize.js-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/materialize.min.js"></script>
  <script>
    $(document).ready(function () {
      // init side-nav
      $('.button-collapse').sideNav();

      // init slider
      $('.slider').slider({
        indicators: false,
        height: 500,
        transition: 500,
        interval: 6000
      });

      //auto-complete
      $('.autocomplete').autocomplete({
        data: {
          "Europe": null,
          "America": null,
          "London": null,
          "Mexico": null,
          "Jamica": null,
          "China": null,
          "Pakistan": null
        }
      });

      // Init Scrollspy
      $('.scrollspy').scrollSpy();

    });
  </script>
</body>

</html>