<?php include_once 'emails.php'; ?>

<?php
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
        <li><a class="page-scroll" href="#team">Team</a></li>
        <li><a class="page-scroll" href="#impressum">Kontakt &amp; Impressum</a></li>
        <li><a class="page-scroll" href="#kontaktformular"><span class="glyphicon glyphicon-envelope"></span></a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<?php
// check if the flexible content field has rows of data
if( have_rows('onepage_elemente') ):
    $id = 0;
    while ( have_rows('onepage_elemente') ) : the_row();
    $the_id = 'onepage_element-'.$id++;
    get_template_part('onepage', get_row_layout());
    endwhile;

else :

    // no layouts found

endif;
?>




<section class="quote-slide parallax-slide" data-parallax="scroll" data-image-src="<?= get_template_directory_uri() ?>/gfx/_DSC5866.jpg" data-natural-width="1600" data-natural-height="1068" data-speed="0" data-bleed="0">
  <div class="quotation">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
          <blockquote>
            <q>Nur wenn unsere Mandanten ihre Erfüllung bestätigen, können wir zufrieden sein.</q>
            <!--<footer>Ein Kunde der GDS<cite title="Source Title">Source Title</cite></footer>-->
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>

<!--<section class="content-slide parallax-slide" data-parallax="scroll" data-image-src="<?= get_template_directory_uri() ?>/gfx/_DSC5899.jpg" data-natural-width="1600" data-natural-height="1068" data-speed="1.0" data-bleed="10">-->
<section id="team" class="content-slide parallax-slide">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <h1>Das Team</h1>
        <h2>Woran wir uns messen</h2>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1 text-center">
          <p class="content-slide-intro">Für die GDS ist es eine erste Verpflichtung, sich in ihre Mandanten hineinzudenken. Deshalb haben wir uns als ganzes Team folgende Grundsätze für unsere Arbeit gegeben:</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-7 col-sm-offset-4">
        <ol class="team-list">
          <li>Immer den Dialog mit den Mandanten suchen</li>
          <li>Partnerschaftlich auf Augenhöhe kommunizieren</li>
          <li>Den Mandanten richtig zuhören und ihre Probleme verstehen</li>
          <li>Sehr individuell und persönlich auf die Mandanten eingehen</li>
          <li>Schlanke, kostenbewusste Lösungen für das Unternehmen entwickeln</li>
        </ol>
      </div>
    </div>
    <div class="teammember">
      <div class="row">
        <div class="col-sm-4">
          <div class="team-avatar">
            <img src="<?= get_template_directory_uri() ?>/gfx/UweDiekmann.jpg" alt="Bild von Uwe Diekmann" />
          </div>
        </div>
        <div class="col-sm-7 team-description">
          <h4>
            <span class="team-name">Uwe Diekmann</span>, <span class="team-degree">Dipl. – Kaufmann</span>, <span class="team-position">Steuerberater & geschäftsführender Gesellschafter</span>
          </h4>
          <p class="team-data">
            <strong>Telefon</strong> +49 221 800474 0 | <strong>E-Mail</strong> <a href="mailto:u.diekmann@gds-steuerberatung.de">u.diekmann@gds-steuerberatung.de</a>
          </p>
          <div class="team-text">
            <p>
              2005 gründete Uwe Diekmann seine eigene Steuerberatungskanzlei in Köln-Rodenkirchen, die heutige GDS – Köln KG, nachdem er sich, nach langjähriger Tätigkeit als Leiter im Bereich der Konzernsteuerung bei einem großen deutschen Immobilienkonzern, dazu entschloss, den Schritt in die berufliche Selbständigkeit zu wagen.
            </p>
            <p>
              Uwe Diekmann liegt es am Herzen, Spitzenleistungen für jeden Mandanten zu erreichen und die individuellen Ansprüche zu erfüllen. Dies erfordert ein Höchstmaß an persönlicher Betreuung und die Meisterung von täglich neuen Herausforderungen.
            </p>
            <p>
              Uwe Diekmann hat Betriebswirtschaftslehre an der Universität zu Köln studiert und sich hierbei auf die Schwerpunkte Steuern und Wirtschaftsprüfung konzentriert. Im Jahr 1996 folgte das Steuerberaterexamen mit dem Abschluss als Steuerberater.
            </p>
          </div>
        </div>
      </div>
    </div>
    <div class="teammember">
      <div class="row">
        <div class="col-sm-4">
          <div class="team-avatar">
            <img src="<?= get_template_directory_uri() ?>/gfx/FrankSchuerholz.jpg" alt="Bild von Frank Schürholz" />
          </div>
        </div>
        <div class="col-sm-7 team-description">
          <h4>
            <span class="team-name">Frank Schürzholz</span>, <span class="team-degree">Dipl. – Betriebswirt (FH)</span>, <span class="team-position">Steuerberater & geschäftsführender Gesellschafter</span>
          </h4>
          <p class="team-data">
            <strong>Telefon</strong> +49 221 800474 0 | <strong>E-Mail</strong> <a href="mailto:f.schuerholz@gds-steuerberatung.de">f.schuerholz@gds-steuerberatung.de</a>
          </p>
          <div class="team-text">
            <p>
              Seit 2006 gehört Frank Schürholz zum Team der Steuerberatungsgesellschaft GDS – Köln KG und ist seit 2008 geschäftsführender Gesellschafter. Frank Schürholz kann auf langjährige Berufserfahrungen zurückgreifen. Bereits seit 1990 ist er im Bereich der Steuerberatung tätig. Eine ganzheitliche, individuelle und optimale Betreuung der Mandanten steht für ihn an oberster Stelle.
            </p>
            <p>
              Nach der Ausbildung zum Fachgehilfen in Steuer- und Wirtschaftsberatenden Berufen konnte Frank Schürzholz 1998 sein Studium an der Fachhochschule Worms im Fachbereich Betriebswirtschaft VII – Steuerwesen – mit dem Abschluss als Diplom-Betriebswirt (FH) erfolgreich beenden. Im Jahr 2003 absolvierte er die Steuerberaterprüfung mit dem Abschluss als Steuerberater.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="quote-slide parallax-slide" data-parallax="scroll" data-image-src="<?= get_template_directory_uri() ?>/gfx/_DSC0047_crop.jpg" data-natural-width="1600" data-natural-height="1068" data-speed="0" data-bleed="0">
  <div class="quotation">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
          <blockquote>
            <q>Dürfen wir Sie auf einen Kaffee einladen?</q>
            <!--<footer>Ein Kunde der GDS<cite title="Source Title">Source Title</cite></footer>-->
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</section>


