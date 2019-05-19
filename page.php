<?php get_header() ?>
<section id="page-content">
  <div class="container">
    <?php while( have_posts() ) : the_post(); the_content(); endwhile; ?>
  </div>
</section>
<?php get_footer() ?>
