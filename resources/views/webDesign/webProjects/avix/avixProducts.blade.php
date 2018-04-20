@extends('webDesign.webProjects.avix.avixlayout')

@section('content')

    <title>Products</title>

</head>

<body>


<!-- HEADER, DESKTOP NAVIGATION -->
<header>

<div class="wrapper desktop-nav">

  <a href="./index.html" class="logo floatleft"></a>

  <ul>
      <li><a href="/avix/about">ABOUT AVIX</a></li>
      <li><a href="/avix/products">PRODUCTS</a></li>
      <li><a href="/avix/contact">CONTACT US</a></li>
  </ul>

</div>


<!-- HEADER, MOBILE NAVIGATION -->
<div class="wrapper mobile-nav">

  <a href="./index.html" class="logo floatleft"></a>

  <nav role='navigation'>
      <div class="menu-toggle">

      <input type="checkbox">
          <span></span>
          <span></span>
          <span></span>
      </input>

      <ul class="menu">
          <a href="/avix/about"><li>About AVIX</li></a>
          <a href="/avix/products"><li>Products</li></a>
          <a href="/avix/contact"><li>Contact Us</li></a>
      </ul>

      </div>
  </nav>
</div>

</header>


<!-- PRODUCT WELCOME, DESKTOP AND MOBILE NAVIGATION -->
<body>

<div class= "product-int-container">

<div class="history-text-container">
    <h3 class="aligncenter">Three distinct choices to compliment your lifestyle</h3>
</div>

</div>


<!-- PRODUCT, DESKTOP NAVIGATION -->

<div class="desktop-nav">
<div class="product-container">

    <div class="product-text-container">
        <h2 class="aligncenter">Air Crafts</h2>
    </div>

    <div class="product-text-container-l">
        <div>

            <div class="product-card">
                <img class="float-left image-circle" src="../img/ship.jpg">
                <h3>Air Yacht</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="product-card">
                <img class="float-left image-circle" src="../img/jet.jpg">
                <h3>Private Jet</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="product-card">
                <img class="float-left image-circle" src="../img/personalp.jpg">
                <h3>Personal Flyer</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

        </div>
    </div>

</div>
</div>


<!-- PRODUCT, MOBILE NAVIGATION -->
<div class="mobile-nav aligncenter">
<div class="product-container">

    <div class="product-text-container">
        <h2>Air Crafts</h2>
    </div>

    <div>

        <div class="product-card">
            <img class="image-circle" src="../img/ship.jpg">
            <h3>Air Yacht</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="product-card">
            <img class="image-circle" src="../img/jet.jpg">
            <h3>Private Jet</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

        <div class="product-card">
            <img class="image-circle" src="../img/personalp.jpg">
            <h3>Personal Flyer</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>

    </div>

</div>
</div>


<!-- HALO, DESKTOP NAVIGATION -->
<div class="halo-overlay desktop-nav">
<div class="halo-container">

    <div class="halo-text-container">
        <h2 class="alignright">ARRIVAL: HALO</h2>
    </div>

    <div class="halo-text-container">
        <h3>The most advanced ship in it's class</h3>
        <h1>COMING 01.12.2018</h1>
        <br>
        <br>
    </div>

</div>
</div>


<!-- HALO, MOBILE NAVIGATION -->
<div class="mobile-nav">
<div class="halo-container">

    <div class="halo-text-container">
        <h2 class="alignright">ARRIVAL: HALO</h2>
    </div>

    <div class="halo-text-container">
        <h3>The most advanced ship in it's class</h3>
        <h1>COMING 01.12.2018</h1>
    </div>

</div>
</div>

</body>
<!-- FOOTER, DESKTOP NAVIGATION -->
<footer>
<div class="desktop-nav row">

<div class="col-12 col-md-2">
    <a href="../index.html" class="logo floatleft"></a>
</div>

<div class="col-12 col-md-9">
    <div class=row>

        <div class="col-12 col-md-3">
            <li><a href="../page1/index.html"><h1>About Avix</h1></a></li>
        </div>

        <div class="col-12 col-md-3">
              <li><a href="./index.html"><h1>Products</h1></a></li>
        </div>

        <div class="col-12 col-md-3">
            <li><a href="../page3/index.html"><h1>Contact Us</h1></a></li>
        </div>

        <div class="col-12 col-md-3">
            <ul class='social-icons'>
                <li><a href='#'><i class="fa fa-facebook-official fa-3x" aria-hidden="true"></i></a></li>
                <li><a href='#'><i class="fa fa-twitter fa-3x" aria-hidden="true"></i></a></li>
                <li><a href='#'><i class="fa fa-youtube fa-3x" aria-hidden="true"></i></a></li>
                <li><a href='#'><i class="fa fa-instagram fa-3x" aria-hidden="true"></i></a></li>
            </ul>
        </div>

    </div>
</div>

</div>


<!-- FOOTER, MOBILE NAVIGATION -->
<div class=mobile-nav>

<section>
    <a href="../index.html" class="logo floatleft"></a>
</section>

<br>
<br>
<br>
<br>

<div>

    <div class="button-spacer">
        <a href="../page1/index.html" class= "button-footer">ABOUT AVIX</a>
    </div>

    <div class="button-spacer">
        <a href="./index.html" class= "button-footer">PRODUCTS</a>
    </div>

    <div class="button-spacer">
        <a href="../page3/index.html" class= "button-footer">CONTACT US</a>
    </div>

    <div class="button-spacer">
        <ul class='social-icons-footer'>
              <li><a href='#'><i class="fa fa-facebook-official fa-5x" aria-hidden="true"></i></a></li>
              <li><a href='#'><i class="fa fa-twitter fa-5x" aria-hidden="true"></i></a></li>
              <li><a href='#'><i class="fa fa-youtube fa-5x" aria-hidden="true"></i></a></li>
              <li><a href='#'><i class="fa fa-instagram fa-5x" aria-hidden="true"></i></a></li>
        </ul>
    </div>


</div>

</div>
</footer>


@endsection
