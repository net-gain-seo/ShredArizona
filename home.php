    <?php
        get_header();
    ?>
    <div class="mast page-mast">
        <img src="<?php echo home_url(); ?>/wp-content/uploads/2018/12/About-Us-Banner.jpg" />
        <div class="container mast-overlay">
            <h1>Blog</h1>
            <p>What's in the Shredding News?</p>
        </div>
    </div>
   <article class="page-content">
     <div class="container">
       <div class="row">
         <div class="col col-lg-12 col-md-12 col-sm-12 col-xsm-12">

              <?php while ( have_posts() ) : the_post(); ?>

                <div id="Post" class="blogposts">
                  <h2 class="post-title">
                      <a title="<?php the_title_attribute(); ?>" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h2>
                  <?php the_excerpt(); ?>
                </div>

              <?php endwhile; // End of the loop. ?>

          </div>
        </div>
      </div>
    </article>
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

    <?php
        get_footer();
