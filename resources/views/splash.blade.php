@extends('layout')

@section('content')

  <title>Welcome</title>
</head>

<body class="background-splash" id="bkg">

<div class="desktop">
<div class="logo-container">

  <h4>Hi, my name is</h4>
  <h4>Jason</h4>

  <br>
  <br>

  <div class="layer1">
    <div class="layer2">
      <div class="layer3"></div>
    </div>
  </div>

  <br>
  <br>

  <div class="" style="color:White; text-align:center; margin:10px 0px 0px 0px;">
    <span class="typewriter" data-period="2000" data-type='[ "Graphic Designer", "Web Developer", "SEO Expert", "Entrepreneur" ]'>
  </div>

</div>

  <a href="/graphicProjects" class="navigation graphics">
    <span class="text link">
      <h2>G</h2>
      <h2>R</h2>
      <h2>A</h2>
      <h2>P</h2>
      <h2>H</h2>
      <h2>I</h2>
      <h2>C</h2>
      <h2>S</h2>
    </span>
  </a>

  <a href="/contact" class="navigation contact">
    <span class="text link">
      <h2>T</h2>
      <h2>C</h2>
      <h2>A</h2>
      <h2>T</h2>
      <h2>N</h2>
      <h2>O</h2>
      <h2>C</h2>
    </span>
  </a>

  <a href="/webProjects" class="navigation websites">
    <span class="text link">
      <h2>W</h2>
      <h2>E</h2>
      <h2>B</h2>
    </span>
  </a>


  <a href="/about" class="navigation about">
    <span class="text link">
      <h2>A</h2>
      <h2>B</h2>
      <h2>O</h2>
      <h2>U</h2>
      <h2>T</h2>
    </span>
  </a>

</div>
</div>

<div class="mobile logo-container-mobile">

  <h4>Hi, my name is</h4>
  <h4>Jason</h4>

  <br>
  <br>

  <div class="layer1">
    <div class="layer2">
      <div class="layer3"></div>
    </div>
  </div>

  <br>
  <br>

  <div class="" style="color:White; text-align:center; margin:10px 0px 0px 0px;">
    <span class="typewriter" data-period="2000" data-type='[ "Graphic Designer", "Web Developer", "SEO Expert", "Entrepreneur" ]'>
  </div>

  <br>

  <div class="links-mobile">
    <a href="/graphicProjects" class="mobile"><h4>GRAPHICS</h4></a>
      <div class="divider"></div>
    <a href="/webProjects" class="mobile"><h4>WEB</h4></a>
      <div class="divider"></div>
    <a href="/about" class="mobile"><h4>ABOUT</h4></a>
      <div class="divider"></div>
    <a href="/contact" class="mobile"><h4>CONTACT</h4></a>
  </div>

</div>

@endsection
