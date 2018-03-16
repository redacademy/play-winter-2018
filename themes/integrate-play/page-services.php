<?php
/* Template Name: Services Page */
get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <div class="workshops-wrapper">
        <?php echo CFS()->get('services_workshops');?>
        <?php echo CFS()->get('workshop_banner');?>
        <?php echo CFS()->get('workshop_serious_play');?>
        <?php echo CFS()->get('workshop_ways_to_play');?>
    </div>

    <div class="speaking-wrapper">
        <?php echo CFS()->get('services_speaking');?>
        <?php echo CFS()->get('speaking_banner');?>
        <?php echo CFS()->get('speaking_international_speaker');?>
        <?php echo CFS()->get('speaking_highlights');?>
        <?php echo CFS()->get('speaking_keynote_topics');?>
    </div>

    <div class="coaching-wrapper">
        <?php echo CFS()->get('services_coaching');?>
        <?php echo CFS()->get('coaching_banner');?>
        <?php echo CFS()->get('coaching_here_for_you');?>
        <?php echo CFS()->get('coaching_advice');?>
    </div>

    <?php echo CFS()->get('contact_form');?>
 

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>