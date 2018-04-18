@extends('layout')

@section('content')

<body class="splash-background">

<a href="/" class="navItem navItemback-l desktop">
	<span class="text navlink">
		<h2>E</h2>
		<h2>M</h2>
		<h2>O</h2>
		<h2>H</h2>
	</span>
</a>


<!-- <div class="container"> -->
	<!-- <h2 class="mb-2 text-center">Contact Us</h2> -->

<div class="row contact">

	<div class="col desktop">
		<div class="question-box-l">
		<!-- <h4>How much do you charge for a website?</h4> -->
		</br>
		</div>
	</div>

	@if(session('message'))
	<div class='alert alert-success'>
		{{ session('message') }}
	</div>
	@endif


	<div id="form" class="col text-center contact-form">

		<h4>Contact</h4>

		<form class="form-horizontal" method="POST" action="/contact">
			{{ csrf_field() }}
		<div class="form-group">
			<br/>
			<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
				<input type="text" id="name" placeholder="Your Name"/>
			</div>
		</div>

		<div class="form-group">
       <br />
       <div class="input-group">
          <div class="input-group-addon"><i class="fas fa-at"></i></i></div>
          <input type="email" id="email" placeholder="Your Email"/>
          </div>
       </div>

		<div class="form-group">
			 <br />
			 <div class="input-group">
					<div class="input-group-addon"><i class="fas fa-edit" aria-hidden="true"></i></div>
					<textarea type="email" id="message" placeholder="Your Message"></textarea>
					</div>
			 </div>

				<button type="submit" class="butn-blue">Send</button>
		 </form>
	</div>

	<div class="col question desktop">
		<div class="question-box-r">
			<br>
		<!-- <h4>How much do you charge for a website?</h4> -->
		</div>
	</div>

</div>
<!-- </div> -->
      <!-- <title>Contact</title>
    </head>

<body style="background-color:black;">
<h1>Hi, my name is Jason. I am a<h1>
<h1 class="textswap" data-period="2000" data-type='[ "Graphic Designer.", "Web Developer.", "SEO Expert", "Entrepreneur", "Hi Jason, How much do you charge for a website?" ]'></h1>
<h1>based in Calgary, AB</h1> -->

@endsection
