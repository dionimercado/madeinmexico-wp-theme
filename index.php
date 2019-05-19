<?php
/* Template Name: Home */
get_header();
?>
  <section id="main-silder">
    <?php echo do_shortcode('[rev_slider alias="home-slider"]') ?>
  </section>
  <section  id="about" class="welcome-area pt-3 pt-lg-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-lg-4">
          <div class="welcome-note text-center">
            <?php echo get_field('welcome_text') ?>
            </div>
          </div>
          <div class="col-md-6 col-lg-8">
            <div class="row">
              <div class="col-lg-6 mb-3 mb-lg-4 d-none d-lg-block first-column">
                <div class="upcoming-event bg-green text-center">
                  <h3>Our Chef</h3>
                  <div class="bbq-party">
                    <p class="text-white-50"><?php echo get_field('chef_info') ?></p>
                    <p class="mt-4">Come and  enjoy with us!<br><span class="read-more"><a class="text-right page-scroll" href="#rsvp">Reserve a table</a></span></p>
                  </div>
                </div>
              </div>
              <?php
              if( have_rows('food_menus') ):
                  while ( have_rows('food_menus') ) : the_row();
                  $menu_bg = wp_get_attachment_image_url( get_sub_field('menu_bg'), 'large' );
                  ?>
                  <div class="col-lg-6 mb-3 mb-lg-4">
                    <div id="menus" class="grid" style="background: url('<?php echo $menu_bg ?>') center center no-repeat; background-size: cover;">
                      <a href="<?php the_sub_field('menu_pdf') ?>" data-fancybox>
                        <figure class="effect-cheff mb-0">
                          <figcaption>
                            <h2><?php the_sub_field('menu_name'); ?></h2>
                            <p><?php the_sub_field('menu_desc') ?></p>
                          </figcaption>
                        </figure>
                      </a>
                    </div>
                  </div>
                  <?php
                  endwhile;
              endif;
              ?>
              <div class="col-lg-6 d-block d-lg-none first-column">
                <div class="upcoming-event bg-red text-center">
                  <h3 class="mb-0 pb-0">NEWSLETTER</h3>
                  <div class="bbq-party">
                    <p><span class="text-white-50 d-none">Keep up to date with our news, events, and more by signing up here.</span></p>
                    <form class="mt-4 mb-3 newsletter-form" role="form" action="//dionimercado.us14.list-manage.com/subscribe/post?u=c84d33d7d0a554f6988195f5b&amp;id=1833d9d4d6" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate="">
                      <div class="input-group input-group-lg px-5">
                        <input type="email" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Enter your email...">
                        <span class="input-group-btn d-none">
                        </span>
                      </div>
                      <div id="mce-responses">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                      </div>
                      <p class="d-block d-md-none">
                        <button type="submit" name="subscribe" id="mc-embedded-subscribe" class="btn btn-outline-light btn-sm text-uppercase mt-3 rounded-0">Subscribe to stay tunned</button>
                      </p>
                    </form>
                    <!-- <p><span class="read-more"><a class="text-right" href="<?php the_permalink() ?>">Subscribe to stay tunned</a></span></p> -->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section id="events" class="upcoming-events">
      <div class="page-header mb-4">
        <h1><?php _e( 'Upcoming Events' ) ?></h1>
        <div class="text-center">
          <i class="fas fa-star text-red"></i>
          <i class="fas fa-star text-red"></i>
          <i class="fas fa-star text-red"></i>
        </div>
      </div>
      <div class="container">
        <div class="mim-events owl-carousel owl-theme">
          <?php
          $query = new WP_Query( array(
            'post_type' => 'tribe_events',
            'showposts' => 9,
            // 'tax_query' => array(
          	// 	array(
          	// 		'taxonomy' => 'tribe_events_cat',
          	// 		'field'    => 'slug',
          	// 		'terms'    => is_page('harlem') ? 'harlem' : 'inwood',
          	// 	),
          	// ),
            // 'meta_query' => array(
            //   array(
            //     'key' => 'event_end_date_time',
            //     'value' => date( 'Y-m-d H:i', strtotime( "- 6 hours" ) ),
            //     'compare' => '>=',
            //     'type'  => 'DATETIME'
            //   )
            // ),
            // 'meta_key'  => 'event_date_time',
            // 'orderby' => 'meta_value',
            'order' => 'ASC'
          ) );
          while ( $query->have_posts() ) : $query->the_post();

          ?>
          <div class="item">
            <div class="boca-event wow zoomIn" data-wow-delay="0ms" data-wow-duration="1000ms">
              <?php
              $img_src = wp_get_attachment_image_url( get_post_thumbnail_id($post->ID), 'large' );
              $img_srcset = wp_get_attachment_image_srcset( get_post_thumbnail_id($post->ID), 'large' );
              ?>
              <a data-fancybox="flyer" href="<?php echo esc_url( $img_src ); ?>">
                <img src="<?php echo esc_url( $img_src ); ?>&resize=502,614"
                srcset="<?php echo esc_attr( $img_srcset ); ?>"
                sizes="(max-width: 50em) 87vw, 680px" class="w-100 h-auto" alt="<?php the_title() ?>" style="bject-fit: cover;">
              </a>
            </div>
          </div>
        <?php endwhile; ?>
        </div>
      </div>
    </section>

    <section class="resevation py-3 py-md-5">
      <div id="rsvp" class="container">
        <div class="row dart-no-gutter">
            <div class="col-md-8 ml-md-0 pr-md-0">
              <div class="resevation-block">
                <div class="heading">
                  <span class="dart-fs-48">Reservation</span>
                  <h1>online booking</h1>
                  <hr>
                </div>
                <div class="reservation-form">
                  <?php echo do_shortcode('[booking-form]') ?>
                </div>
              </div>
            </div>
            <div class="col-md-4 mr-md-0 pl-md-0">
              <div class="time-info time-info-outer">
                <div class="time-info-inner">
                  <div class="heading">
                    <span class="text-white">Time</span>
                    <h1>OPEN</h1>
                    <hr>
                  </div>
                  <div class="open-time dart-pt-20 text-center">
                    <p>
                      <?php
                      if( have_rows('schedule') ):
                        while ( have_rows('schedule') ) : the_row();
                      ?>
                      <span class="text-uppercase text-white"><?php the_sub_field('day_s') ?></span><br>
                      <span class="text-white-50"><?php the_sub_field('time') ?></span>  <br><br>
                      <?php
                        endwhile;
                      endif;
                      ?>
                    </p>
                    </div>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </section>

    <section id="gallery" class="text-center my-5 py-4">
      <div class="page-header mb-4">
        <h1><?php _e( 'Recent Updates' ) ?></h1>
        <div class="text-center">
          <i class="fas fa-star text-red"></i>
          <i class="fas fa-star text-red"></i>
          <i class="fas fa-star text-red"></i>
        </div>
      </div>
      <div class="container">
        <?php echo do_shortcode('[elfsight_instagram_feed id="1"]') ?>
      </div>
    </section>
<?php get_footer() ?>
