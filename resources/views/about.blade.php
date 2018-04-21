@extends('layout')

@section('content')

	<title>About ME</title>
</head>

<body class="background-about" id="bkg">

<div class="desktop">
	<a href="/" class="navigation back-right">
		<span class="text link">
			<h2>H</h2>
			<h2>O</h2>
			<h2>M</h2>
			<h2>E</h2>
		</span>
	</a>

	<div class="about-header">
	  <h4>Hello</h4>
		<h3 style="font-size:60px;">My Name is Jason Fernandes</h3>
		<br>
	</div>

	<div class="">
	  <div class="about-body">
			<h2>I am a Calgary based graphics artist and web designer. I specialize in creating fun and engaging user experiences for my clients. I understand how a clean and attractive user experience is key to promoting your visibly, and I can create that experience. Whether you are a small business, a larger organization, or even just a person who wants to promote yourself, you cannot deny the importance of proving your target audience with the user experience they deserve.</h2>
			<br>
			<h2>If you have any projects you wish to collaborate on or are an employer who wished to hire me for a project you can contact me by sending me a message or connecting with me on LinkedIn. </h2>
			<br>
			<a class="button button-blue" href="/contact">CONTACT</a>
			<a class="button button-blue" href="https://www.linkedin.com/in/jsfernandes83/"><i class="fab fa-linkedin"></i></a>
	  </div>
	</div>
</div>

<div class="mobile">
	<div class="row contact-container">
		<div id="form" class="col text-center contact-form">
			<h3 style="color:white;font-size:60px">Hello</h3>
			<h4 style="color:#00ace6;font-size:40px;">My Name is Jason</h4>
			<img style="max-width:80%;margin-bottom:20px;" src="/img/aboutmo.jpg">
			<h2>I am a Calgary based graphics artist and web designer. I specialize in creating fun and engaging user experiences for my clients. I understand how a clean and attractive user experience is key to promoting your visibly, and I can create that experience. Whether you are a small business, a larger organization, or even just a person who wants to promote yourself, you cannot deny the importance of proving your target audience with the user experience they deserve.</h2>
			<br>
			<h2>If you have any projects you wish to collaborate on or are an employer who wished to hire me for a project you can contact me by sending me a message or connecting with me on LinkedIn. </h2>
			<br>
				<a class="button button-blue" href="/contact">CONTACT</a>
				<a class="button button-blue" href="https://www.linkedin.com/in/jsfernandes83/"><i class="fab fa-linkedin"></i></a>
			</div>
		</div>
	</div>
</div>

</div>

@endsection
