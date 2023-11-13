<?php
$servername = "localhost"; // Change to your server name if needed
$username = "root"; // Change to your database username
$password = ""; // Change to your database password
$dbname = "sarirasa"; // Change to your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

  $sql = "SELECT title, description, highlightimg FROM highlight WHERE id IN (6, 7, 8)";
//$sql = "SELECT title, description, highlightimg, uploadDate, Active FROM highlight where Active=1 ORDER BY uploadDate LIMIT 3";

$result = $conn->query($sql);

$data = array(); // Initialize an array to store the retrieved data

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row; // Store each row in the data array
    }
} else {
    // Handle the case where no data is found
    $data[] = array(
        "title" => "Title not found",
        "description" => "Description not found",
        "highlightimg" => "Image not found"
    );
}

$conn->close();
?>



<html lang="en">
  <head>  
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Restraunt</title>
    <!-- js -->
    <script src="script.js"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
      integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- icon footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>
  <body>
    <!-- navbar main always stick hidden on top -->
    <nav class="navbar" id="shownav">
        <div class="logo"><img src="img/logosr500.png" alt=""></div>
        <div class="namalogo"><img src="img/NamaLogo.png" alt=""></div>
        <div class="menu_full">
            <a href="#home">Home</a>
            <a href="#Fasilitas">Fasilitas</a>
            <a href="#highlight">Highlight</a>
            <a href="#">Contact</a>
        </div>
        <!-- navbar-popup -->
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
            <span></span>
            </label>
            <ul class="menu__box">
                <li><a class="menu__item" href="#home">Home</a></li>
                <li><a class="menu__item" href="#Fasilitas">Fasilitas</a></li>
                <li><a class="menu__item" href="#highlight">Highlight</a></li>
                <li><a class="menu__item" href="#">Contact</a></li>
            </ul>
        </div>
        <div class="namalogomobile" ><img src="img/NamaLogo2.png" alt=""></div>
    </nav>
    <!-- navbar home bg only -->
    <div class="container-satu" id="home">
      <div class="nav_top" id="overlaynav">
          <div class="logo"><img src="img/logosr500.png" alt=""></div>
          <div class="menu_top">
              <a href="#home">Home</a>
              <a href="#Fasilitas">Fasilitas</a>
              <a href="#highlight">Highlight</a>
              <a href="#">Contact</a>
          </div>
      </div>
      <div class="btn-centered">
          <button class="btn-contact">Kontak Kami</button>
        </div>
        <div class="bgimage">
            <img src="img/sari-rasa-mainbg-shadewhite.png" alt="bg-sarirasa">
            
        </div>

        
        <div class="srlogonama" id="overlaynamalogo"><img src="img/NamaLogo.png" alt=""></div>
        
    </div>
    
    <!--  -->
    <div class="container-dua" id="Fasilitas">
      <h2>Fasilitas Rumah Makan</h2>
      <div class="hr-center"><div class="line-h2"></div></div>
      <div class="carousell"> 
        <div id="carouselExampleCaptions" class="carousel slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="http://localhost/sarirasa/admin/postimages/IMG20230917120457.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>First slide label</h5>
                <p>Some representative placeholder content for the first slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="http://localhost/sarirasa/admin/postimages/b60fcd9089e675fd4f67b091e5a931a0.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">  
                <h5>Second slide label</h5>
                <p>Some representative placeholder content for the second slide.</p>
              </div>
            </div>
            <div class="carousel-item">
              <img src="http://localhost/sarirasa/admin/postimages/b60fcd9089e675fd4f67b091e5a931a0.jpg" class="d-block w-100" alt="...">
              <div class="carousel-caption d-none d-md-block">
                <h5>Third slide label</h5>
                <p>Some representative placeholder content for the third slide.</p>
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
      </div>

      
      <div class="icon-set">
        <div class="icon insta">
          <a href="https://www.instagram.com/rm_sarirasa_kendal"><img src="img/insta-300.png" alt=""></a>
          <p>@rm_sarirasa_kendal</p>
        </div>
        <div class="icon email">
          <a href=""><img src="img/email-300.png" alt=""></a>
          <p>sarirasa098@gmail.com</p>
        </div>
        <div class="icon ph">
          <img src="img/phone-300.png" alt="">
          <p>081 127 0606</p>
          <p></p>
        </div>
        <div class="icon homeph">
          <img src="img/home-phone-300.png" alt="">
          <p>(0294) 641 888</p>
        </div>
      </div>
      
    </div>

      <div class="container-tiga" id="highlight">
        <h1 id="overlayheadhl">KABAR TERKINI</h1>
        <div class="hr-center-h1"><div class="line-h1" id="overlayheadhl"></div></div>
        <?php foreach ($data as $item) { ?>
        <div class="single-card">
          <div class="img-area">
            <img src="http://localhost/sarirasa/admin/postimages/<?php echo $item["highlightimg"]; ?>" alt="images">
            <div class="overlay">
              <button class="add-to-cart">Add to Cart</button>
              <button class="view-details">View Details</button>
            </div>
          </div>
          
          <div class="info">
            <h3><?php echo $item["title"]; ?></h3>
            <div class="hr-center"><hr id="line-1"></div>
            <p><?php echo $item["description"]; ?></p>
          </div>
        </div>  
        <?php } ?>
        <!-- <div class="single-card">
          <div class="img-area">
            <img src="img/2.jpg" alt="">
            <div class="overlay">
              <button class="add-to-cart">Add to Cart</button>
              <button class="view-details">View Details</button>
            </div>
          </div>
          <div class="info">
            <h3>Laptop</h3>
            <p class="price">$599.99</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
          </div>
        </div>
      
        <div class="single-card">
          <div class="img-area">
            <img src="img/3.jpg" alt="">
            <div class="overlay">
              <button class="add-to-cart">Add to Cart</button>
              <button class="view-details">View Details</button>
            </div>
          </div>
          <div class="info">
            <h3>Headphone</h3>
            <p class="price">$29.99</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing</p>
          </div> 
        </div>-->


      </div>

      <div class="container-empat">
          <div class="box-parent">
            <div class="child-1">
              <h2>Alamat Kami</h2>
              <div class="line-h2"></div>
              <p>Jalan Raya Semarang - Jakarta Km. 42,3 Jenarsari - Gemuh - Kendal. </p>
              <p>Posisi di tepi Jalan Pantura (Nasional 1) </p>
              <p>Luas Tanah 2,5 Hektare.</p>
            </div>

              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31683.743059628916!2d110.08201522131031!3d-6.954004334926764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7042e2bff83f5b%3A0x9a813de02a5a15a!2sRumah%20Makan%20Sari%20Rasa%20Weleri%20Kendal!5e0!3m2!1sen!2sid!4v1699859070473!5m2!1sen!2sid" style="border:1;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="child-2"></iframe>

          </div>

      </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
  <footer>
      <div class="footer-content">
          <div class="foot-logo"><img src="img/namalogo2.png" alt=""></div>
          <p>We’re a diverse and passionate team that takes the restaurant business to the next level. We stay light on our feet and truly enjoy delivering great food and services.</p>
          <ul class="socials">
            <li><a href="#"><img src="img/ig.svg" alt="ig"></a></li>
            <li><a href="#"><img src="img/maill.svg" alt="mail"></a></li>
            <li><a href="#"><img src="img/phone.svg" alt="phone"></a></li>
            <!-- (0294)641888 -->
          </ul>
      </div>
      <div class="footer-bottom">
          <p>&copy;2023 RM Sari Rasa. All Rights Reserved.</p>
      </div>
  </footer>
</html>