<?php
/**
 * Plugin Name: WordPress Google Translate
 * Plugin URI: http://parmarkartik19.wordpress.com
 * Description: A light weight plugin to translate your WordPress website to other languages.
 * Version: 1.0
 * Author: Kartik Parmar
 * Author URI: https://twitter.com/kartikparmar19
 * Requires PHP: 5.6
 * WC requires at least: 3.0.0
 * WC tested up to: 3.2.0
 * License: GPL2
 *
 * @package WPGT
 */

if ( ! defined( 'ABSPATH' ) ) exit;

/**
 * Register and load the widget
 *
 * @since 1.0
 * @hook widgets_init 
 */

function wpgt_load_widget() {
    register_widget( 'wpgt_widget' );
}

add_action( 'widgets_init', 'wpgt_load_widget' );

if ( !class_exists( 'wpgt_widget' ) ) {
 
/**
 * Creating the widget
 * 
 * @since 1.0
 */

class wpgt_widget extends WP_Widget {

	/**
	 * Default Constructor
	 * 
	 * @since 1.0
	 */
 
	function __construct() {
		parent::__construct(	'wpgt_google_translate', // Base ID of your widget 
								__('Google Translate', 'wpgt_widget'), // Widget name will appear in UI
								array( 'description' => __( 'Translate your WordPress Website', 'wpgt_widget' ), ) // Widget description
						    );
	}
 
	/**
	 * Creating widget front-end
	 * 
	 * @param array $args
	 * @param array $instance
	 * @since 1.0
	 */
	 
	public function widget( $args, $instance ) {
		
		$title = apply_filters( 'wpgt_widget_title', $instance['title'] );
		 
		// before and after widget arguments are defined by themes
		echo $args['before_widget'];
		
		if ( ! empty( $title ) )
		echo $args['before_title'] . $title . $args['after_title'];


		if ( isset( $instance['wpgt_translate'] ) && $instance['wpgt_translate'] == "on" ) {
			wpgt_widget::wpgt_language_field();			
		}
		
		echo $args['after_widget'];
	} 

	/**
	 * Widget Backend
	 * 
	 * @param array $instance
	 * @since 1.0
	 */

	public function form( $instance ) {
		
		if ( isset( $instance[ 'title' ] ) ) {
			$title = $instance[ 'title' ];
		}
		else {
			$title = __( 'Language', 'wpgt_widget' );
		}

		// Widget admin form
		?>
		<p>
			<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php __( 'Title:', 'wpgt_widget' ); ?></label> 
			<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo esc_attr( $title ); ?>" />
		</p>

		<p>
			<label for="<?php echo $this->get_field_id( 'wpgt_translate' ); ?>"><?php _e( 'Enable Google Translator:', 'wpgt_widget' ) ?></label>
        	<?php
            
	            $wpgt_translate = '';
	            if ( isset ( $instance['wpgt_translate'] ) && $instance['wpgt_translate'] == 'on' ) {
	                $wpgt_translate = 'checked';
			    }
			?>			
			<input class="checkbox" type="checkbox" <?php echo $wpgt_translate;?> id="<?php echo esc_attr( $this->get_field_id('wpgt_translate') ); ?>" name="<?php echo esc_attr( $this->get_field_name('wpgt_translate') ); ?>" />
		</p>
		<?php 
	}

	/**
	 * Updating widget replacing old instances with new
	 * 
	 * @param array $new_instance
	 * @param array $old_instance
	 * @since 1.0
	 */

	public function update( $new_instance, $old_instance ) {
		$instance = array();

		$instance['title'] = ( ! empty( $new_instance['title'] ) ) ? strip_tags( $new_instance['title'] ) : '';

		$instance['wpgt_translate'] = ( ! empty( $new_instance['wpgt_translate'] ) ) ? strip_tags( $new_instance['wpgt_translate'] ) : '';
		
		return $instance;
	}

	/**
	 * Display language selection dropdown on front end
	 * 
	 * @since 1.0
	 */

	public static function wpgt_language_field() {
		?>
		<div id="google_translate_element"></div>

		<script type="text/javascript">
		function googleTranslateElementInit() {
		  new google.translate.TranslateElement({pageLanguage: '<?php echo get_locale(); ?>'}, 'google_translate_element');
		}

		jQuery(window).load(function () {
		  jQuery(".goog-logo-link").parent().remove();
		  jQuery(".goog-te-gadget").html(
		    //jQuery(".goog-te-gadget").html().replace('Powered by ', '')
		  );
		  jQuery( ".goog-te-combo" ).css( "width", "100%" );
		  jQuery( ".goog-te-combo" ).css( "padding", "5" );
		});
		</script>

		<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
		<style type="text/javascript">
			.goog-logo-link{
				display: none;
			}
		</style>
		<?php
	}
}

}