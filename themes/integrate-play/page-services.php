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
            <div class="bubbles small yellow bubble-1"></div>			
			<div class="bubbles medium yellow bubble-2"></div>
			<div class="bubbles large orange-regular bubble-3"></div>
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
            <div class="bubbles medium purple-light bubble-4"></div>			
            <div class="bubbles medium purple-x-light bubble-5"></div>
            <div class="bubbles large purple-regular bubble-6"></div>	
            <div class="bubbles xl purple-x-light bubble-13"></div>
        </div>

        <div class="keynotes">
            <div class="text-wrapper">
          <?php echo CFS()->get('speaking_keynote_topics');?>
            </div>
          <div class="bubbles large orange-x-light bubble-8"></div>			
            <div class="bubbles medium orange-light bubble-9"></div>
            <div class="bubbles xl orange-light bubble-7"></div>
        <div class="bubbles medium orange-regular bubble-10"></div>
        <div class="bubbles small orange-light bubble-11"></div>
        <div class="bubbles small orange-regular bubble-12"></div>
        </div>
    </div>

    <div class="coaching-wrapper">
        <div class="coach-banner">
            <?php echo CFS()->get('coaching_banner');?>
            <a class="coach-info btn purple" href="<?php echo esc_url(home_url( '/contact-us/'))?>">Get Info Package</a> 
        </div>
        
        <div class="here-for-you-wrapper">
            <?php echo CFS()->get('coaching_here_for_you');?>
        </div> 

        <div class="advice-wrapper">
            <?php echo CFS()->get('coaching_advice');?>
        </div>
    </div> 

  </main><!-- #main -->
  <div class="contact-form-wrapper"><?php echo CFS()->get('contact_form');?>	</div>

</div><!-- #primary -->

<?php get_footer(); ?>