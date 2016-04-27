<section
  <?php if (get_sub_field('in_navigation_sichtbar')){
    echo "id=\"".get_sub_field('navigation_link'). "\"";
  }; ?>

  class="content-slide parallax-slide" <?php if (get_sub_field('hintergrund_bild')): ?>data-image="<?php echo htmlentities(json_encode(get_sub_field('hintergrund_bild')), ENT_QUOTES, 'UTF-8'); ?>" <?php endif; ?>
  style="padding-bottom: 20px;"
  >
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1><?= get_sub_field('titel') ?></h1>
        <h2><?= get_sub_field('untertitel') ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1 text-center">
        <div class="content-slide-intro">
          <?= get_sub_field('intro') ?>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7 col-sm-offset-4">
        <ol class="team-list">
          <?php while ( have_rows('werte') ) : the_row(); ?>
            <li><?= get_sub_field('wert') ?></li>
          <?php endwhile; ?>
        </ol>
      </div>
    </div>
  </div>
</section>
<section class="content-slide parallax-slide" style="padding-top: 0px; padding-bottom: 0px;">
  <div class="container">
    <?php
      if (get_sub_field('hyphenate')) {
        $hyphenate_text = ' hyphenate';
      } else {
        $hyphenate_text = '';
      }
    ?>
    <?php while ( have_rows('teammitglieder') ) : the_row(); ?>
      <div class="teammember">
        <div class="row">
          <div class="col-sm-4">
            <div class="team-avatar">
              <img src="<?php $bild = get_sub_field('bild'); echo $bild['url']; ?>" alt="Bild von <?= get_sub_field('name') ?>" />
            </div>
          </div>
          <div class="col-sm-7 team-description">
            <h4>
              <span class="team-name"><?= get_sub_field('name') ?></span>, <span class="team-degree">Dipl. – Kaufmann</span><br><span class="team-position"><?= get_sub_field('position') ?></span>
            </h4>
            <p class="team-data">
              <strong>Telefon</strong> <?= get_sub_field('telefon') ?> | <strong>E-Mail</strong> <a href="mailto:<?= get_sub_field('email') ?>"><?= get_sub_field('email') ?></a>
            </p>
            <div class="team-text<?= $hyphenate_text ?>">
              <?= get_sub_field('beschreibung') ?>
            </div>
          </div>
        </div>
      </div>
    <?php endwhile; ?>
  </div>
  <div class="content-slide parallax-slide" <?php $hintergrund_bild = get_sub_field('hintergrund_bild'); if ($hintergrund_bild) { ?>data-image-src="<?= $hintergrund_bild['url'] ?>" data-speed="1.0"<?php } ?> style="padding-bottom: 100px; margin-top: -3px;">
  </div>
</section>
