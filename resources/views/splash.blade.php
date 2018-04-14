@extends('layout')

@section('content')

        <title>Welcome</title>
      </head>

<body class="splash-background" id="bkg">

<div class="">
<div class="logo-container">
  <div class="card">
    <div class="card3">
      <div class="card2"></div>
    </div>
  </div>
</div>

<div class="logo-container" style="color:White; text-align:center; margin:0;">
  <p>Hi, my name is Jason. I am a<p>
  <p class="textswap" data-period="2000" data-type='[ "Graphic Designer.", "Web Developer.", "SEO Expert", "Entrepreneur" ]'></p>
  <p>based in Calgary, AB</p>
</div>
</div>

    <a href="/graphicProjects" class="navItem navItemNewsBlog splash-adjust">
      <span class="text">
        <h2>GRAPHICS</h2>
      </span>
    </a>


    <!-- <a href="/graphicd" class="navItem navItemNewsBlog">
      <span class="text">

        <><a href=""><i class="far fa-file fa-3x"></i></i></a>
        <a href=""><i class="fab fa-linkedin fa-3x"></i></a>
        <a href=""><i class="fab fa-tumblr-square fa-3x"></i></a>
        <a href=""><i class="fab fa-flickr fa-3x"></i></a>
        <a href=""><i class="fab fa-instagram fa-3x"></i></a>
        <a href=""><i class="fab fa-blogger fa-3x"></i></a>

      </span>
    </a> -->

    <a href="/contact" class="navItem navItemContact">
      <span class="text">
        <h2>CONTACT</h2>
      </span>
    </a>

    <a href="/webProjects" class="navItem navItemProjects">
      <span class="text">
        <h2>WEB</h2>
      </span>
    </a>


    <a href="/about" class="navItem navItemAbout">
      <span class="text">
        <h2>ABOUT</h2>
      </span>
    </a>

@endsection
