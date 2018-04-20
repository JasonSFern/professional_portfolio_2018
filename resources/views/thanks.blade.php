@extends('layout')

@section('content')

  <title>Contact</title>
</head>

<body class="background-contact" id="bkg">



<div class="row contact-container">

	<div class="desktop col">
		<div class="question-box-left">
		<!-- <h4>How much do you charge for a website?</h4> -->
		</br>
		</div>
	</div>

	<div id="form" class="col text-center contact-form">

		<h4>Thanks</h4>
    <h2>I will be in touch with you shortly</h2>
    <br>
    <h2 style="font-size:14px;">Re-directing you to the home page</h2>

	</div>

	<div class="col question desktop">
		<div class="question-box-right">
			<br>
		<!-- <h4>How much do you charge for a website?</h4> -->
		</div>
	</div>

  <script>
       var timer = setTimeout(function() {
           window.location='/'
       }, 3000);
   </script>

</div>

@endsection
