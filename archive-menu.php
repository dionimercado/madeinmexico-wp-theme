<?php get_header() ?>
<section id="guacamole-menu" class="text-center">
  <div class="container">
    <?php
    if( have_rows('food_menu', 146) ):
      while( have_rows('food_menu', 146) ): the_row();
        $menu_c = get_term_by('id', get_sub_field('category_name'), 'menuc');

    ?>
    <div class="row">
      <div class="col-xs-12">
        <div id="<?php echo $menu_c->slug ?>" class="page-header">
          <h1><?php echo $menu_c->name ?></h1>
          <div class="red-stars">
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
          </div>
          <p></p>
        </div>
      </div>
    </div>
    <div class="row">
      <?php
            $query_menu = new WP_Query( array(
              'post_type'       => 'menu',
              'showposts'       => -1,
              'order'           => 'ASC',
              'tax_query'       => array(
                array(
                  'taxonomy'    => 'menuc',
                  'field'       => 'slug',
                  'terms'       => $menu_c->slug
                )
              )
            ) );

            while( $query_menu->have_posts() ) :
              $query_menu->the_post();
              $thumb_menu = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
              ?>
              <div class="col-md-4 col-sm-6">
                <div class="product">
                  <h4><a href="#<?php echo $menu_c->slug ?>"><?php the_title() ?></a></h4>
                  <div class="hover">
                    <img src="<?php echo get_template_directory_uri() ?>/scripts/timthumb.php?src=<?php if( has_post_thumbnail() ) : echo $thumb_menu[0]; else : echo get_template_directory_uri() . "/images/no-image.jpg"; endif; ?>&amp;w=350&amp;h=260&amp;c=1" alt="<?php the_title() ?>" class="image-responsive">
                    <div class="desc">
                      <?php the_excerpt() ?>
                    </div>
                  </div>
                  <p class="price">$<?php echo get_post_meta($post->ID, '_price', true); ?></p>
                </div>
              </div>
            <?php
          endwhile;
          wp_reset_postdata();
          ?>
    </div>
    <?php endwhile; ?>
  <?php endif; ?>
  </div>
</section>
<?php get_footer() ?>