<!--<section id="start" class="content-slide parallax-slide" data-parallax="scroll" data-image-src="<?= get_template_directory_uri() ?>/gfx/_DSC5899.jpg" data-natural-width="1600" data-natural-height="1068" data-speed="1.0" data-bleed="10">-->
<section id="impressum" class="impressum-slide parallax-slide">
  <div class="container">
    <div class="impressum-adress">
      <div class="row">
        <div class="col-md-10 col-md-offset-1 text-center">
          <p>
            Maternusstr. 44<br>
            50996 Köln-Rodenkirchen<br>
            +49 221 800474 0<br>
            info@gds-steuerberatung.de
          </p>
        </div>
        <div class="col-md-10 col-md-offset-1 text-center impressum-maps">
          <a href="https://goo.gl/maps/uQqarDR15py">
            <p>
              <span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
            </p>
            <p>
              Google Maps
            </p>
          </a>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-10 col-md-offset-1 text-center">
        <h2>Impressum & Recht</h2>
      </div>
    </div>
    <div class="row">
      <div class="panel-group" id="accordion2" role="tablist" aria-multiselectable="true">
        <div class="col-md-10 col-md-offset-1 text-center">
          <div class="panel panel-default">
            <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse2_1" aria-expanded="false" aria-controls="collapse2_1">
              <div class="panel-heading" role="tab" id="heading2_1">
                <h4 class="panel-title">
                  Geschäftsführer
                </h4>
              </div>
            </a>
            <div id="collapse2_1" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2_1">
              <div class="panel-body">
                <p>
                  Dipl.-Kaufmann Uwe Diekmann, Dipl. - Betriebswirt Frank Schürholz
                </p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse2_2" aria-expanded="false" aria-controls="collapse2_2">
              <div class="panel-heading" role="tab" id="heading2_2">
                <h4 class="panel-title">
                  Handelsregister
                </h4>
              </div>
            </a>
            <div id="collapse2_2" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2_2">
              <div class="panel-body">
                <p>
                  HRB 55503 beim Amtsgericht Köln
                </p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse2_3" aria-expanded="false" aria-controls="collapse2_3">
              <div class="panel-heading" role="tab" id="heading2_3">
                <h4 class="panel-title">
                  Verantwortlich für den Inhalt
                </h4>
              </div>
            </a>
            <div id="collapse2_3" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2_3">
              <div class="panel-body">
                <p>
                  Dipl.-Kaufmann Uwe Diekmann, Dipl. Betriebswirt Frank Schürholz
                </p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse2_4" aria-expanded="false" aria-controls="collapse2_4">
              <div class="panel-heading" role="tab" id="heading2_4">
                <h4 class="panel-title">
                  Zuständige Kammer
                </h4>
              </div>
            </a>
            <div id="collapse2_4" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2_4">
              <div class="panel-body">
                <p>
                  Steuerberaterkammer Köln
                </p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse2_5" aria-expanded="false" aria-controls="collapse2_5">
              <div class="panel-heading" role="tab" id="heading2_5">
                <h4 class="panel-title">
                  Unsere Partner
                </h4>
              </div>
            </a>
            <div id="collapse2_5" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2_5">
              <div class="panel-body">
                <p>
                  Signal Iduna
                </p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse2_6" aria-expanded="false" aria-controls="collapse2_6">
              <div class="panel-heading" role="tab" id="heading2_6">
                <h4 class="panel-title">
                  Unser Shop
                </h4>
              </div>
            </a>
            <div id="collapse2_6" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2_6">
              <div class="panel-body">
                <p>
                  <a href="https://www.taxyourself.de" target="_blank"><img src="<?= get_template_directory_uri() ?>/gfx/menu-bar/tyl.gif" alt="Tax Yourself Logo" class="menu-bar-icon"/></a>
                </p>
              </div>
            </div>
          </div>
          <div class="panel panel-default">
            <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion2" href="#collapse2_7" aria-expanded="false" aria-controls="collapse2_7">
              <div class="panel-heading" role="tab" id="heading2_7">
                <h4 class="panel-title">
                  Unsere Auszeichnungen
                </h4>
              </div>
            </a>
            <div id="collapse2_7" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading2_7">
              <div class="panel-body">
                <p>
                  TÜV-Zertifizierung ISO 9001 & TOP Steuerberater Focus Money Test 2008, 2014, 2015
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


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
