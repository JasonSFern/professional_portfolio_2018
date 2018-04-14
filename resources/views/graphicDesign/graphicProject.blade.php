@extends('layout')

@section('content')

<title>Graphic Design</title>
</head>

<body class="expanded-project" style="background-image:url({{ $graphics->background }});">

<section>

    <div class="expanded-card" style="background-image: linear-gradient(to bottom right,{{ $graphics->backdrop }});">
      <div class="titles-expanded">
        <h4><?php echo $graphics->title ?></h4>
        <h2><?php echo $graphics->subtitle ?></h2>
      </div>

      <div class="expanded-paragraph">
        <p><?php echo $graphics->contents ?></p>
      </div>

      <div class="photo-slider">

      <ul class="photo-slidernav">
        <li class="butn expanded-b"><a id="prev" class="photo-slider-link" href="#">Prev</a></li>
        <li class="butn expanded-b"><a id="next" class="photo-slider-link" href="#">Next</a></li>
      </ul>

      <ul class="photo-slider-wrapper">
        <li class="photo-slider-entry"><img src="{{ $graphics->photo }}" alt=""/></li>
        <li class="photo-slider-entry"><img src="{{ $graphics->photo2 }}" alt=""/></li>
        <li class="photo-slider-entry"><img src="{{ $graphics->photo3 }}" alt=""/></li>
        <li class="photo-slider-entry"><img src="{{ $graphics->photo4 }}" alt=""/></li>
      </ul>

    </div>
  </div>

</section>

@endsection
