<section
  <?php if (get_sub_field('in_navigation_sichtbar')){
    echo "id=\"".get_sub_field('navigation_link'). "\"";
  }; ?>
  class="title-slide parallax-slide" data-parallax="scroll" data-image-src="<?php $hintergrund_bild = get_sub_field('hintergrund_bild'); echo $hintergrund_bild['url']; ?>" data-speed="0">
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
      <a class="page-scroll" href="#start"><span class="glyphicon glyphicon-chevron-down"></span></a>
      <script type="text/javascript">
        $ = jQuery.noConflict();
        $(document).ready(function(){

        })
      </script>
    </p>
  </div>
</section>
