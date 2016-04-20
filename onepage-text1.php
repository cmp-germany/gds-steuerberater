<section
  <?php if (get_sub_field('in_navigation_sichtbar')){
    echo "id=\"".get_sub_field('navigation_link'). "\"";
  }; ?>
  class="content-slide parallax-slide" data-parallax="scroll" data-image-src="<?php $hintergrund_bild = get_sub_field('hintergrund_bild'); echo $hintergrund_bild['url']; ?>" data-speed="1.0">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 text-center">
        <h1><?= get_sub_field('titel') ?></h1>
        <h2><?= get_sub_field('untertitel') ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1 text-center">
        <div class="content-slide-intro">
          <?= get_sub_field('text') ?>
        </div>
      </div>
    </div>
  </div>
</section>
