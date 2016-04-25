<?php global $response; ?>
<section
  <?php if (get_sub_field('in_navigation_sichtbar')){
    echo "id=\"".get_sub_field('navigation_link'). "\"";
  }; ?>
  class="kontakt-slide parallax-slide">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 text-center">
        <h1><?= get_sub_field('titel') ?></h1>
        <h2><?= get_sub_field('untertitel') ?></h2>
      </div>
    </div>
    <div class="kontakt-form">
      <div class="row">
        <?php
          echo $response;
        ?>
        <form class="form-horizontal" action="<?php the_permalink(); ?><?php if (get_sub_field('in_navigation_sichtbar')){
          echo "#".get_sub_field('navigation_link');
        }; ?>" method="post">
          <div class="form-group">
            <label for="kontakt-name" class="col-sm-4 control-label"><?= get_sub_field('beschriftung_name') ?></label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="kontakt-name" placeholder="<?= get_sub_field('beschriftung_name') ?>" name="message_name" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') {echo esc_attr($_POST['message_name']);} ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="kontakt-email" class="col-sm-4 control-label"><?= get_sub_field('beschriftung_email') ?></label>
            <div class="col-sm-7">
              <input type="email" class="form-control" id="kontakt-email" placeholder="<?= get_sub_field('beschriftung_email') ?>" name="message_email" value="<?php if($_SERVER['REQUEST_METHOD'] == 'POST') {echo esc_attr($_POST['message_email']);} ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="kontakt-nachricht" class="col-sm-4 control-label"><?= get_sub_field('beschriftung_nachricht') ?></label>
            <div class="col-sm-7">
              <textarea class="form-control" id="kontakt-nachricht" rows="6" placeholder="<?= get_sub_field('beschriftung_nachricht') ?>" name="message_text"><?php if($_SERVER['REQUEST_METHOD'] == 'POST') {echo esc_textarea($_POST['message_text']);} ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-7">
              <input type="hidden" name="mailto" value="<?= get_sub_field('email_adresse_empfanger') ?>">
              <input type="hidden" name="submitted" value="1">
              <button type="submit" class="btn btn-default"><?= get_sub_field('beschriftung_button') ?></button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
