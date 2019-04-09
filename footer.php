</main>

<footer class="container-fluid site-footer">
    <div class="container flex-footer">
        <div class="f-item phone-assoc">
          <div class="social">
            <a href="https://www.facebook.com/a1shredding/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebookicon.png" width="50px" alt=""></a>
            <a href="https://twitter.com/shredarizona/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/twittericon.png" width="50px" alt=""></a>
            <!---a href="" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/googleicon.png" width="50px" alt=""></a--->
            <a href="https://www.instagram.com/A1Shredding/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/instagramicon.png" width="50px" alt=""></a>
          </div>
        </div>
        <div class="f-item phone">
            <a href="tel:16024413339">Call (602) 441-3339</a>
        </div>
        <div class="f-item logo">
          <div>
            <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" alt="A-1 Shredding - your Privacy is Our Priority"></a>
          </div>
        </div>
        <div class="f-item address">
          <div class="section dropoff">
            <h3>Drop-Off Hours:</h3>
            Mon-Thurs 8:00am-4:00pm<br/>
            Mon-Thurs closed from 12:30pm-1:00pm<br/>
            Fri 8:00am-1:00pm
          </div>
          <div class="section location">
            <h3>Our Location:</h3>
            7615 N 75th Ave #109<br/>
            Glendale, AZ 85303
          </div>
        </div>
        <div class="f-item copyright">Copyright &copy; <?php echo date("Y"); ?> A-1 Shredding. All rights reserved.</div>

        <div class="f-item netgain">Website Designed by <a href="http://www.netgainseo.com/" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/netgain.png" alt=""></a></div>

    </div>
</footer>
<div class="modal fade" id="popForm" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header popover-header">
                <h3 class="title">Get A Quote</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php echo do_shortcode( '[contact-form-7 id="268" title="Pop-Over Form"]' ); ?>
            </div>
        </div>
    </div>
</div>
<a href="#" class="scrollToTop">&uarr;</a>
<div id="closeNav" class="close-nav">Close <i class="fa fa-times"></i></button></div>
<?php wp_footer(); ?>

<script type="text/javascript" src="https://secure.leadforensics.com/js/160843.js" ></script>
<noscript><img alt="" src="https://secure.leadforensics.com/160843.png" style="display:none;" /></noscript>

</body>
</html>
