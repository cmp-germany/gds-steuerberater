<nav class="navbar navbar-fixed-top" style="display: none;">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php if (get_field('navigation_brand') == 'text') { ?>
        <a class="navbar-brand page-scroll" href="#page-top"><?= get_field('navigation_titel') ?> <small><?= get_field('navigation_untertitel') ?></small></a>
      <?php } else {?>
        <?php $navigation_logo = get_field('navigation_logo'); ?>
        <a class="navbar-brand navbar-brand-logo page-scroll" href="#page-top"><p style="font-size: 100%;"><img src="<?= $navigation_logo['url'] ?>" alt="<?= $navigation_logo['alt'] ?>" class="menu-bar-icon menu-bar-icon-logo"/><?php if (get_field('navigation_untertitel')) {?> <small><?= get_field('navigation_untertitel') ?></small><?php } ?></p></a>
      <?php } ?>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div class="navbar-left">
        <?php
          $logos = get_field('navigation_additional_logos');
          if ($logos) {
            foreach ($logos as $logo) {
              ?><img src="<?= $logo['bild']['url'] ?>" alt="<?= $logo['bild']['alt'] ?>" class="menu-bar-icon menu-bar-icon-hidable" <?php if ($logo['hide_width']): ?>data-hide-width="<?= $logo['hide_width'] ?>"<?php endif; ?>/><?php
            }
          }
        ?>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
        <?php
        $links = get_field('navigation_externe_links');
        if ($links) {
          foreach ($links as $link) {
            if ($link['acf_fc_layout'] == 'logo') {
              ?><li class="nav-image-link" <?php if ($link['hide_width']): ?>data-hide-width="<?= $link['hide_width']?>"<?php endif; ?>><a href="<?= $link['url'] ?>" target="_blank"><img src="<?= $link['bild']['url'] ?>" alt="<?= $link['bild']['alt'] ?>" class="menu-bar-icon"/></a></li><?php
            } elseif ($link['acf_fc_layout'] == 'text') {
              ?><li <?php if ($link['hide_width']): ?>data-hide-width="<?= $link['hide_width']?>"<?php endif; ?>><a href="<?= $link['url'] ?>" target="_blank"><?= $link['beschriftung'] ?></a></li><?php
            }
          }
        }
        ?>
        <?php
          while ( have_rows('onepage_elemente') ) : the_row();
            if (get_sub_field('in_navigation_sichtbar')) {
              if (get_sub_field('navigation_icon')) {
                ?><li><a class="page-scroll" href="#<?= get_sub_field('navigation_link') ?>"><span class="glyphicon glyphicon-envelope"></span></a></li><?php
              } else {
                ?><li><a class="page-scroll" href="#<?= get_sub_field('navigation_link') ?>"><?= get_sub_field('navigation_beschriftung') ?></a></li><?php
              }
            }
          endwhile;
        ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
