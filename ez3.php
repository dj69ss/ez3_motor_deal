<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ez3_motor_deal";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['add_to_cart'])) {
    $product_id = $_GET['add_to_cart'];
    $_SESSION['cart'][$product_id] = $product;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>EZ3 Motor Deals</title>
<link rel="stylesheet" href="styles.css">
</head>
<body>

<div class="ez3-top">
    <div class="ez3-bar ez3-white ez3-wide ez3-padding ez3-card">
        <a href="http://localhost/jamorant/create.php" class="ez3-bar-item ez3-button">Profile</a>
        <a href="http://localhost/jamorant/create.php" class="ez3-bar-item ez3-button">Cart <?php echo isset($_SESSION['cart']) ? count($_SESSION['cart']) : 0; ?></a>
    </div>
</div>
      
<header>
  <div class="container">
    <div class="logo">
      <img class="small-round-img" src="img/EZ.png" alt="EZ3 Motor Deals Logo">
    </div>
    <h1>Welcome to EZ3 Motor Deals</h1>
  </div>
</header>

<main>
    <section id="products">
        <div class="container">
            <div class="products">
                <div class="product-card">
                    <img src="img/model1.webp" alt="Motorcycle">
                    <h3>Motorcycle Model 1</h3>
                    <p class="price">$2000</p>
                    <p class="availability">In Stock</p>
                    <button href="http://localhost/jamorant/create.php" class="buy-now">Buy Now</button>
                </div>
                <div class="product-card">
                    <img src="img/model2.png" alt="Motorcycle">
                    <h3>Motorcycle Model 2</h3>
                      <p class="price">$2500</p>
                    <p class="availability">In Stock</p>
                    <button href="http://localhost/jamorant/create.php" class="buy-now">Buy Now</button>
                </div>
                <div class="product-card">
                    <img src="img/model3.png" alt="Motorcycle">
                    <h3>Motorcycle Model 3</h3>
                    <p class="price">$2800</p>
                    <p class="availability">In Stock</p>
                    <button href="http://localhost/jamorant/create.php" class="buy-now">Buy Now</button>
                </div>
                <div class="product-card">
                    <img src="img/model4.png" alt="Motorcycle">
                    <h3>Motorcycle Model 4</h3>
                    <p class="price">$3000</p>
                    <p class="availability">In Stock</p>
                    <butto href="http://localhost/jamorant/create.php"n class="buy-now">Buy Now</button>
                </div>
                <div class="product-card">
                    <img src="img/model5.png" alt="Motorcycle">
                    <h3>Motorcycle Model 5</h3>
                    <p class="price">$3200</p>
                    <p class="availability">In Stock</p>
                    <button href="http://localhost/jamorant/create.php" class="buy-now">Buy Now</button>
                </div>
                <div class="product-card">
                    <img src="img/model6.png" alt="Motorcycle">
                    <h3>Motorcycle Model 6</h3>
                    <p class="price">$3500</p>
                    <p class="availability">In Stock</p>
                    <button href="http://localhost/jamorant/create.php" class="buy-now">Buy Now</button>
                </div>
                <div class="product-card">
                    <img src="img/model7.png" alt="Motorcycle">
                    <h3>Motorcycle Model 7</h3>
                    <p class="price">$3700</p>
                    <p class="availability">In Stock</p>
                    <button href="http://localhost/jamorant/create.php" class="buy-now">Buy Now</button>
                </div>
                <div class="product-card">
                    <img src="img/model8.png" alt="Motorcycle">
                    <h3>Motorcycle Model 8</h3>
                    <p class="price">$3800</p>
                    <p class="availability">In Stock</p>
                    <button href="http://localhost/jamorant/create.php" class="buy-now">Buy Now</button>
                </div>
                <div class="product-card">
                    <img src="img/model9.png" alt="Motorcycle">
                    <h3>Motorcycle Model 9</h3>
                    <p class="price">$4000</p>
                    <p class="availability">In Stock</p>
                    <button href="http://localhost/jamorant/create.php" class="buy-now">Buy Now</button>
                </div>
                <div class="product-card">
                    <img src="img/model10.png" alt="Motorcycle">
                    <h3>Motorcycle Model 10</h3>
                    <p class="price">$4200</p>
                    <p class="availability">In Stock</p>
                    <button href="http://localhost/jamorant/create.php" class="buy-now">Buy Now</button>
                </div>
                <div class="product-card">
                    <img src="img/model11.png" alt="Motorcycle">
                    <h3>Motorcycle Model 11</h3>
                    <p class="price">$4200</p>
                    <p class="availability">In Stock</p>
                    <button href="http://localhost/jamorant/create.php" class="buy-now">Buy Now</button>
                </div>
                <div class="product-card">
                    <img src="img/model12.png" alt="Motorcycle">
                    <h3>Motorcycle Model 12</h3>
                    <p class="price">$4200</p>
                    <p class="availability">In Stock</p>
                    <button href="http://localhost/jamorant/create.php" class="buy-now">Buy Now</button>
                </div>
            </div>
        </div>
    </section>
</main>

<footer>
    <div class="container">
        <div class="footer-info">
            <div class="contact-info">
                <h3>Contact Us</h3>
                <p>For any inquiries or assistance, please feel free to contact us:</p>
                <ul>
                    <li><strong>Email:</strong> info@ez3motordeals.com</li>
                    <li><strong>Phone:</strong> +1234567890</li>
                    <li><strong>Address:</strong> 123 Main Street, City, Country</li>
                </ul>
            </div>
            <div class="about-us">
                <h3>About Us</h3>
                <p>EZ3 Motor Deals is your one-stop destination for finding the best motorcycle deals. We offer a wide range of models to suit every rider's needs.</p>
            </div>
        </div>
        <p>&copy; 2024 EZ3 Motor Deals. All rights reserved.</p>
    </div>
</footer>

</body>
</html>

<?php
$conn->close();
?>
