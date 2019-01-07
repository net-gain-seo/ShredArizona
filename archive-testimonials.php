<?php
    // TESTIMONIALS
    get_header();
?>
<div class="mast page-mast">
    <img src="<?php echo home_url(); ?>/wp-content/uploads/2018/12/About-Us-Banner.jpg" />
    <div class="container mast-overlay">
        <h1>About Us</h1>
        <p>Testimonials</p>
    </div>
</div>
<div class="container-fluid testimonials-listing">
  <div class="container">
    <div class="row paddingT0">
      <article class="col col-lg-12 col-md-12 col-sm-12 col-xsm-12">
        <?php $loop = new WP_Query( array( 'post_type' => 'testimonials' ) ); ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post();
        $auth = get_post_meta($post->ID, 'testimonial_author', true);
        $pos = get_post_meta($post->ID, 'testimonial_position', true);?>

          <div class="the-testimonial">
              <?php the_content(); ?>
              <p class="author"><?php echo $auth; ?><br/>
                <?php echo $pos; ?></p>
          </div>
        <?php endwhile; // End of the loop. ?>

      </article>
    </div>
    <div class="row">
        <div class="col col-lg-12 col-md-12 col-sm-12 col-xsm-12">
        <img src="<?php echo home_url(); ?>/wp-content/uploads/2018/12/About-Us-Shreding-Truck.jpg" width="100%" alt="Shred Truck"/>
      </div>
    </div>
  </div>
</div>
    <div class="container-fluid  horizontalgradient">
      <div class="container">
        <div class="row padding60">
          <div class="col col-12 col-lg-12 textCenter whiteText">
          <h3 class="h1">Are you ready to start shredding your documents?</h3>
          <p><a href="<?php echo home_url(); ?>/services/" class="button">View Our Services</a></p>
          </div>
        </div>
      </div>
    </div>
    <div class="container thumbnailgallery">
      <div class="row padding80">
        <div class="col col-lg-2 col-md-2 col-sm-6 col-xsm-6 ">
        <p><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/12/Service-Bar-1.jpg" width="100%"></p>
        </div>
        <div class="col col-lg-2 col-md-2 col-sm-6 col-xsm-6 ">
        <p><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/12/Service-Bar-2.jpg" width="100%"></p>
        </div>
        <div class="col col-lg-2 col-md-2 col-sm-6 col-xsm-6 ">
        <p><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/12/Service-Bar-3.jpg" width="100%"></p>
        </div>
        <div class="col col-lg-2 col-md-2 col-sm-6 col-xsm-6 ">
        <p><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/12/Service-Bar-4.jpg" width="100%"></p>
        </div>
        <div class="col col-lg-2 col-md-2 col-sm-6 col-xsm-6 ">
        <p><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/12/Service-Bar-5.jpg" width="100%"></p>
        </div>
        <div class="col col-lg-2 col-md-2 col-sm-6 col-xsm-6 ">
        <p><img src="<?php echo home_url(); ?>/wp-content/uploads/2018/12/Service-Bar-6.jpg" width="100%"></p>
        </div>
      </div>
    </div>
    <?php echo do_shortcode( '[common_element id="142"]' ); ?>
<?php
    get_footer();
