<section
  <?php if (get_sub_field('in_navigation_sichtbar')){
    echo "id=\"".get_sub_field('navigation_link'). "\"";
  }; ?>
  class="impressum-slide parallax-slide">
  <div class="container">
    <div class="impressum-adress">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
          <p>
            <?= get_sub_field('adresse') ?>
          </p>
        </div>
        <?php if (get_sub_field('google_maps_link_anzeigen')): ?>
          <div class="col-md-10 col-md-offset-1 text-center impressum-maps">
            <a href="<?= get_sub_field('google_maps_link') ?>">
              <p>
                <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
              </p>
              <p>
                Google Maps
              </p>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1 text-center">
        <h2><?= get_sub_field('titel') ?></h2>
      </div>
    </div>
    <div class="row">
      <div class="panel-group" id="accordion-<?= ++$accordion_nr ?>" role="tablist" aria-multiselectable="true">
        <div class="col-md-10 col-md-offset-1 text-center">
          <?php while ( have_rows('impressum_eintrage') ) : the_row(); ?>
            <div class="panel panel-default">
              <a role="button" data-toggle="collapse" data-parent="#accordion-<?= $accordion_nr ?>" href="#collapse-<?= ++$collapse_nr ?>" aria-expanded="false" aria-controls="collapse-<?= $collapse_nr ?>">
                <div class="panel-heading" role="tab" id="heading-<?= $collapse_nr ?>">
                  <h4 class="panel-title">
                    <?= get_sub_field('name') ?>
                  </h4>
                </div>
              </a>
              <div id="collapse-<?= $collapse_nr ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading-<?= $collapse_nr ?>">
                <div class="panel-body">
                  <?= get_sub_field('inhalt'); ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
      </div>
    </div>
  </div>
</section>
