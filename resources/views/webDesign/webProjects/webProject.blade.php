@extends('layout')

@section('content')

  <title>Web Design</title>
</head>

<body class="expanded-project" style="background-image:url({{ $websites->background }});">

<section>

    <div class="expanded-card" style="background-image: linear-gradient(to bottom right,{{ $websites->backdrop }});">
      <div class="titles-expanded">
        <h4><?php echo $websites->title ?></h4>
        <h2><?php echo $websites->subtitle ?></h2>
      </div>

      <div class="expanded-paragraph">
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
          <li class="butn expanded-b"><a href="{{ $websites->local_route }}">Launch Avix</a></li>
        </ul>

      </div>
    </div>

</section>

@endsection
