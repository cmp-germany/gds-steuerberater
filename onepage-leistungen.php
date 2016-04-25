<?php global $accordion_nr, $collapse_nr; ?>
<section
  <?php if (get_sub_field('in_navigation_sichtbar')){
    echo "id=\"".get_sub_field('navigation_link'). "\"";
  }; ?>
  class="content-slide parallax-slide" <?php $hintergrund_bild = get_sub_field('hintergrund_bild'); if ($hintergrund_bild) { ?>data-image-src="<?= $hintergrund_bild['url'] ?>" data-speed="1.0"<?php } ?>
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
      <div class="col-md-6<?php if (get_sub_field('hyphenate')) { echo ' hyphenate'; } ?>">
        <?= get_sub_field('text1') ?>
      </div>
      <div class="col-md-6<?php if (get_sub_field('hyphenate')) { echo ' hyphenate'; } ?>">
        <?= get_sub_field('text2') ?>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="panel-group" id="accordion-<?= ++$accordion_nr ?>" role="tablist" aria-multiselectable="true">
        <div class="col-md-6">
          <?php
            if( have_rows('leistungen1') ):
              while ( have_rows('leistungen1') ) : the_row();

                ?><div class="panel panel-default">
                  <a role="button" data-toggle="collapse" data-parent="accordion-<?= $accordion_nr ?>" href="#collapse-<?= ++$collapse_nr ?>" aria-expanded="false" aria-controls="collapse-<?= $collapse_nr ?>">
                    <div class="panel-heading" role="tab" id="heading-<?= $collapse_nr ?>">
                      <h4 class="panel-title">
                        <?= get_sub_field('leistung-titel'); ?>
                      </h4>
                    </div>
                  </a>
                  <div id="collapse-<?= $collapse_nr ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?= $collapse_nr ?>">
                    <div class="panel-body">
                      <ul>
                        <?php while ( have_rows('activity') ) : the_row(); ?>
                        <li><a data-toggle="popover" data-placement="top" title="<?= get_sub_field('name')?>" data-content="<?= get_sub_field('beschreibung') ?>"><?= get_sub_field('name') ?></a></li>
                        <?php endwhile; ?>
                      </ul>
                    </div>
                  </div>
                </div><?php
              endwhile;
            else :
              // no layouts found
            endif;
          ?>
        </div>
        <div class="col-md-6">
          <?php
            if( have_rows('leistungen2') ):
              while ( have_rows('leistungen2') ) : the_row();

                ?><div class="panel panel-default">
                  <a role="button" data-toggle="collapse" data-parent="accordion-<?= $accordion_nr ?>" href="#collapse-<?= ++$collapse_nr ?>" aria-expanded="false" aria-controls="collapse-<?= $collapse_nr ?>">
                    <div class="panel-heading" role="tab" id="heading-<?= $collapse_nr ?>">
                      <h4 class="panel-title">
                        <?= get_sub_field('leistung-titel'); ?>
                      </h4>
                    </div>
                  </a>
                  <div id="collapse-<?= $collapse_nr ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?= $collapse_nr ?>">
                    <div class="panel-body">
                      <ul>
                        <?php while ( have_rows('activity') ) : the_row(); ?>
                        <li><a data-toggle="popover" data-placement="top" title="<?= get_sub_field('name')?>" data-content="<?= get_sub_field('beschreibung') ?>"><?= get_sub_field('name') ?></a></li>
                        <?php endwhile; ?>
                      </ul>
                    </div>
                  </div>
                </div><?php
              endwhile;
            else :
              // no layouts found
            endif;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
