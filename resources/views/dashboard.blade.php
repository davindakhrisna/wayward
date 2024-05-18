<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>WayWard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/bundle.css" />
    <link rel="stylesheet" href="css/product-items.css" />
  </head>
  <body>
    <section>
      <header>
        <input type="checkbox" name="" id="toggler" />
        <label for="toggler" class="fas fa-bars"></label>
        <a href="" class="logo"><img src="img/Logo.png" alt="" /></a>
        <nav class="navbar">
          <a href="homepage.html" class="page-in">Home</a>
          <a href="product.html">Product</a>
          <a href="cart.html">My Cart</a>
          <a href="#" class="a-orange" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
            <form id="logout-form" method="POST" action="{{ route('logout') }}" style="display: none;">
                @csrf
            </form>
          <div class="user-profile">
            <p>Username</p>
            <i class="fa-solid fa-user"></i>
          </div>
        </nav>
      </header>
    </section>

    <section class="jumbotron">
      <div class="jumbotron-content">
        <div class="jumbotron-text">
          <h1>Wayward</h1>
          <p>
            Wayward is an e-commerce platform offering collections of thrifted clothing. From trendy tops to iconic vintage denim, Wayward provides a delightful shopping experience for fashion enthusiasts seeking distinct and sustainable
            choices. With a focus on diversity and individuality, Wayward invites its customers to discover clothing that allows them to express themselves with authentic and memorable style.
          </p>
        </div>
        <div class="jumbotron-search">
          <input type="text" placeholder="I want to find . . ." />
          <button><i class="fa-solid fa-magnifying-glass"></i></button>
        </div>
      </div>
    </section>

    <section class="product">
      <h2>Newest Products</h2>
      <div class="product-container">
        <div class="product-content">
          <div class="product-img">
            <img src="img/product/10851775_0.jpg" alt="" />
            <h4>Product</h4>
            <p class="price">Rp. 50.000</p>
            <p>Bag</p>
            <p>One Size</p>
          </div>
        </div>
        <div class="product-content">
          <div class="product-img">
            <img src="img/product/12789775_4.jpg" alt="" />
            <h4>Product</h4>
            <p class="price">Rp. 50.000</p>
            <p>Bag</p>
            <p>One Size</p>
          </div>
        </div>
        <div class="product-content">
          <div class="product-img">
            <img src="img/product/13594475_0.jpg" alt="" />
            <h4>Product</h4>
            <p class="price">Rp. 50.000</p>
            <p>Bag</p>
            <p>One Size</p>
          </div>
        </div>
        <div class="product-content">
          <div class="product-img">
            <img src="img/product/14370899_0.jpg" alt="" />
            <h4>Product</h4>
            <p class="price">Rp. 50.000</p>
            <p>Bag</p>
            <p>One Size</p>
          </div>
        </div>
      </div>
    </section>

    <section class="about">
      <div class="about-container">
        <div class="about-content top">
          <i class="fa-solid fa-hand-holding-dollar"></i>
          <h3>Affordable Products</h3>
          <p>In our store, you'll discover a collection of high-quality fashion items at affordable prices.</p>
        </div>
        <div class="about-content bottom">
          <i class="fa-solid fa-star"></i>
          <h3>Good Quality</h3>
          <p>We prioritize good product quality, ensuring each purchase is a worthwhile investment.</p>
        </div>
        <div class="about-content top">
          <i class="fa-solid fa-people-arrows"></i>
          <h3>Best Customer Service</h3>
          <p>Our friendly and responsive customer service will make your shopping experience enjoyable.</p>
        </div>
      </div>
    </section>

    <section class="footer">
      <div class="footer-container">
        <div class="footer-content">
          <p class="header-footer">Wayward</p>
          <p class="text-footer">Wayward: Unique thrifted fashion blending modern with retro for sustainability. <span>Thrift with a Twist, Style with Purpose.</span></p>
        </div>
        <div class="footer-content">
          <p class="header-footer">location</p>
          <a href="https://goo.gl/maps/jCyYfdPkaFruz9Hf8">Jl. DI Panjaitan No.128, Karangreja, Purwokerto Kulon, Kec. Purwokerto Sel., Kabupaten Banyumas, Jawa Tengah 53141</a>
        </div>
        <div class="footer-content">
          <p class="header-footer">our info</p>
          <a href="#"><i class="fa-solid fa-phone"></i>+6285879334272</a>
          <a href="#" style="text-transform: none"><i class="fa-solid fa-envelope"></i>wayward@gmail.com</a>
          <a href="https://instagram.com/aiachaell?igshid=YTQwZjQ0NmI0OA=="><i class="fa-brands fa-instagram"></i>instagram</a>
          <a href="https://goo.gl/maps/jCyYfdPkaFruz9Hf8"><i class="fa-brands fa-whatsapp"></i>whatsapp</a>
        </div>
      </div>
      <div class="credit">&copy; 2024 WayWard. All rights reserved.</div>
    </section>
  </body>
</html>
