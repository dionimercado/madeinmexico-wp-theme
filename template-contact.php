<?php /* Template Name: Contact Us */ ?>
<?php get_header(); ?>
<div class="google-map" style="margin-bottom: 0;">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3017.100893987977!2d-73.91893874864647!3d40.86965997921354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f3f3929ce751%3A0x8d31843c8e884506!2sGuacamole+Taqueria!5e0!3m2!1ses!2sus!4v1482369346948" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<?php while( have_posts() ) : the_post(); ?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div id="page-content" style="margin-top: 40px;">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5">
                        <div class="contact-info">
                            <img class="img-responsive" src="<?php echo get_template_directory_uri() ?>/images/logo.png" style="display: inline-block; width: 60%;">
                            <ul>
                              <li>
                                <h4>New York</h4>
                                <?php if( get_post_meta( $post->ID, 'address', true ) ) : ?><p><?php echo get_post_meta( $post->ID, 'address', true ) ?></p><?php endif; ?>
                                <p><strong>Phone: </strong><?php if( get_post_meta( $post->ID, 'phone', true ) ) : ?><a href="tel:<?php echo get_post_meta( $post->ID, 'phone', true ) ?>"><?php echo get_post_meta( $post->ID, 'phone', true ) ?></a><?php endif; ?></p>
                                <p><strong>Email: </strong><?php if( get_post_meta( $post->ID, 'email', true ) ) : ?><a href="mailto:<?php echo get_post_meta( $post->ID, 'email', true ) ?>"><?php echo get_post_meta( $post->ID, 'email', true ) ?></a><?php endif; ?></p>
                              </li>
                              <li>
                                <h4>Opening Hours</h4>
                                <?php if( get_post_meta( $post->ID, 'schedule', true ) ) : ?><p><?php echo get_post_meta( $post->ID, 'schedule', true ) ?></p><?php endif; ?>
                              </li>
                            </ul>
                            <?php
                                // $rows = get_field('sucursales');
                                //
                                // foreach ( $rows as $row ){
                                //     echo "<ul><li>";
                                //     //print_r($row);
                                //     if( $row['sucursal'] ) : echo '<h4>'.$row['sucursal'].'</h2>'; endif;
                                //     if( $row['direccion'] ) : echo '<p><!--<strong>Direcci&oacute;n: </strong>-->'.$row['direccion'].'</p>'; endif;
                                //     if( $row['telefono'] ) : echo '<p><strong>Tel&eacute;fono: </strong>'.$row['telefono'].'</p>'; endif;
                                //     if( $row['fax'] ) : echo '<p><strong>Fax: </strong>'.$row['fax'].'</p>'; endif;
                                //     if( $row['email'] ) : echo '<p><strong>Email: </strong><a href="mailto:'.$row['email'].'">'.$row['email'].'</p>'; endif;
                                //     echo "</li></ul>";
                                // }
                            ?>
                            <h1>Get in touch</h1>
                            <div class="social-icons">
                                <?php if( get_post_meta( $post->ID, 'facebook', true ) ) : ?><a href="<?php echo get_post_meta( $post->ID, 'facebook', true ) ?>" target="_blank"><i class="fa fa-facebook"></i></a><?php endif; ?>
                                <?php if( get_post_meta( $post->ID, 'twitter', true ) ) : ?><a href="<?php echo get_post_meta( $post->ID, 'twitter', true ) ?>" target="_blank"><i class="fa fa-twitter"></i></a><?php endif; ?>
                                <?php if( get_post_meta( $post->ID, 'instagram', true ) ) : ?><a href="<?php echo get_post_meta( $post->ID, 'instagram', true ) ?>" target="_blank"><i class="fa fa-instagram"></i></a><?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-7">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php endwhile; ?>

<?php get_footer(); ?>
