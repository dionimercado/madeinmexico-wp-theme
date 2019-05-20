
<footer id="footer">
  <div id="contact" class="footer-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-6 col-md-4 d-none d-md-block">
          <h3 class="footer-title">HOURS OF OPERATION</h3>
          <div class="open-time opening-time">
           <p class="clock-time">
             Mon-Fri from 5 pm to 2 am,
             Sat from 5pm to 4am,
             Sun from 1pm to 2am<br>
             If you need a reservation, please call us at 646.726.4849 or</p>
           <p><a href="#rsvp" class="btn btn-outline-light btn-sm text-uppercase page-scroll">Reserve Online</a></p>
         </div>
        </div>

         <div class="col-sm-6 col-md-4 mb-5">
           <h3 class="footer-title pb-3">Inwood</h3>
           <div class="address">
             <p><i class="fa fa-phone"></i><strong>phone: </strong> <a href="tel:<?php echo get_post_meta( get_the_ID(), 'phone', true ) ?>"><?php echo get_post_meta( get_the_ID(), 'phone', true ) ?></a></p>
             <p><i class="fa fa-envelope"></i><strong>email: </strong><a href="mailto:<?php echo get_post_meta( get_the_ID(), 'email', true ) ?>"><?php echo get_post_meta( get_the_ID(), 'email', true ) ?></a></p>
             <p class="icon-map"><i class="fa fa-map-marker"></i><strong>address: </strong><?php echo get_post_meta( get_the_ID(), 'address', true ) ?></p>
           </div>
           <div class="d-flex">
             <a href="<?php echo get_post_meta( get_the_ID(), 'gmaps', true ) ?>" target="_blank" class="btn btn-outline-light btn-sm text-uppercase mr-3">Get directions</a>
             <a href="/inwood/" class="btn btn-outline-light btn-sm text-uppercase">Visit Site</a>
           </div>
        </div>

         <div class="col-sm-6 col-md-4">
           <h3 class="footer-title pb-3">Harlem</h3>
           <div class="address">
             <p><i class="fa fa-phone"></i><strong>phone: </strong> <a href="tel:<?php echo get_post_meta( get_the_ID(), 'harlem_phone', true ) ?>"><?php echo get_post_meta( get_the_ID(), 'harlem_phone', true ) ?></a></p>
             <p><i class="fa fa-envelope"></i><strong>email: </strong><a href="mailto:<?php echo get_post_meta( get_the_ID(), 'harlem_email', true ) ?>"><?php echo get_post_meta( get_the_ID(), 'harlem_email', true ) ?></a></p>
             <p class="icon-map"><i class="fa fa-map-marker"></i><strong>address: </strong><?php echo get_post_meta( get_the_ID(), 'harlem_address', true ) ?></p>
           </div>
           <div class="d-flex">
             <a href="<?php echo get_post_meta( get_the_ID(), 'harlem_gmaps', true ) ?>" target="_blank" class="btn btn-outline-light btn-sm text-uppercase mr-3">Get directions</a>
             <a href="/harlem/" class="btn btn-outline-light btn-sm text-uppercase">Visit Site</a>
           </div>
        </div>
        <!-- <div class="col-sm-6 col-md-4">
          <h3 class="footer-title mt-4 mt-sm-0 pb-4">Get directions</h3>
          <div class="google-map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12068.844724666318!2d-73.9171311!3d40.8672395!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x724cc82ad64d9f57!2sMade+In+Mexico!5e0!3m2!1sen!2sus!4v1556328731931!5m2!1sen!2sus" width="100%" height="160" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div> -->
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <p class="copyright text-white-50">
            &copy; Copyright <?php echo date("Y"); _e(' Made In Mexico. ') ?> <span class="d-none d-md-inline-block">All Rights Reserved</span>
          </p>
        </div>
        <div class="col-sm-4">
          <div class="social-icons justify-content-center justify-content-md-end text-center text-md-right">
            <span class="text-white-50">Follow Us: </span>
            <?php if( get_post_meta( get_the_ID(), 'facebook', true ) ) : ?><span><a href="<?php echo get_post_meta( get_the_ID(), 'facebook', true ) ?>" target="_blank"><i class="fab fa-facebook-f"></i></a><?php endif; ?></span>
            <?php if( get_post_meta( get_the_ID(), 'twitter', true ) ) : ?><span><a href="<?php echo get_post_meta( get_the_ID(), 'twitter', true ) ?>" target="_blank"><i class="fab fa-twitter"></i></a><?php endif; ?></span>
            <?php if( get_post_meta( get_the_ID(), 'instagram', true ) ) : ?><span><a href="<?php echo get_post_meta( get_the_ID(), 'instagram', true ) ?>" target="_blank"><i class="fab fa-instagram"></i></i></a><?php endif; ?></span>
            <?php if( get_post_meta( get_the_ID(), 'yelp', true ) ) : ?><span><a href="<?php echo get_post_meta( get_the_ID(), 'yelp', true ) ?>" target="_blank"><i class="fab fa-yelp"></i></i></a><?php endif; ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer() ?>

</body>
</html>
