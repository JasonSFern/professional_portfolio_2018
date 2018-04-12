@extends('layout')

@section('graphicd')

  <title>Graphic Design</title>
</head>

<body>


  <!-- <a href="/webd" class="navItem navItemProjects">
    <span class="text">
      <h2>Graphic</h2>
    </span>
  </a> -->


  <?php foreach($graphics as $graphic): ?>
    <section id="s<?php echo $graphic->id ?>" class="background" style="background-image:url(<?php echo $graphic->background ?>);">
        <div class="content-wrapper paraWrapper">

          <div id="b<?php echo $graphic->id ?>">
            <img src="<?php echo $graphic->photo ?>"/>
          </div>

          <div id="a<?php echo $graphic->id ?>">
            <img src="<?php echo $graphic->logo ?>"/>
          </div>


          <div class="content-card" id="c<?php echo $graphic->id ?>" style="background-image: linear-gradient(to bottom right,<?php echo $graphic->backdrop ?>);">
            <div class="titles-container">
            <h4><?php echo $graphic->title ?></h4>
            <h2><?php echo $graphic->subtitle ?></h2>
            <!-- <div class="content-box-size">
              <p><?php echo $graphic->content ?></p>
            </div> -->
            <br>
            <br>
          </div>
            <div>
              <div>
                <button class="butn cardb" href="<?php echo $graphic->route ?>">EXPLORE</button>
              </div>
            </div>
          </div>

        </div>
    </section>
<?php endforeach; ?>

  <div class="navigation-list">
    <ul>
    <?php foreach($graphics as $graphic): ?>
      <li><a id="n<?php echo $graphic->id ?>" href="javascript:void(0)" class="navigation-list-entries"><?php echo $graphic->title ?></a></li>
    <?php endforeach; ?>
  </ul>
  </div>

@endsection
