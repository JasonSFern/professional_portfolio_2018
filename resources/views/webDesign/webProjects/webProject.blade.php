@extends('layout')

@section('content')

  <title><?php echo $websites->title ?></title>
</head>

<body class="project-expanded" style="background-image:url({{ $websites->background }});">

<section>

    <div class="project-card-expanded" style="background-image: linear-gradient(to bottom right,{{ $websites->backdrop }});">
      <div class="project-titles-expanded">
        <h4><?php echo $websites->title ?></h4>
        <h2><?php echo $websites->subtitle ?></h2>
      </div>

      <div class="project-paragraph-expanded">
        <p><?php echo $websites->contents ?></p>
      </div>

        <br>
        <br>
        <br>

      <div class="photo-slider">

        <ul class="photo-slider-wrapper">
          <li class="photo-slider-entry"><img src="{{ $websites->photo }}" alt=""/></li>
        </ul>

        <ul class="photo-slider-nav">
          <li class="button button-web"><a href="{{ $websites->local_route }}">Launch</a></li>
        </ul>
        <br>
        <br>

      </div>
    </div>

</section>

@endsection
