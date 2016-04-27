<section
  <?php if (get_sub_field('in_navigation_sichtbar')){
    echo "id=\"".get_sub_field('navigation_link'). "\"";
  }; ?>
  class="title-slide parallax-slide" data-parallax="scroll" <?php if (get_sub_field('hintergrund_bild')): ?>data-image="<?php echo htmlentities(json_encode(get_sub_field('hintergrund_bild')), ENT_QUOTES, 'UTF-8'); ?>" <?php endif; ?>data-speed="0">
  <div class="title-slide-center">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <h1><?= get_sub_field('titel') ?><br><small><?= get_sub_field('untertitel') ?></small></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="title-slide-arrow floating">
    <p class="title-slide-arrow-circle">
      <a id="title-slide-arrow-anchor" class="page-scroll"><span class="glyphicon glyphicon-chevron-down"></span></a>
      <script type="text/javascript">
        $ = jQuery.noConflict();
        $(document).ready(function(){
          $('#title-slide-arrow-anchor').attr('href', function() {
            return '#' + $(this).parents('section').nextAll('[id]').first().attr('id');
          })
        })
      </script>
    </p>
  </div>
</section>
