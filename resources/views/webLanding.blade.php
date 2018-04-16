@extends('layout')

@section('content')

  <title>Web Design</title>
</head>

<body>

<?php foreach($websites as $website): ?>
  <section id="s<?php echo $website->id ?>" class="background" style="background-image:url(<?php echo $website->background ?>);">
    <div class="content-wrapper paraWrapper">

      <div class="test1" id="b<?php echo $website->id ?>">
        <img src="<?php echo $website->photo ?>"/>
      </div>

      <div class="test2" id="a<?php echo $website->id ?>">
        <img src="<?php echo $website->logo ?>"/>
      </div>


      <div class="content-card test3" id="c<?php echo $website->id ?>" style="background-image: linear-gradient(to bottom right,<?php echo $website->backdrop ?>);">

        <div class="titles-container">
          <h4><?php echo $website->title ?></h4>
          <h2><?php echo $website->subtitle ?></h2>
          <br>
          <br>
        </div>

        <div>
          <div>
            <a class="butn" href="/webProjects/{{ $website->id }}">EXPLORE</a>
          </div>
        </div>

      </div>

    </div>
  </section>
<?php endforeach; ?>

  <div class="navigation-list">

    <ul>
      <?php foreach($websites as $website): ?>
        <li><a id="n<?php echo $website->id ?>" href="javascript:void(0)" class="navigation-list-entries"><?php echo $website->title ?></a></li>
      <?php endforeach; ?>
    </ul>

  </div>

@endsection
