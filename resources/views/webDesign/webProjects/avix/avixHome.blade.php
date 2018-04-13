@extends('webDesign.webProjects.avix.avixlayout')

@section('avixHome')

  <title>Welcome to AVIX</title>

</head>


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


<!-- HERO, DESKTOP NAVIGATION -->
<div class= "hero-overlay desktop-nav">
  <div class="hero">

      <div class="hero-text-container">
          <h1>INTRODUCING</h1>
          <h1>FLIGHT...</h1>
      </div>

      <section class="hero-text-container-2">
          <h2 class="floatleft">REDEFINED</h2>
      </section>

  </div>
</div>


<!-- HERO, MOBILE NAVIGATION -->
<div class="mobile-nav">
  <div class="hero">

      <div class="hero-text-container">
          <h1>INTRODUCING</h1>
          <h1>FLIGHT...</h1>
      </div>

      <div class="hero-text-container-2">
          <h2 class="alignleft">REDEFINED</h2>
      </div>

  </div>
</div>


<!-- QUOTE, DESKTOP NAVIGATION -->
<div class= "desktop-nav cloud-overlay quote-container">

<div class="quote-text-container">
    <h3>"Since the dawn of man, it has been a dream to fly. But now that we have achieved that, it is time to expand our horizons, and innovate where no one else has before."</h3>
</div>

<div class="quote-text-container">

    <div>
      <h4 class="alignright">Jason Fernandes</h4>
      <h4 class="alignright">Founder and CEO</h4>
    </div>

</div>
</div>


<!-- QUOTE, MOBILE NAVIGATION -->
<div class="mobile-nav">
<div class="quote-container">

    <div class="quote-text-container">
        <h3>"Since the dawn of man, it has been a dream to fly. But now that we have achieved that, it is time to expand our horizons, and innovate where no one else has before."</h3>
    </div>

    <div class="spacer">
        <div class="quote-text-container">
            <h4 class="alignright">Jason Fernandes</h4>
            <h4 class="alignright">Founder and CEO</h4>
        </div>
    </div>

</div>
</div>


<!-- FLAGSHIP, DESKTOP NAVIGATION -->
<div class="flagship-overlay desktop-nav ">
<div class="flagship-container">

    <div class="flagship-text-container">
        <h2 class="alignright">INDULGE IN LUXURY</h2>
    </div>

    <div class="flagship-text-container">
        <h4>in PEACE...</h4>
        <br>
        <h4>in COMFORT...</h4>
        <br>
        <h4>in SERENITY...</h4>
        <br>
    </div>

</div>
</div>


<!-- FLAGSHIP, MOBILE NAVIGATION -->
<div class="mobile-nav">
<div class="flagship-container">

    <div class="flagship-text-container">
        <h2 class="alignright">INDULGE IN LUXURY</h2>
    </div>

    <div class="flagship-text-container">
        <h4>in PEACE...</h4>
        <br>
        <h4>in COMFORT...</h4>
        <br>
        <h4>in SERENITY...</h4>
    </div>

</div>
</div>


<!-- FLAGSHIP FROSTED GLASS, DESKTOP NAVIGATION -->
<section class="desktop-nav frosted-effect">
<div class="aligncenter frosted-glass">

    <h2>Our Airships</h2>
    <div class="frosted-glass-text">
        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
    </div>
    <br>
    <br>
    <a href="./page2/index.html" class="button">EXPLORE</a>

</div>
</section>


<!-- FLAGSHIP GRADIENT, MOBILE NAVIGATION -->

<section class="mobile-nav">

<div class="aligncenter gradient">

    <h2>Our Airships</h2>

    <div class="frosted-glass-text">
        <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h3>
    </div>
    <br>
    <br>
    <a href="./page2/index.html" class= "button">EXPLORE</a>

</div>
</section>


<!-- CONTACT, DESKTOP AND MOBILE NAVIGATION -->
<div class="contact-c2a">
<div class="contact-c2a-container">

    <div class="aligncenter contact-c2a-text-container">
        <h1>Contact Us</h1>
        <br>
        <br>
        <br>
        <a href="./page3/index.html" class= "button button-big"><i class="fa fa-envelope fa-5x" aria-hidden="true"></i></a>
    </div>
</div>
</div>

</body>


<!-- FOOTER, DESKTOP NAVIGATION -->
<footer>
<div class="desktop-nav row">

<div class="col-12 col-md-2">
    <a href="./index.html" class="logo floatleft"></a>
</div>

<div class="col-12 col-md-9">
    <div class=row>

        <div class="col-12 col-md-3">
            <li><a href="./page1/index.html"><h1>About Avix</h1></a></li>
        </div>

        <div class="col-12 col-md-3">
            <li><a href="./page2/index.html"><h1>Products</h1></a></li>
        </div>

        <div class="col-12 col-md-3">
            <li><a href="./page3/index.html"><h1>Contact Us</h1></a></li>
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
    <a href="./index.html" class="logo floatleft"></a>
</section>

<br>
<br>
<br>
<br>

<div>

    <div class="button-spacer">
        <a href="./page1/index.html" class= "button-footer">ABOUT AVIX</a>
    </div>

    <div class="button-spacer">
        <a href="./page2/index.html" class= "button-footer">PRODUCTS</a>
    </div>

    <div class="button-spacer">
        <a href="./page3/index.html" class= "button-footer">CONTACT US</a>
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
