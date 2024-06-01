<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send a message</title>
    <link rel="shortcut icon" type="x-icon" href="https://tse1.mm.bing.net/th?id=OIP.PnaVT0zFLZ-D9vGMkHEqkQHaGX&pid=Api&P=0&h=180">

    <link rel="stylesheet" href="contactus.css">
    <link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="https://fonts.googleeapis.com/css2?family=Roboto:wght@300;500;700&display=swap">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css">
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
    <section>
  <div id="section-wrapper">
    <div class="box-wrapper">
        <div class="info-wrap">
            <h2 class="info-title">Contact Information </h2>
            <h3 class="info-sub-title">Fill up the form and our team will get back to you with in 24 hours</h3>
            <ul class="info-detail">
                <li>
                <i class="fas fa-phone-alt"></i>
                <span>phone:</span> <a href="tel+123456789">+918123456789</a>
                </li>
                <li>
                    <i class="fas fa-paper-plane"></i>
                    <span>Email:</span> <a href="harshitakaushik702@gmail.com">faishnova@gmail.com</a>
                    </li>
                    <li>
                        <i class="fas fa-globe"></i>
                        <span>Website:</span> <a href="https://FAISHOnova.com">FAISHOnova.com</a>
                    </li>
                    <ul class="social-icons">
                        <li>
                            <a href="#">
                                <i class="fab fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
            </ul>
        </div>
        <div class="form-wrap">
            <form action="#" method="POST">
             <h2 class="form-title">Send a message</h2> 
             <div class="form-field">
                <div class="form-group">
                    <input type="text" placeholder="First name" class="fname">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="Last name" class="lname">
                </div>
                <div class="form-group">
                    <input type="text" placeholder="+91" class="number">
                </div>
                <div class="form-group">
                    <input type="email" placeholder="abc@gmail.com" class="email">
                </div>
                <div class="form-group">
                    <textarea name="message" placeholder="Write your Message"></textarea>
                </div>
             </div>
             <input type="submit" class="submit-button" value="Send Message" onclick="myFunction()">  
            </form>      
          </div>
    </div>
  </div> 
  <script>
    function myFunction() {
      alert("Your response is submitted!!");
    }
  </script>
</section>
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