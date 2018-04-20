@extends('layout')


@section('content')

  <title>Graphics Design</title>
</head>

<body>

<div class="desktop">
<?php foreach($graphics as $graphic): ?>
  <section id="s<?php echo $graphic->id ?>" class="background-projects" style="background-image:url(<?php echo $graphic->background ?>);">
    <div class="wrapper-content wrapper-cards">

      <div id="b<?php echo $graphic->id ?>">
        <img src="<?php echo $graphic->photo ?>"/>
      </div>

      <div id="a<?php echo $graphic->id ?>">
        <img src="<?php echo $graphic->logo ?>"/>
      </div>


      <div class="projects-card" id="c<?php echo $graphic->id ?>" style="background-image: linear-gradient(to bottom right,<?php echo $graphic->backdrop ?>);">

        <div class="titles">
          <h4><?php echo $graphic->title ?></h4>
          <h2><?php echo $graphic->subtitle ?></h2>
          <br>
          <br>
        </div>

        <div>
          <div>
            <a class="button" href="/graphicProjects/{{ $graphic->id }}">EXPLORE</a>
          </div>
        </div>

      </div>

    </div>
  </section>
<?php endforeach; ?>
</div>

<div class="desktop projects-list">

  <ul>
    <?php foreach($graphics as $graphic): ?>
      <li><a id="n<?php echo $graphic->id ?>" href="javascript:void(0)" class="projects-list-entries"><?php echo $graphic->title ?></a></li>
    <?php endforeach; ?>
  </ul>

</div>

</section>


<?php foreach($graphics as $graphic): ?>
<section class="mobile">

<div class="card-mobile" style="background-image: linear-gradient(to bottom right,<?php echo $graphic->backdrop ?>);">
  <div class="">
    <h4><?php echo $graphic->title ?></h4>
    <h2><?php echo $graphic->subtitle ?></h2>
    <img src="<?php echo $graphic->photo ?>"/>
    <img class="logo" src="<?php echo $graphic->logo ?>"/>
    <div class="bottom">
      <a class="button" href="/graphicProjects/{{ $graphic->id }}">EXPLORE</a>
    </div>
  </div>
</div>

</section>
<?php endforeach; ?>


@endsection
