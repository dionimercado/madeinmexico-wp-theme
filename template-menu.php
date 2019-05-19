<?php
/* Template Name: Menu */
get_header();
?>
<section id="guacamole-menu" class="text-center">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">

    <?php
    if( have_rows('food_menu', 146) ):
      while( have_rows('food_menu', 146) ): the_row();
        $menu_c = get_term_by('id', get_sub_field('category_name'), 'menuc');

    ?>
    <div class="menu-category">
      <h2>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <span><?php echo $menu_c->name ?> </span>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
        <i class="fa fa-star" aria-hidden="true"></i>
      </h2>
      <ul class="hlist group">
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
        <li>
          <h3><span><?php the_title() ?></span></h3>
          <div class="price"><span><?php echo get_post_meta($post->ID, '_price', true) ?></span></div>
          <div class="clearfix"></div>
          <div class="desc">
            <?php the_excerpt() ?>
          </div>
        </li>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
      </ul>
    </div>
    <div class="clearfix"></div>
  <?php endwhile; ?>
  <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php get_footer() ?>
