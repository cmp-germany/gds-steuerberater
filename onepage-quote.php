<section
  <?php if (get_sub_field('in_navigation_sichtbar')){
    echo "id=\"".get_sub_field('navigation_link'). "\"";
  }; ?>

  class="quote-slide parallax-slide" data-parallax="scroll" data-image-src="<?= get_sub_field('hintergrund_bild')['url'] ?>" data-speed="0">
  <div class="quotation">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
          <blockquote>
            <q><?= get_sub_field('quote') ?></q>
            <?php if (get_sub_field('source') != "") { ?>
              <footer><?= get_sub_field('source') ?></footer>
            <?php } ?>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>
