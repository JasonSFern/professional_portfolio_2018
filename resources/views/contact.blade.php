@extends('layout')

@section('content')

  <title>Contact</title>
</head>

<body class="background-contact" id="bkg">

<div class="desktop">
<a href="/" class="navigation back-left">
	<span class="text link">
		<h2>E</h2>
		<h2>M</h2>
		<h2>O</h2>
		<h2>H</h2>
	</span>
</a>
</div>

<div class="row contact-container">

	<div class="desktop col">
		<div class="question-box-left">
		<h4>How much do you charge for a website?</h4>
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

		<form class="form-horizontal" method="POST" action="https://formspree.io/jsfernandes83@gmail.com">
			{{ csrf_field() }}
		<div class="form-group">
			<br/>
			<div class="input-group">
				<div class="input-group-addon"><i class="fa fa-user" aria-hidden="true"></i></div>
				<input type="text" id="name" name="name" placeholder="Your Name"/>
			</div>
		</div>

		<div class="form-group">
       <br />
       <div class="input-group">
          <div class="input-group-addon"><i class="fas fa-at"></i></i></div>
          <input type="email" id="email" name="_replyto" placeholder="Your Email"/>
          </div>
       </div>

		<div class="form-group">
				<br />
				<div class="input-group">
					<div class="input-group-addon"><i class="far fa-envelope"></i></div>
					<input type="text" name="_subject" placeholder="Your Subject"/>
					</div>
		 </div>

		<div class="form-group">
			 <br />
			 <div class="input-group">
					<div class="input-group-addon"><i class="fas fa-edit" aria-hidden="true"></i></div>
					<textarea type="text" id="message" name="message" placeholder="Your Message"></textarea>
					</div>
			 </div>

			 <input type="hidden" name="_next" value="//site.io/thanks.html" />
			 <input type="text" name="_gotcha" style="display:none" />

				<button type="submit" class="button-blue">Send</button>
		 </form>

		     <div id="map"></div>

	</div>

	<div class="col question desktop">
		<div class="question-box-right">
			<br>
		<h4>How much do you charge for a website?</h4>
		</div>
	</div>

</div>

@endsection
