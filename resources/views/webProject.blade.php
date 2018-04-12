@section('')

    <?php foreach($websites as $website): ?>

        <div class="">
          <h2><?php echo $website->title ?></h2>
          <p><?php echo $website->subtitle ?></p>
          <p><?php echo $website->content ?></p>

    <?php endforeach ?>

@endsection
