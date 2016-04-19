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
          if( have_rows('onepage_elemente') ):
              while ( have_rows('onepage_elemente') ) : the_row();
              if (get_sub_field('in_navigation_sichtbar')) {
                ?><li><a class="page-scroll" href="#<?= get_sub_field('navigation_link') ?>"><?= get_sub_field('navigation_beschriftung') ?></a></li><?php
              }
              endwhile;

          else :

              // no layouts found

          endif;
        ?>
        <li><a class="page-scroll" href="#kontaktformular"><span class="glyphicon glyphicon-envelope"></span></a></li>
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




<section id="kontaktformular" class="kontakt-slide parallax-slide">
  <div class="container">
    <div class="row">
      <div class="col-md-10 col-md-offset-1 text-center">
        <h1>Interesse?</h1>
        <h2>Schreiben Sie uns, wir sind gerne für Sie da</h2>
      </div>
    </div>
    <div class="kontakt-form">
      <div class="row">
        <?php
          echo $response;
        ?>
        <form class="form-horizontal" action="<?php the_permalink(); ?>#kontaktformular" method="post">
          <div class="form-group">
            <label for="kontakt-name" class="col-sm-4 control-label">Ihr Vor- und Nachname</label>
            <div class="col-sm-7">
              <input type="text" class="form-control" id="kontakt-name" placeholder="Ihr Vor- und Nachname" name="message_name" value="<?php echo esc_attr($_POST['message_name']); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="kontakt-email" class="col-sm-4 control-label">Ihre Email Adresse</label>
            <div class="col-sm-7">
              <input type="email" class="form-control" id="kontakt-email" placeholder="Ihre Email Adresse" name="message_email" value="<?php echo esc_attr($_POST['message_email']); ?>">
            </div>
          </div>
          <div class="form-group">
            <label for="kontakt-nachricht" class="col-sm-4 control-label">Ihre Nachricht an uns</label>
            <div class="col-sm-7">
              <textarea class="form-control" id="kontakt-nachricht" rows="6" placeholder="Ihre Nachricht an uns" name="message_text"><?php echo esc_textarea($_POST['message_text']); ?></textarea>
            </div>
          </div>
          <div class="form-group">
            <div class="col-sm-offset-4 col-sm-7">
              <input type="hidden" name="mailto" value="kaisky89@gmail.com">
              <input type="hidden" name="submitted" value="1">
              <button type="submit" class="btn btn-default">Senden</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>





<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
