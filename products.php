<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="product.css">
        <script src="https://kit.fontawesome.com/92d70a2fd8.js" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="header">
            <a href="index.php" class="logo">
                <img src="images/logo.png" alt="brand-logo" width="125px" />
              </a>
              <ul class="logo" >
                <li><a href="index.php">Home</a></li>
                <li><a href="products.php">Products</a></li>
                <li><a href="contactus.php">Contact</a></li>
                <li><a href="blog.php">Blog</a></li>
                <li><a href="discount.php">Discount</a></li>
                <li class="hideOnMobile"><a href="./qrcodegenerator/qr.php"> <img src="https://cdn-icons-png.flaticon.com/512/6276/6276556.png" alt="cart" width="30px" height="30px" /></a></li>

              </ul>
            <div class="cart"><i class="fa-solid fa-cart-shopping"></i><p id="count">0</p></div>
        </div>
        <div class="container">
            <div id="root"></div>
            <div class="sidebar">
                <div class="head"><p>My Cart</p></div>
                <div id="cartItem">Your cart is empty</div>
                <div class="foot">
                    <h3>Total</h3>
                    <h2 id="total">$ 0.00</h2>
                </div>
            </div>
        </div>
        <script src="script.js"></script>
    </body>
</html>