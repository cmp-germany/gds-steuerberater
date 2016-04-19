<?php
  include_once 'emails.php';
  $accordion_nr = 0;
  $collapse_nr  = 0;
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<nav class="navbar navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand page-scroll" href="#page-top">GDS <small>Steuerberatung</small></a>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <div class="navbar-left">
        <img src="<?= get_template_directory_uri() ?>/gfx/menu-bar/tuv.png" alt="TÜV Siegel" class="menu-bar-icon menu-bar-icon-hidable"/>
        <img src="<?= get_template_directory_uri() ?>/gfx/menu-bar/top.png" alt="TOP Siegel" class="menu-bar-icon menu-bar-icon-hidable"/>
        <img src="<?= get_template_directory_uri() ?>/gfx/menu-bar/enterprise.png" alt="Enterprise Siegel" class="menu-bar-icon menu-bar-icon-hidable"/>
      </div>
      <ul class="nav navbar-nav navbar-right">
        <li class="hidden"><a class="page-scroll" href="#page-top"></a></li>
        <li class="nav-image-link"><a href="https://www.taxyourself.de" target="_blank"><img src="<?= get_template_directory_uri() ?>/gfx/menu-bar/tyl.gif" alt="Tax Yourself Logo" class="menu-bar-icon"/></a></li>
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

<?php
  if( have_rows('onepage_elemente') ):
    while ( have_rows('onepage_elemente') ) : the_row();
      get_template_part('onepage', get_row_layout());
    endwhile;
  else :
      // no layouts found
  endif;
?>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
