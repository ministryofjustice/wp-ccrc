<?php
/**
 * Initialize the custom Theme Options.
 */
add_action( 'admin_init', 'custom_theme_options' );

/**
 * Build the custom settings & update OptionTree.
 *
 * @return    void
 * @since     2.3.0
 */
function custom_theme_options() {

	/* OptionTree is not loaded yet */
	if ( !function_exists( 'ot_settings_id' ) )
		return false;

	/**
	 * Get a copy of the saved settings array. 
	 */
	$saved_settings = get_option( ot_settings_id(), array() );

	/**
	 * Custom settings array that will eventually be 
	 * passes to the OptionTree Settings API Class.
	 */

	// Main settings array
	$custom_settings = array(
		'sections' => array(
			array(
				'id' => 'footer',
				'title' => 'Footer'
			),
		),
		'settings' => array_merge(
				array(
			array(
				'id' => 'footer-text',
				'label' => 'Footer text',
				//'desc' => 'Descriptive text found in the footer',
				'type' => 'textarea',
				'section' => 'footer'
			),
			array(
				'id' => 'footer-address',
				'label' => 'Footer address',
				//'desc' => 'Address text found in the footer',
				'type' => 'textarea',
				'section' => 'footer'
			)
				)
		)
	);

	/* allow settings to be filtered before saving */
	$custom_settings = apply_filters( ot_settings_id() . '_args', $custom_settings );

	/* settings are not the same update the DB */
	if ( $saved_settings !== $custom_settings ) {
		update_option( ot_settings_id(), $custom_settings );
	}

	/* Lets OptionTree know the UI Builder is being overridden */
	global $ot_has_custom_theme_options;
	$ot_has_custom_theme_options = true;
}
