<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
      integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm"
      crossorigin="anonymous"
    />
    <link rel="shortcut icon" type="x-icon" href="C:\Users\harsh\OneDrive\Pictures\Screenshots\Screenshot (9).png">
    <link rel="stylesheet" href="index.css" />
    <title>FASHIOnova</title>
  </head>
  <body>
    <div class="header">
      <div class="container">
        <div class="navbar">
          <div class="logo">
            <a href="index.php">
              <img src="images/logo.png" alt="brand-logo" width="125px" />
            </a>
          </div>
          <nav>
            <ul class="sidebar" >
              <li onclick=hideSidebar()><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="m256-200-56-56 224-224-224-224 56-56 224 224 224-224 56 56-224 224 224 224-56 56-224-224-224 224Z"/></svg></a></li>
              <li><a href="index.php">Home</a></li>
              <li><a href="products.php">Products</a></li>
              <li><a href="contactus.php">Contact</a></li>
              <li><a href="blog.php">Blog</a></li>
              <li><a href="discount.php">Discount</a></li>
            </ul>
            <ul onclick=showSidebar() class="upper">
              <li class="hideOnMobile"><a href="index.php">Home</a></li>
              <li class="hideOnMobile"><a href="products.php">Products</a></li>
              <li class="hideOnMobile"><a href="contactus.php">Contact</a></li>
              <li class="hideOnMobile"><a href="blog.php">Blog</a></li>
              <li class="hideOnMobile"><a href="discount.php">Discount</a></li>
               <li class="hideOnMobile"><a href="./qrcodegenerator/qr.php"> <img src="https://cdn-icons-png.flaticon.com/512/6276/6276556.png" alt="cart" width="30px" height="30px" /></a></li>
              <li class="menu-button"><a href="#"><svg xmlns="http://www.w3.org/2000/svg" height="26" viewBox="0 -960 960 960" width="26"><path d="M120-240v-80h720v80H120Zm0-200v-80h720v80H120Zm0-200v-80h720v80H120Z"/></svg></a></li>
            </ul>
            <script>
              function showSidebar(){
                const sidebar = document.querySelector('.sidebar')
                sidebar.style.display='flex';
              }
              function hideSidebar(){
                const sidebar = document.querySelector('.sidebar')
                sidebar.style.display='none';
              }
            </script>
          </nav>
      </div>
        <div class="row">
          <div class="col-2">
            <h1>Give Your Workout<br />A New Style!</h1>
            <p>
              Success isn't always about greatness. it's about consistency.
              Consistent<br />hard work gains success. Greatness will come.
            </p>
            <a href="./explore/homepage.php" class="btn">Explore Now &#8594;</a>
          </div>
          <div class="col-2">
            <img src="https://www.pngfind.com/pngs/b/29-290966_ecommerce-png.png" alt="" />
          </div>
        </div>
      </div>
    </div>

    <!-- ------------Featured Categories------------ -->
    <div class="categories">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <img src="images/category-1.jpg" alt="categorie-1" />
          </div>
          <div class="col-3">
            <img src="images/category-2.jpg" alt="categorie-1" />
          </div>
          <div class="col-3">
            <img src="images/category-3.jpg" alt="categorie-1" />
          </div>
        </div>
      </div>
    </div>

    <!-- ------------Featured Products------------ -->
    <div class="small-container">
      <h2 class="title">Featured Products</h2>
      <div class="row">
        <div class="col-4">
          <a href="product-detail.php">
            <img src="https://images.pexels.com/photos/2235071/pexels-photo-2235071.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="product-1" />
          </a>
          <a href="product-details.php">
            <h4>Red Printed T-Shirt</h4>
          </a>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>&#8377;2,599.00</p>
        </div>
        <div class="col-4">
          <img src="images/product-2.jpg" alt="product-2" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
          <p>&#8377;2,599.00</p>
        </div>
        <div class="col-4">
          <img src="images/product-3.jpg" alt="product-3" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>&#8377;2,599.00</p>
        </div>
        <div class="col-4">
          <img src="images/product-4.jpg" alt="product-4" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>&#8377;2,599.00</p>
        </div>
      </div>
      <!-- ------------Latest Products------------ -->
      <h2 class="title">Latest Products</h2>
      <div class="row">
        <div class="col-4">
          <img src="images/product-5.jpg" alt="product-5" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>&#8377;2,599.00</p>
        </div>
        <div class="col-4">
          <img src="images/product-6.jpg" alt="product-6" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
          <p>&#8377;2,599.00</p>
        </div>
        <div class="col-4">
          <img src="images/product-7.jpg" alt="product-7" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>&#8377;2,599.00</p>
        </div>
        <div class="col-4">
          <img src="images/product-8.jpg" alt="product-8" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>&#8377;2,599.00</p>
        </div>
      </div>
      <div class="row">
        <div class="col-4">
          <img src="images/product-9.jpg" alt="product-9" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <i class="far fa-star"></i>
          </div>
          <p>&#8377;2,599.00</p>
        </div>
        <div class="col-4">
          <img src="images/product-10.jpg" alt="product-10" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>&#8377;2,599.00</p>
        </div>
        <div class="col-4">
          <img src="images/product-11.jpg" alt="product-11" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="far fa-star"></i>
            <i class="far fa-star"></i>
          </div>
          <p>&#8377;2,599.00</p>
        </div>
        <div class="col-4">
          <img src="images/product-12.jpg" alt="product-12" />
          <h4>Red Printed T-Shirt</h4>
          <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
          </div>
          <p>&#8377;2,599.00</p>
        </div>
      </div>
    </div>

    <!-- ----------offer------------ -->
    <div class="offer">
      <div class="small-container">
        <div class="row">
          <div class="col-2">
            <img src="images/exclusive.png" alt="offer" class="offer-img" />
          </div>
          <div class="col-2">
            <p>Exclusive Available on RedStore</p>
            <h1>Smart Band 4</h1>
            <small>The Mi Smart Band 4 features a 39.9% larger (than Mi Band 3)
              AMOLED color full-touch display with adjustable brightness, so
              everything is clear as can be.</small>
            <a href="" class="btn">Buy Now &#8594;</a>
          </div>
        </div>
      </div>
    </div>

    <!-- ------Testimonial-------------->
    <div class="testimonial">
      <div class="small-container">
        <div class="row">
          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
              expedita tempore excepturi impedit animi quasi labore
              necessitatibus repudiandae iste.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <img src="images/user-1.png" alt="user-1" />
            <h3>Sean Parker</h3>
          </div>
          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
              expedita tempore excepturi impedit animi quasi labore
              necessitatibus repudiandae iste.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <img src="images/user-2.png" alt="user-1" />
            <h3>Mike Smith</h3>
          </div>
          <div class="col-3">
            <i class="fa fa-quote-left"></i>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis
              expedita tempore excepturi impedit animi quasi labore
              necessitatibus repudiandae iste.
            </p>
            <div class="rating">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="far fa-star"></i>
            </div>
            <img src="images/user-3.png" alt="user-1" />
            <h3>Mabel Joe</h3>
          </div>
        </div>
      </div>
    </div>

    <!-- ----------- Brands ------------- -->
    <div class="brands">
      <div class="small-container">
        <div class="row">
          <div class="col-5">
            <img src="images/logo-coca-cola.png" alt="logo-coca-cola" />
          </div>
          <div class="col-5">
            <img src="images/logo-godrej.png" alt="logo-godrej" />
          </div>
          <div class="col-5">
            <img src="images/image.png" alt="logo-oppo" />
          </div>
          <div class="col-5">
            <img src="images/logo-paypal.png" alt="logo-paypal" />
          </div>
          <div class="col-5">
            <img src="images/logo-philips.png" alt="logo-philips" />
          </div>
        </div>
      </div>
    </div>

    <!-- --------footer------------ -->
    <div class="footer">
      <div class="container">
        <div class="row">
          <div class="footer-col-1">
            <h3>Download Our App</h3>
            <p>Download App for Android and ios mobile phone</p>
            <div class="app-logo">
              <img src="images/play-store.png" alt="" />
              <img src="images/app-store.png" alt="" />
            </div>
          </div>
          <div class="footer-col-2">
            <img src="C:\Users\harsh\Downloads\Screenshot__9_-removebg-preview.png" alt="" />
            <p>
              Our Purpose Is To Sustainably Make the Pleasure and Benefits of
              Sports Accessible to the Many.
            </p>
          </div>
          <div class="footer-col-3">
            <h3>Useful Links</h3>
            <ul>
              <li><a href="discount.php">Coupons</li></a>
                <li><a href="blog.php">Blog Post</li></a>
                <li><a href="#">Return Policy</li></a>
                <li><a href="#">Join Affiliate</li></a>
            </ul>
          </div>
          <div class="footer-col-4">
            <h3>Follow us</h3>
            <ul>
              <li>Facebook</li>
              <li>Twitter</li>
              <li>Instagram</li>
              <li>Youtube</li>
            </ul>
          </div>
        </div>
        <hr/>
        <p class="copyright">&copy;Copyright 2024 - FAISHOnova</p>
      </div>
    </div>
    
  </body>
</html>