<?php

/**
 * Shortcode: [property_attributes]
 *
 * @since 2.0.5
 */
namespace UsabilityDynamics\WPP {

  if( !class_exists( 'UsabilityDynamics\WPP\Property_Attributes_Shortcode' ) ) {

    class Property_Attributes_Shortcode extends WPP_Shortcode {

      /**
       * init
       *
       * @todo: Describe params
       */
      public function __construct() {

        $options = array(
            'id' => 'property_attributes',
            'params' => array(
              'sort_by_groups' => array(),
              'display' => array(),
              'show_true_as_image' => array(),
              'make_link' => array(),
              'hide_false' => array(),
              'first_alt' => array(),
              'return_blank' => array(),
              'include' => array(),
              'exclude' => array(),
              'include_clsf' => array(),
              'title' => array(),
              'stats_prefix' => array()
            ),
            'description' => __( 'Renders Property Attributes' ),
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
          'sort_by_groups' => 'true',
          'display' => 'list',
          'show_true_as_image' => 'false',
          'make_link' => 'true',
          'hide_false' => 'false',
          'first_alt' => 'false',
          'return_blank' => 'false',
          'include' => '',
          'exclude' => '',
          'include_clsf' => 'all',
          'title' => 'true',
          'stats_prefix' => sanitize_key( \WPP_F::property_label( 'singular' ) )
        ), $atts );

        return $this->get_template( 'property_attributes', $data, false );

      }

    }

    /**
     * Register
     */
    new Property_Attributes_Shortcode();

  }

}