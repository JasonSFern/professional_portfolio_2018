@extends('layout')

@section('content')

  <title>Web Design</title>
</head>

<body>

<div class="desktop">
<?php foreach($websites as $website): ?>
  <section id="s<?php echo $website->id ?>" class="background-projects" style="background-image:url(<?php echo $website->background ?>);">
    <div class="wrapper-content wrapper-cards">

      <div id="b<?php echo $website->id ?>">
        <img src="<?php echo $website->photo ?>"/>
      </div>

      <div id="a<?php echo $website->id ?>">
        <img src="<?php echo $website->logo ?>"/>
      </div>


      <div class="projects-card" id="c<?php echo $website->id ?>" style="background-image: linear-gradient(to bottom right,<?php echo $website->backdrop ?>);">

        <div class="titles">
          <h4><?php echo $website->title ?></h4>
          <h2><?php echo $website->subtitle ?></h2>
          <br>
          <br>
        </div>

        <div>
          <div>
            <a class="button" href="/webProjects/{{ $website->id }}">EXPLORE</a>
          </div>
        </div>

      </div>

    </div>
  </section>
<?php endforeach; ?>
</div>

<div class="desktop projects-list">

  <ul>
    <?php foreach($websites as $website): ?>
      <li><a id="n<?php echo $website->id ?>" href="javascript:void(0)" class="projects-list-entries"><?php echo $website->title ?></a></li>
    <?php endforeach; ?>
  </ul>

</div>

</section>


<?php foreach($websites as $website): ?>
<section class="mobile">

<div class="card-mobile" style="background-image: linear-gradient(to bottom right,<?php echo $website->backdrop ?>);">
  <div class="">
    <h4><?php echo $website->title ?></h4>
    <h2><?php echo $website->subtitle ?></h2>
    <img src="<?php echo $website->photo ?>"/>
    <img class="logo" src="<?php echo $website->logo ?>"/>
    <div class="bottom">
      <a class="button" href="/webProjects/{{ $website->id }}">EXPLORE</a>
    </div>
  </div>
</div>

</section>
<?php endforeach; ?>

@endsection
