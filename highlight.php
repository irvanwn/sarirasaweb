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

  //$sql = "SELECT title, description, highlightimg FROM highlight WHERE id IN (6, 7, 8)";
  $sql = "SELECT title, description, highlightimg, uploadDate, Active FROM highlight where Active=1 ORDER BY uploadDate desc LIMIT 10";

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
    <link rel="stylesheet" href="css/highlight.css" />
    <!-- icon footer -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
    <nav class="navbar" id="shownav">
        <div class="logo"><img src="img/logosr500.png" alt=""></div>
        <div class="namalogo"><img src="img/NamaLogo.png" alt=""></div>
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
        <div class="namalogomobile" ><img src="img/NamaLogo2.png" alt=""></div>
    </nav>
    <div class="container">
    <?php $count = 0; ?>
    <?php foreach ($data as $item) { ?>
        <div class="child">
            <div class="image-area">
                <img src="http://localhost/sarirasa/admin/postimages/<?php echo $item["highlightimg"]; ?>" alt="">
            </div>
            <div class="desc-area">
                <h3><?php echo $item["title"]; ?></h3>
                <div class="line-hl"></div>
                <p><?php echo $item["description"]; ?></p>
            </div>
        </div>
        <?php $count++; ?>
        <?php if ($count % 2 === 0) { ?>
            </div><div class="container">
        <?php } ?>
    <?php } ?>
</div>

</body>
</html>