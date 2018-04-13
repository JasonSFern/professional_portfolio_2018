@extends('layout')

@section('webd')

  <title>Web Design</title>
</head>

<body>


            <h4><?php echo $websites->title ?></h4>
            <h2><?php echo $websites->subtitle ?></h2>
              <p><?php echo $websites->content ?></p>

              <div>
                <a class="butn cardb" href="{{ $websites->route }}">EXPLORE</a>
              </div>
@endsection
