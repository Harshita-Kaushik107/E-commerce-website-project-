<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
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
    <link rel="stylesheet" href="index.css" />
    <title>FAISHOnova</title>
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

    <!-- ------------Single products details -->
    <div class="small-container single-products">
      <div class="row">
        <div class="col-2">
          <img
            src="https://images.pexels.com/photos/2235071/pexels-photo-2235071.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
            alt=""
            width="100%"
            id="product-img"
          />

          <div class="small-img-row">
            <div class="small-img-col">
              <img
                src="https://images.pexels.com/photos/2235073/pexels-photo-2235073.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
                alt=""
                width="100%"
                class="small-img"
              />
            </div>
            <div class="small-img-col">
              <img
                src="https://images.pexels.com/photos/2420029/pexels-photo-2420029.jpeg?auto=compress&cs=tinysrgb&w=600&lazy=load"
                alt=""
                width="100%"
                class="small-img"
              />
            </div>
            <div class="small-img-col">
              <img
                src="https://images.pexels.com/photos/4374417/pexels-photo-4374417.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1"
                alt=""
                width="100%"
                class="small-img"
              />
            </div>
          </div>
        </div>
        
        <div class="col-2">
          <p>Home / T-Shirt</p>
          <h1>Red Printed T-Shirt bt HRX</h1>
          <h4>&#8377;2,599.00</h4>
          <label>Size:</label>
          <select>
            <option value="">Select Size</option>
            <option value="">XXL</option>
            <option value="">XL</option>
            <option value="">Large</option>
            <option value="">Medium</option>
            <option value="">Large</option>
          </select>
          <input type="number" value="1" />
          <a  href="" class="btn" onclick="addtocart(item1)">Add To Cart</a>
          <h3>Product Details <i class="fa fa-indent"></i></h3>
          <br />
          <p>
            Give your summer wardrobe a style upgrade with the HRX Men's Active
            T-shirt. Team it with a pair of shorts for your morning workout or a
            denims for an evening out with the guys
          </p>
        </div>
      </div>
    </div>
    
    

    <!-- -----------title--------------- -->
    <div class="small-container">
      <div class="row row-2">
        <h2>Related Products</h2>
        <p>View more</p>
      </div>
    </div>

    <!-- ----------Products---------------- -->
    <div class="small-container">
      <div class="row">
        <div class="col-4">
          <img src="images/product-9.jpg" alt="product-1" />
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
          <img src="images/product-10.jpg" alt="product-1" />
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
          <img src="images/product-11.jpg" alt="product-1" />
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
          <img src="images/product-12.jpg" alt="product-1" />
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
        <hr />
        <p class="copyright">&copy;Copyright 2024 - FAISHOnova</p>
      </div>
    </div>
  </body>
</html>