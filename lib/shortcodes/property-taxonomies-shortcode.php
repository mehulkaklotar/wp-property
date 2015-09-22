<?php

/**
 * Shortcode: [property_taxonomies]
 *
 * @since 2.0.5
 */
namespace UsabilityDynamics\WPP {

  if( !class_exists( 'UsabilityDynamics\WPP\Property_Taxonomies_Shortcode' ) ) {

    class Property_Taxonomies_Shortcode extends WPP_Shortcode {

      /**
       * init
       */
      public function __construct() {

        $options = array(
            'id' => 'property_taxonomies',
            'params' => array(
              'format' => array(
                'name' => __( 'Output format', ud_get_wp_property()->domain ),
                'description' => __( 'Set format for terms output.', ud_get_wp_property()->domain ),
              ),
              'links' => array(
                'name' => __( 'Links', ud_get_wp_property()->domain ),
                'description' => __( 'Make links of terms or not.', ud_get_wp_property()->domain ),
              )
            ),
            'description' => __( 'Renders Property Taxonomy Terms' ),
            'group' => 'WP-Property'
        );

        parent::__construct( $options );
      }

      /**
       * @param string $atts
       * @return string|void
       */
      public function call( $atts = "" ) {

        $data = shortcode_atts( array(
          'type' => 'property_feature',
          'format' => 'comma',
          'links' => true ),
        $atts );

        return $this->get_template( 'property_taxonomies', $data, false );

      }

    }

    /**
     * Register
     */
    new Property_Taxonomies_Shortcode();

  }

}