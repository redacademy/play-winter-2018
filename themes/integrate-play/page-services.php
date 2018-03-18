<?php
/**
 * The template for displaying the Services Page.
 *
 * @package Integrate_Play_Theme
 */
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
        <div class="speak-banner">
            <?php echo CFS()->get('speaking_banner');?>
        </div>

        <a class="service-info btn orange" href="<?php echo esc_url(home_url( '/contact-us/'))?>">Get Info Package</a> 
        
        <div class="inter-speaker">
          <?php echo CFS()->get('speaking_international_speaker');?>
        </div>

        <div class="highlights">
            <?php echo CFS()->get('speaking_highlights');?>
            <?php echo CFS()->get('sizzle_reel_link'); ?>
        </div>

        <div class="keynotes">
          <?php echo CFS()->get('speaking_keynote_topics');?>
        </div>
    </div>

    <div class="coaching-wrapper">
        <?php echo CFS()->get('coaching_banner');?>
        <?php echo CFS()->get('coaching_here_for_you');?>
        <?php echo CFS()->get('coaching_advice');?>
    </div>

    <div class="contact-form-wrapper"><?php echo CFS()->get('contact_form');?>	</div>
 

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>