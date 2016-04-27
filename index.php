<?php
  include_once 'emails.php';
  $accordion_nr = 0;
  $collapse_nr  = 0;
  $modal_nr     = 0;
?>

<?php get_header(); ?>

<?php while ( have_posts() ) : the_post(); ?>

<?php get_template_part('onepage', 'nav'); ?>

<div class="content-wrapper">
<?php
  if( have_rows('onepage_elemente') ):
    while ( have_rows('onepage_elemente') ) : the_row();
      get_template_part('onepage', get_row_layout());
    endwhile;
  else :
      // no layouts found
  endif;
?>
</div>

<?php endwhile; // end of the loop. ?>
<?php get_footer(); ?>
