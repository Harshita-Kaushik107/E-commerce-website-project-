<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Promotions and Discounts</title>
<link rel="shortcut icon" type="x-icon" href="https://cdn3.vectorstock.com/i/1000x1000/17/07/discount-offer-tag-icon-shopping-coupon-symbol-vector-22621707.jpg">
<link rel="stylesheet" href="discount.css">
<link rel="stylesheet" href="index.css">
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
  <header>
    <h1>Promotions and Discounts</h1>
  </header>
  <main>
    <section class="promo">
      <div class="promo-item">
        <img src="http://www.freeiconspng.com/uploads/20-off-png-30.png" alt="Promotion 1">
        <h2>Special Offer</h2>
        <p>Get 20% off on selected items. Use code <strong>SAVE20</strong> at checkout.</p>
        <a href="#" class="btn">View Deals</a>
      </div>
      <div class="promo-item">
        <img src="https://thumbs.dreamstime.com/b/half-price-everything-limited-time-offer-hurry-up-off-sale-banner-design-vector-template-198526154.jpg" alt="Promotion 2">
        <h2>Flash Sale</h2>
        <p>Hurry! Limited time offer. Up to 50% off on all products.</p>
        <a href="#" class="btn">View Deals</a>
      </div>
      <div class="promo-item">
        <img src="https://static.vecteezy.com/system/resources/previews/002/463/867/original/buy-1-get-1-free-sale-banner-template-offer-promotion-for-retail-free-vector.jpg" alt="Promotion 3">
        <h2>Flash Sale</h2>
        <p>Buy one, get one free! Limited time offer.</p>
        <a href="#" class="btn">View Deals</a>
      </div>
      <div class="promo-item">
        <img src="https://viperscaleracing.com/wp-content/uploads/2023/07/20230707_093411.jpg" alt="Promotion 4">
        <h2>Flash Sale</h2>
        <p>Enjoy free shipping on orders over $50. No code needed.</p>
        <a href="#" class="btn">View Deals</a>
      </div>
      <div class="promo-item">
        <img src="https://i.pinimg.com/736x/a0/cb/e2/a0cbe2a8c87d922512d3e18845e821d3.jpg" alt="Promotion 5">
        <h2>Flash Sale</h2>
        <p>Holiday sale! Save 30% on selected products.</p>
        <a href="#" class="btn">View Deals</a>
      </div>
      <div class="promo-item">
        <img src="https://i.pinimg.com/736x/e8/d1/fc/e8d1fc41833bf0d395d9abbcb3f315ea.jpg" alt="Promotion 6">
        <h2>Flash Sale</h2>
        <p>Buy a bundle and save! Get 15% off when you purchase 3 or more items together.</p>
        <a href="#" class="btn">View Deals</a>
      </div>
      <div class="promo-item">
        <img src="http://www.freestufffinder.com/wp-content/uploads/2015/09/Screen-Shot-2015-09-30-at-7.52.06-AM.png" alt="Promotion 7">
        <h2>Flash Sale</h2>
        <p>Flash sale alert! Up to 50% off for 24 hours only.</p>
        <a href="#" class="btn">View Deals</a>
      </div>
      <div class="promo-item">
        <img src="https://3.bp.blogspot.com/-TGvoDLpfnlc/XEs9yafyR8I/AAAAAAAAAEY/tP5cWnV5dwUdDkQ8NGyV2dleWOwO7zqGQCLcBGAs/s1600/Student%2Bdiscount.jpg" alt="Promotion 8">
        <h2>Flash Sale</h2>
        <p>Calling all students! Enjoy 15% off with your student ID.</p>
        <a href="#" class="btn">View Deals</a>
      </div>
      <div class="promo-item">
        <img src="https://c8.alamy.com/comp/EMC7YT/special-discount-10-off-stamp-EMC7YT.jpg" alt="Promotion 9">
        <h2>Flash Sale</h2>
        <p>Welcome to our store! New customers get 10% off their first purchase.</p>
        <a href="#" class="btn">View Deals</a>
      </div>
      <div class="promo-item">
        <img src="https://i.pinimg.com/originals/19/53/ef/1953efc5da033be4114810dd6c675120.png" alt="Promotion 10">
        <h2>Flash Sale</h2>
        <p>Spring savings! Take 25% off all spring collection items.</p>
        <a href="#" class="btn">View Deals</a>
      </div>
      <div class="promo-item">
        <img src="https://yashus.in/wp-content/uploads/2020/07/refer-a-friend.jpg" alt="Promotion 11">
        <h2>Flash Sale</h2>
        <p>Refer a friend and get $10 off your next order. Your friend gets $10 off too!</p>
        <a href="#" class="btn">View Deals</a>
      </div>
       <div class="promo-item">
        <img src="https://static.vecteezy.com/system/resources/previews/002/463/867/original/buy-1-get-1-free-sale-banner-template-offer-promotion-for-retail-free-vector.jpg" alt="Promotion 11">
        <h2>Flash Sale</h2>
        <p>Buy one, get one free! Limited time offer.</p>
        <a href="#" class="btn">View Deals</a>
      </div>
    </section>
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
