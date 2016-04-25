<section
  <?php if (get_sub_field('in_navigation_sichtbar')){
    echo "id=\"".get_sub_field('navigation_link'). "\"";
  }; ?>
  class="content-slide parallax-slide" data-parallax="scroll" data-image-src="<?php $hintergrund_bild = get_sub_field('hintergrund_bild'); echo $hintergrund_bild['url']; ?>" data-speed="1.0">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1><?= get_sub_field('titel') ?></h1>
        <h2><?= get_sub_field('untertitel') ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6<?php if (get_sub_field('hyphenate')) { echo ' hyphenate'; } ?>">
        <?= get_sub_field('text1') ?>
      </div>
      <div class="col-md-6<?php if (get_sub_field('hyphenate')) { echo ' hyphenate'; } ?>">
        <?= get_sub_field('text2') ?>
      </div>
    </div>
    <?php if (get_sub_field('quote')): ?>
      <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
            <p class="content-slide-intro">„<?= get_sub_field('quote') ?>“</p>
        </div>
      </div>
    <?php endif; ?>
  </div>
</section>
