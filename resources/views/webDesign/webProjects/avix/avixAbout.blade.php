@extends('webDesign.webProjects.avix.avixlayout')

@section('content')

  <title>About Avix</title>
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

<body>
<!-- HISTORY, DESKTOP NAVIGATION -->
    <div class= "desktop-nav history-container">

        <div class="history-text-container">
            <h3>"In 2008 we started in a small airplane hangar on the south side of San Fransico. Today we have become to leading innovator in luxury air travel. From our airships to our private jets, we make sure that not only do you travel in style, but luxury as well"</h3>
        </div>

    </div>


<!-- HISTORY, MOBILE NAVIGATION -->
    <div class="mobile-nav">
        <div class="history-container">

            <div class="history-text-container">
                  <h3>"Since the dawn of man, it has been a dream to fly. But now that we have achieved that, it is time to expand our horizons, and innovate where no one else has before."</h3>
            </div>

        </div>
    </div>


<!-- FLAGSHIP FROSTED GLASS, DESKTOP NAVIGATION -->
    <section class="desktop-nav frosted-effect">

        <div class="team-container">
            <div class="team-card">
                  <h3>Jason Fernandes</h3>
                  <img class="image-circle" src="../img/sil1.jpg">
                  <h4>Founder and CEO</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <div class="team-card">
             	    <h3>Erika Langdon</h3>
                  <img class="image-circle" src="../img/sil2.jpg">
                  <h4>CMO</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <div class="team-card">
             	    <h3>Sam Amante</h3>
                  <img class="image-circle" src="../img/sil3.jpg">
                  <h4>CSO</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

        </div>
    </section>


<!-- FLAGSHIP GRADIENT, MOBILE NAVIGATION -->
    <section class="mobile-nav frosted-effect">

        <div class="team-container">
            <div class= "team-card">
                  <h3>Jason Fernandes</h3>
                  <img class="team-image-circle" src="../img/sil1.jpg">
                  <h4>Founder and CEO</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <div class= "team-card">
                  <h3>James Furgeson</h3>
                  <img class="team-image-circle" src="../img/sil2.jpg">
                  <h4>CMO</h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

            <div class= "team-card">
                 <h3>Sam Amante</h3>
                 <img class="team-image-circle" src="../img/sil3.jpg">
                 <h4>CSO</h4>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>

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
                 <a href="../page3/index.html" class= "button button-big"><i class="fa fa-envelope fa-5x" aria-hidden="true"></i></a>
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
   				          <li><a href="../page2/index.html"><h1>Products</h1></a></li>
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
                <a href="../page2/index.html" class= "button-footer">PRODUCTS</a>
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
