@extends('layout')

@section('content')

  <title><?php echo $graphics->title ?></title>
</head>

<body class="project-expanded" style="background-image:url({{ $graphics->background }});">

<section>

    <div class="project-card-expanded" style="background-image: linear-gradient(to bottom right,{{ $graphics->backdrop }});">
      <div class="project-titles-expanded">
        <h4><?php echo $graphics->title ?></h4>
        <h2><?php echo $graphics->subtitle ?></h2>
      </div>

      <div class="project-paragraph-expanded">
        <p><?php echo $graphics->contents ?></p>
      </div>

      <!-- <div class="desktop photo-slider"> -->

      <!-- <ul class="photo-slider-nav">
        <li class="button button-graphic"><a id="prev" class="photo-slider-link" href="#">Prev</a></li>
        <li class="button button-graphic"><a id="next" class="photo-slider-link" href="#">Next</a></li>
      </ul>

      <ul class="photo-slider-wrapper">
        <li class="photo-slider-entry"><img src="{{ $graphics->photo }}" alt=""/></li>
        <li class="photo-slider-entry"><img src="{{ $graphics->photo2 }}" alt=""/></li>
        <li class="photo-slider-entry"><img src="{{ $graphics->photo3 }}" alt=""/></li>
        <li class="photo-slider-entry"><img src="{{ $graphics->photo4 }}" alt=""/></li>
      </ul> -->

    <!-- </div> -->

    <div class="photo-slider-mobile">
      <img src="{{ $graphics->photo }}" alt=""/></li>
      <img src="{{ $graphics->photo2 }}" alt=""/></li>
      <img src="{{ $graphics->photo3 }}" alt=""/></li>
      <img src="{{ $graphics->photo4 }}" alt=""/></li>
    </div>

  </div>

</section>

@endsection
