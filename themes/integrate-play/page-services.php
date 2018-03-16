<?php
/* Template Name: Services Page */
get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <?php while ( have_posts() ) : the_post(); ?>

      <?php get_template_part( 'template-parts/content', 'page' ); ?>

    <?php endwhile; // End of the loop. ?>


    <?php echo CFS()->get('services_workshops');?>
    <?php echo CFS()->get('workshop_banner');?>
    <?php echo CFS()->get('workshop_serious_play');?>
    <?php echo CFS()->get('workshop_ways_to_play');?>

    <?php echo CFS()->get('services_speaking');?>
    <?php echo CFS()->get('speaking_banner');?>
    <?php echo CFS()->get('speaking_international_speaker');?>
    <?php echo CFS()->get('speaking_highlights');?>
    <?php echo CFS()->get('speaking_keynote_topics');?>
    
    <?php echo CFS()->get('services_coaching');?>
    <?php echo CFS()->get('coaching_banner');?>
    <?php echo CFS()->get('coaching_here_for_you');?>
    <?php echo CFS()->get('coaching_advice');?>

    <?php echo CFS()->get('contact_form');?>
 



  </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>