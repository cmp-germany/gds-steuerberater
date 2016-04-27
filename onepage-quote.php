<section
  <?php if (get_sub_field('in_navigation_sichtbar')){
    echo "id=\"".get_sub_field('navigation_link'). "\"";
  }; ?>
  class="quote-slide parallax-slide" data-parallax="scroll" <?php if (get_sub_field('hintergrund_bild')): ?>data-image="<?php echo htmlentities(json_encode(get_sub_field('hintergrund_bild')), ENT_QUOTES, 'UTF-8'); ?>" <?php endif; ?>data-speed="0"
  <?php if (get_sub_field('background_position')): ?>
    style="background-position: <?= get_sub_field('background_position_width') ?>% <?= get_sub_field('background_position_height')?>%;"
  <?php endif; ?>
  >
  <div class="quotation">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
          <blockquote>
            <q><?= get_sub_field('quote') ?></q>
            <?php if (get_sub_field('source')) { ?>
              <footer><?= get_sub_field('source') ?></footer>
            <?php } ?>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>
