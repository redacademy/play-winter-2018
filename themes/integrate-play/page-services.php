<?php
/* Template Name: Services Page */
get_header(); ?>

<div id="primary" class="content-area">
  <main id="main" class="site-main" role="main">

    <div class="workshops-wrapper">
        <div class="work-banner">
            <?php echo CFS()->get('workshop_banner');?>
        </div>
        <div class="serious-play">
            <?php echo CFS()->get('workshop_serious_play');?>
        </div>
        <div class="ways-to-play">
            <?php echo CFS()->get('workshop_ways_to_play');?>
        </div>
    </div>

    <div class="speaking-wrapper">
        <?php echo CFS()->get('speaking_banner');?>
        <?php echo CFS()->get('speaking_international_speaker');?>
        <?php echo CFS()->get('speaking_highlights');?>
        <?php echo CFS()->get('speaking_keynote_topics');?>
    </div>

    <div class="coaching-wrapper">
        <?php echo CFS()->get('coaching_banner');?>
        <?php echo CFS()->get('coaching_here_for_you');?>
        <?php echo CFS()->get('coaching_advice');?>
    </div>

    <?php echo CFS()->get('contact_form');?>
 

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>