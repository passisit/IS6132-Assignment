<?php

include 'config.php';

session_start();

// $user_id = $_SESSION['user_id'];

// if(!isset($user_id)){
//    header('location:login.php');
// }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>about</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />

    <!-- font awesome cdn link  -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css" />
  </head>
  <body>
    <?php include 'header.php'; ?>

    <div class="heading">
      <h3>About us</h3>
      <p><a href="index.php">Home</a> /About</p>
    </div>


  
    </div>

<div class="about_page">
    <section class="about">
      <div class="flex">
        <div class="image">
          <img src="images/about_img02.jpg" alt="" />
        </div>


        
        <div class="content">
          <h3>Why choose us?</h3>
          <p>
          Welcome to Bookly - your exclusive reading haven! At Bookly, we are committed to providing you with a diverse range of books, covering everything from literary classics to science fiction, from historical biographies to psychology and beyond. We understand the unique needs of every reader, which is why we carefully curate the finest selection of books, aiming to offer you a distinctive reading experience.
          </p>
          <p>
          Bookly is not just a bookstore; it's also a vibrant community of avid readers. We strive to create a platform for exchange and sharing, where you can discuss your reading experiences with fellow book lovers, share your reading lists, and participate in our meticulously planned online reading events and discussions. Bookly aims to be your companion on your reading journey, guiding you through the vast ocean of literature.
          </p>
        
          <a href="contact.php" class="btn">Contact us</a>
        </div>
       
      </div>
      <div class="map-container">
          <div id="map" style="width: 160%; height: 600px;"></div>
        </div>
    </section>
</div>

       


    <section class="reviews">
      <h1 class="title">Client's reviews</h1>

      <div class="box-container">
        <div class="box">
          <img src="images/pic-1.png" alt="" />
          <p>
          Bookly's customer service is exceptional. They helped me find the perfect gift and provided personalized recommendations. A reliable bookstore with top-notch service.
          </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Alex</h3>
        </div>

        <div class="box">
          <img src="images/pic-2.png" alt="" />
          <p>
          Bookly offers an incredible selection of books across various genres. Their user-friendly website makes browsing and purchasing a breeze. I highly recommend them!
          </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Emily</h3>
        </div>

        <div class="box">
          <img src="images/pic-3.png" alt="" />
          <p>
          Impressed by Bookly's fast shipping and careful packaging. My books arrived in perfect condition. Will definitely be shopping here again!
          </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Jacob</h3>
        </div>

        <div class="box">
          <img src="images/pic-4.png" alt="" />
          <p>
          Bookly's community aspect is fantastic. I've connected with fellow book lovers and discovered new reads. It's more than just a bookstore; it's a community hub for readers.
          </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Sophia</h3>
        </div>

        <div class="box">
          <img src="images/pic-5.png" alt="" />
          <p>
          Bookly has been my go-to bookstore for years. Their vast selection and excellent service never disappoint. Highly recommended for all book enthusiasts.
          </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Liam</h3>
        </div>

        <div class="box">
          <img src="images/pic-6.png" alt="" />
          <p>
          Navigating Bookly's website is a breeze. Their intuitive layout and robust search function make finding books effortless. A great online bookstore for book lovers!
          </p>
          <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <h3>Olivia</h3>
        </div>
      </div>
    </section>

    <section class="authors">
      <h1 class="title">Greate authors</h1>

      <div class="box-container">
        <div class="box">
          <img src="images/author-1.jpg" alt="" />
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
          <h3>Haruki Murakami</h3>
        </div>

        <div class="box">
          <img src="images/author-2.jpg" alt="" />
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
          <h3>Alice Walker</h3>
        </div>

        <div class="box">
          <img src="images/author-3.jpg" alt="" />
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
          <h3>George Orwell</h3>
        </div>

        <div class="box">
          <img src="images/author-4.jpg" alt="" />
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
          <h3>Jane Austen</h3>
        </div>

        <div class="box">
          <img src="images/author-5.jpg" alt="" />
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
          <h3>Toni Morrison</h3>
        </div>

        <div class="box">
          <img src="images/author-6.jpg" alt="" />
          <div class="share">
            <a href="#" class="fab fa-facebook-f"></a>
            <a href="#" class="fab fa-twitter"></a>
            <a href="#" class="fab fa-instagram"></a>
            <a href="#" class="fab fa-linkedin"></a>
          </div>
          <h3>Agatha Christie</h3>
        </div>
      </div>
    </section>

    <?php include 'footer.php'; ?>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

    <!-- custom js file link  -->
    <script>

var map = L.map('map').setView([51.8939, -8.4921], 15);
map.invalidateSize(); 

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
  attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
}).addTo(map);

L.marker([51.8939, -8.4921]).addTo(map)
  .bindPopup('A pretty CSS3 popup.<br> Easily customizable.')
  .openPopup();
</script>

    <script src="js/script.js"></script>
  </body>
</html>
