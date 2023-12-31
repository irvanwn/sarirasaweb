<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <link rel="stylesheet" href="css/fasilitas.css" />
    <!-- icon footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar" id="shownav">
        <div class="logo"><img src="img/iconset/logosr500.png" alt=""></div>
        <div class="namalogo"><img src="img/iconset/NamaLogo.png" alt=""></div>
        <div class="menu_full">
            <a href="index.php">Home</a>
            <a href="fasilitas.php">Fasilitas</a>
            <a href="highlight.php">Highlight</a>
            <a href="index.php#contact">Contact</a>
        </div>
        <!-- navbar-popup -->
        <div class="hamburger-menu">
            <input id="menu__toggle" type="checkbox" />
            <label class="menu__btn" for="menu__toggle">
            <span></span>
            </label>
            <ul class="menu__box">
                <li><a class="menu__item" href="index.php">Home</a></li>
                <li><a class="menu__item" href="fasilitas.php">Fasilitas</a></li>
                <li><a class="menu__item" href="highlight.php">Highlight</a></li>
                <li><a class="menu__item" href="index.php#contact">Contact</a></li>
            </ul>
        </div>
        <div class="namalogomobile" ><img src="img/iconset/NamaLogo2.png" alt=""></div>
    </nav>
    
    <div class="container-top">
        <!-- parkir -->
        <div class="bg-add">
            <div class="fasilitas-1">
                <div class="child-1">
                    <div id="carouselParkir" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselParkir" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselParkir" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselParkir" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselParkir" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselParkir" data-bs-slide-to="4" aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/parkir/parkir1.jpg" class="d-block custom-width ms-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/parkir/parkir2.jpg" class="d-block custom-width ms-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/parkir/parkir3.jpg" class="d-block custom-width ms-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/parkir/parkir6.jpg" class="d-block custom-width ms-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/parkir/parkir4.jpg" class="d-block custom-width ms-auto" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselParkir" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselParkir" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="child-2">
                    <div class="wrapped">
                        <h1>Parkir Luas</h1>
                        <p>Di sini, Anda akan menemukan parkir yang luas yang tidak hanya menyediakan kelegaan bagi bis, tetapi juga memberikan ruang yang nyaman bagi pengunjung yang membawa kendaraan pribadi. Dengan area parkir yang lapang.</p>
                    </div>
                </div>
            </div>
        </div>
    <!-- mushola -->
    <div class="fasilitas-2">
        <div class="child-2">
            <div class="wrapped">
                <h1>Fasilitas Mushola</h1>
                <p>fasilitas mushola yang tenang, nyaman dan terjamin kebersihanya bagi para penumpang yang ingin beribadah sejenak sebelum melanjutkan perjalanan mereka.</p>
            </div>
        </div>
        <div class="child-1">
            <div id="carouselMusholla" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                <div class="carousel-indicators">       
                    <button type="button" data-bs-target="#carouselMusholla" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselMusholla" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselMusholla" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/musholla/musholla1.jpg" class="d-block custom-width" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/musholla/musholla2.jpg" class="d-block custom-width" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/musholla/musholla4.jpg" class="d-block custom-width" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselMusholla" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselMusholla" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
    <!-- service makan -->
    <div class="bg-add">
                <div class="fasilitas-1">
                    <div class="child-1">
                        <div id="carouselService" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselService" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselService" data-bs-slide-to="1" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselService" data-bs-slide-to="2" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselService" data-bs-slide-to="3" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselService" data-bs-slide-to="4" aria-label="Slide 5"></button>
                                <button type="button" data-bs-target="#carouselService" data-bs-slide-to="5" aria-label="Slide 6"></button>
                            </div>
                            <div class="carousel-inner">
                                <div class="carousel-item">
                                    <img src="img/service/service2.jpg" class="d-block custom-width ms-auto" alt="...">
                                </div>
                                <div class="carousel-item active">
                                    <img src="img/service/service6.jpg" class="d-block custom-width ms-auto" alt="...">
                                </div>
                                <div class="carousel-item active">
                                    <img src="img/service/service7.jpg" class="d-block custom-width ms-auto" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/service/service1.jpg" class="d-block custom-width ms-auto" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/service/service4.jpg" class="d-block custom-width ms-auto" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="img/service/service5.jpg" class="d-block custom-width ms-auto" alt="...">
                                </div>
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselService" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselService" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                    </div>
                    <div class="child-2">
                        <div class="wrapped">
                            <h1>Service Makan Bis Antarkota & Wisata </h1>
                            <p>Menyajikan servis makanan dan nasi kotak untuk perjalanan antarkota dan wisata, tempat ini menjadi lokasi yang cocok bagi pengunjung yang ingin beristirahat dan menikmati makanan yang disediakan tiap hari.</p>
                        </div>
                    </div>
                </div>
            </div>
        <!-- toilet -->
        <div class="fasilitas-2">
            <div class="child-2">
                <div class="wrapped">
                    <h1>Toilet Bersih</h1>
                    <p>Kenyamanan dalam perjalanan adalah prioritas di sini. Toilet yang bersih dengan kapasitas 500, terawat dengan baik, dan dilengkapi dengan fasilitas yang memadai memberikan rasa nyaman bagi para penumpang.</p>
                </div>
            </div>
            <div class="child-1">
                <div id="carouselToilet" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                    <div class="carousel-indicators">       
                        <button type="button" data-bs-target="#carouselToilet" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselToilet" data-bs-slide-to="1" aria-label="Slide 2"></button>
                        <!-- <button type="button" data-bs-target="#carouselToilet" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="img/toilet/toilet2.jpg" class="d-block custom-width" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="img/toilet/toilet1.jpg" class="d-block custom-width" alt="...">
                        </div>
                        <!-- <div class="carousel-item">
                            <img src="img/toilet/toilet.jpg" class="d-block custom-width" alt="...">
                        </div> -->
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselToilet" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselToilet" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <!-- oleh-oleh -->
        <div class="bg-add">
            <div class="fasilitas-1">
                <div class="child-1">
                    <div id="carouselOleh" class="carousel slide" data-bs-ride="carousel" data-bs-interval="4000">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselOleh" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselOleh" data-bs-slide-to="1" aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselOleh" data-bs-slide-to="2" aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselOleh" data-bs-slide-to="3" aria-label="Slide 4"></button>
                            <!-- <button type="button" data-bs-target="#carouselOleh" data-bs-slide-to="2" aria-label="Slide 3"></button> -->
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/oleh/oleh1.jpg" class="d-block custom-width ms-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/oleh/oleh2.jpg" class="d-block custom-width ms-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/oleh/oleh3.jpg" class="d-block custom-width ms-auto" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="img/oleh/oleh4.jpg" class="d-block custom-width ms-auto" alt="...">
                            </div>
                            <!-- <div class="carousel-item">
                                <img src="img/oleh/oleh.jpg" class="d-block custom-width ms-auto" alt="...">
                            </div> -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselOleh" data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselOleh" data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
                <div class="child-2">
                    <div class="wrapped">
                        <h1>Toko Oleh - oleh</h1>
                        <p>Kami juga menyediakan Toko oleh-oleh yang dapat dijadikan buah tangan untuk orang yang tersayang atau untuk camilam selama perjalanan.</p>
                    </div>
                </div>
            </div>
        </div>
            <!-- static no carousel -->
        <!-- <div class="bg-add">
            <div class="fasilitas-1">
                <div class="child-1">
                    <img src="img/IMG20230917114225.jpg" alt="">
                </div>
                <div class="child-2">
                    <div class="wrapped">
                        <h1>Fasilitas Mushola</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum in mollitia vero necessitatibus iure! Eum delectus tenetur esse nisi voluptatibus porro commodi repellat, itaque, nemo perspiciatis quis corrupti. Sint, fugiat?</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="fasilitas-2">
            <div class="child-2">
                <div class="wrapped">
                    <h1>Fasilitas Mushola</h1>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum in mollitia vero necessitatibus iure! Eum delectus tenetur esse nisi voluptatibus porro commodi repellat, itaque, nemo perspiciatis quis corrupti. Sint, fugiat?</p>
                </div>
            </div>
            <div class="child-1">
                <img src="img/IMG20230917114225.jpg" alt="">
            </div>
        </div> -->
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
<footer>
      <div class="footer-content">
          <div class="foot-logo"><img src="img/iconset/namalogo2.png" alt=""></div>
          <p>We’re a diverse and passionate team that takes the restaurant business to the next level. We stay light on our feet and truly enjoy delivering great food and services.</p>
          <ul class="socials">
            <li><a href="https://www.instagram.com/rm_sarirasa_kendal/"><img src="img/iconset/ig.svg" alt="ig"></a></li>
            <li><a href="#"><img src="img/iconset/maill.svg" alt="mail"></a></li>
            <li><a href="https://wa.me/<?php echo isset($data2[0]["telpon"]) ? $data2[0]["telpon"] : "phone not found"; ?>"><img src="img/iconset/phone.svg" alt="phone"></a></li>
          </ul>
      </div>
      <div class="footer-bottom">
          <p>&copy;2023 RM Sari Rasa. All Rights Reserved.</p>
      </div>
  </footer>
</html>