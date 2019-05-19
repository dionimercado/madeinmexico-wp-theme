<?php
/**
 * Single Event Template
 * A single event. This displays the event title, description, meta, and
 * optionally, the Google map for the event.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

$events_label_singular = tribe_get_event_label_singular();
$events_label_plural = tribe_get_event_label_plural();

$event_id = get_the_ID();

?>

<div id="tribe-events-content" class="tribe-events-single">
    <div class="row">
        <div class="col-sm-8">
            <div id="tribe-events-content" class="tribe-events-single vevent hentry">

        	<!-- Notices -->
        	<?php //tribe_events_the_notices() ?>

						<!-- Event featured image, but exclude link -->
						<?php echo tribe_event_featured_image( $event_id, 'full', false ); ?>
						<div class="clearfix"></div>
						<div class="single-event-content" style="margin-top: 20px;">
            	<?php the_title( '<h1 class="tribe-events-single-event-title">', '</h1>' ); ?>
                <p style="background-color: #056347;color: #fff;padding: 0 6px;text-transform: uppercase;display: inline-block;margin-bottom: 8px;">
                    <span><strong><?php _e( 'Date: ' ) ?></strong> <?php echo date( "l, F j, Y", convert_datetime( get_post_meta( $event_id, '_EventStartDate', true ) ) ) ?></span>
                </p>
                <p style="margin: 0;">
                    <span><strong><?php _e( 'Venue: ' ) ?></strong> <a href="<?php echo get_the_permalink( 23 ) ?>"><?php echo get_the_title( get_post_meta( $event_id, '_EventVenueID', true ) ) ?></a></span>
                </p>
                <p style="margin: 0;">
                    <span><strong><?php _e( 'Location: ' ) ?></strong> <a href="<?php echo tribe_get_map_link( $event_id ) ?>" target="_blank"><?php echo tribe_get_full_address() ?></a></span>
                </p>
                <p style="margin: 0;">
                    <span><a href="<?php echo tribe_get_map_link( $event_id ) ?>" target="_blank" style="color: #fff;background-color: #b30000;padding: 1px 6px;text-transform: uppercase;font-size: 11px;"><i class="fa fa-map-marker" style="margin-right: 5px;" aria-hidden="true"></i><?php _e('Get Directions') ?></a></span>
                </p>
                <p style="margin: 0;">
                    <span><strong><?php _e( 'Phone: ' ) ?></strong> <a href="tel:<?php echo get_post_meta( get_post_meta( $event_id, '_EventVenueID', true ), '_VenuePhone', true ) ?>"><?php echo get_post_meta( get_post_meta( $event_id, '_EventVenueID', true ), '_VenuePhone', true ) ?></a></span>
                </p>
		        		<?php  if ( tribe_get_cost() ) :  ?>
		                <p style="margin: 0;">
		        			<span><strong><?php _e( 'Cost: ' ) ?></strong><?php echo tribe_get_cost( null, true ) ?></span>
		                </p>
		        		<?php endif; ?>

								<?php while ( have_posts() ) :  the_post(); ?>
									<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

										<!-- Event content -->
										<?php do_action( 'tribe_events_single_event_before_the_content' ) ?>
										<div class="tribe-events-single-event-description tribe-events-content">
											<?php the_content(); ?>
										</div>
										<div class="clearfix"></div>
										<!-- .tribe-events-single-event-description -->
										<?php do_action( 'tribe_events_single_event_after_the_content' ) ?>

									</div> <!-- #post-x -->
									<?php if ( get_post_type() == Tribe__Events__Main::POSTTYPE && tribe_get_option( 'showComments', false ) ) comments_template() ?>
								<?php endwhile; ?>

							</div>
							<div style="display: block; background-color: #f1f1f1; border: 1px solid #ddd; padding: 15px 15px 6px 15px; margin-top: 30px;text-align: center; margin-left: 0; margin-right: 0;">
								<span style="display: inline-block; width: 50px; text-transform: uppercase;position: relative; top: -15px;">Share: </span>
								<div style="display: inline-block;">
									<!-- Go to www.addthis.com/dashboard to customize your tools --> <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5315628029d58873"></script>
									<!-- Go to www.addthis.com/dashboard to customize your tools --> <div class="addthis_sharing_toolbox"></div>
								</div>
							</div>
						</div>
            </div>
						<div class="col-sm-4">
							<?php echo tribe_get_embedded_map( $event_id ) ?>
		            <div id="rsvp-form" style="background-color: #fff; margin-top: 0;">
									<!-- Event meta -->
									<?php do_action( 'tribe_events_single_event_before_the_meta' ) ?>
									<?php do_action( 'tribe_events_single_event_after_the_meta' ) ?>
		            </div>
		        </div>


        </div>
    </div>

</div><!-- #tribe-events-content -->
