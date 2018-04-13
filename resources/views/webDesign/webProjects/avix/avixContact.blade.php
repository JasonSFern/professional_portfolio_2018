@extends('webDesign.webProjects.avix.avixlayout')

@section('avixContact')

        <title>Contact Us</title>
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


<!-- CONTACT, DESKTOP NAVIGATION -->
    <div class= "desktop-nav contact-overlay">
        <div class="contact-container">

            <div class="contact-text-container">
                <h1>BOOK YOUR</h1>
                <h1>CONSULTATION</h1>
            </div>

            <section>
                <form>

                    <div>
                        <input type="text" class="input-rounded" placeholder="First Name">
                    </div>

                    <div>
                        <input type="text" class="pure-input-rounded" placeholder="Last Name">
                    </div>

                    <div>
                        <input type="text" class="pure-input-rounded" placeholder="Email">
                    </div>

                    <div>
                        <textarea placeholder="Comments"></textarea>
                    </div>

                    <div>
                        <a href="#" class= "button button-desk">SUBMIT</a>
                    </div>

            </form>
          </section>

        </div>
    </div>

<!-- CONTACT, MOBILE NAVIGATION -->

    <div class="mobile-nav contact-overlay">
        <div class="contact-container">

            <div class="hero-text-container-co">
                <h1>BOOK YOUR</h1>
                <h1>CONSULTATION</h1>

                <section>
                  <form>

                    <div>
                      <input type="text" class="input-rounded" placeholder="First Name">
                    </div>

                    <div>
                      <input type="text" class="pure-input-rounded" placeholder="Last Name">
                    </div>

                    <div>
                      <input type="text" class="pure-input-rounded" placeholder="Email">
                    </div>

                    <div>
                      <textarea placeholder="Comments"></textarea>
                    </div>

                    <div>
                      <a href="#" class= "button">SUBMIT</a>
                    </div>

                  </form>
                </section>

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
                      <li><a href="index.html"><h1>Contact Us</h1></a></li>
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
                    <a href="index.html" class= "button-footer">CONTACT US</a>
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
