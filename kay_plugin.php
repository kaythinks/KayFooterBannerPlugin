<?php
/**
 * Plugin Name:   KayBanner Wordpress Widget Plugin
 * Plugin URI:    https://twitter.com/bigk009
 * Description:   Adds a banner widget that displays images .
 * Version:       1.0
 * Author:        Kay Odole
 * Author URI:    https://twitter.com/bigk009
 */

// Register your assets during `wp_enqueue_scripts` hook.
function custom_register_scripts() {
    wp_register_style( 'kayplugin-css', plugins_url( 'kayplugin/css/plugin.css' ) );
    wp_register_script('kayplugin-js', plugins_url( 'kayplugin/js/plugin.js' ));
    
}
// Use wp_enqueue_scripts hook
add_action('wp_enqueue_scripts', 'custom_register_scripts');


class kay_plugin extends WP_Widget {
    // Set up the widget name and description.
  public function __construct() {
    $widget_options = array( 'classname' => 'kay_plugin', 'description' => 'Adds a banner widget that displays images ' );
    parent::__construct( 'kay_plugin', 'KayBanner Wordpress Widget Plugin', $widget_options );
  }

    public function widget( $args, $instance ) {
        // Enqueue needed assets inside the `widget` function.
        wp_enqueue_style('kayplugin-css');
        wp_enqueue_script('kayplugin-js');
        
        // Output widget contents.
        $title = apply_filters( 'widget_title', $instance[ 'title' ] );
        $imgurl1 = $instance[ 'imgurl1' ];
        $imgurl2 = $instance[ 'imgurl2' ];
        $imgurl3 = $instance[ 'imgurl3' ];
        $imgurl4 = $instance[ 'imgurl4' ];
        $imgurl5 = $instance[ 'imgurl5' ];
        $imgurl6 = $instance[ 'imgurl6' ];
        $imgurl7 = $instance[ 'imgurl7' ];

        $klinks1 = $instance[ 'klinks1' ];
        $klinks2 = $instance[ 'klinks2' ];
        $klinks3 = $instance[ 'klinks3' ];
        $klinks4 = $instance[ 'klinks4' ];
        $klinks5 = $instance[ 'klinks5' ];
        $klinks6 = $instance[ 'klinks6' ];
        
        echo $args['before_widget'] /*. $args['before_title'] . $title . $args['after_title'];*/ ?>
     <div id="fixed-banner">
       <img src="<?php echo $imgurl1; ?>" alt=""/>
        <div>
            <a href="<?php echo $klinks1; ?>" >
                <img src="<?php echo $imgurl2; ?>"  width="100%"/>
            </a>
        </div>
        <div>
            <a href="<?php echo $klinks2; ?>" >
                <img src="<?php echo $imgurl3; ?>"  width="100%"/>
            </a>
        </div>
        <div>
            <a href="<?php echo $klinks3; ?>" >
                <img src="<?php echo $imgurl4; ?>"  width="100%"/>
            </a>
        </div>
        <div>
            <a href="<?php echo $klinks4; ?>" >
                <img src="<?php echo $imgurl5 ?>"  width="100%"/>
            </a>
        </div>
        <div>
            <a href="<?php echo $klinks5; ?>" >
                <img src="<?php echo $imgurl6; ?>"  width="100%"/>
            </a>
        </div>
        <div>
            <a href="<?php echo $klinks6; ?>" >
                <img src="<?php echo $imgurl7; ?>"  width="100%"/>
            </a>
        </div>  
    </div>
    <div class="mobile-banner">
        <span class="banner-close">
            x           
        </span> 
        <div>
            <a href="<?php echo $klinks1; ?>" >
                <img src="<?php echo $imgurl2; ?>"  width="100%"/>
            </a>
        </div>
        <div>
            <a href="<?php echo $klinks2; ?>" >
                <img src="<?php echo $imgurl3; ?>"  width="100%"/>
            </a>
        </div>
        <div>
            <a href="<?php echo $klinks3; ?>" >
                <img src="<?php echo $imgurl4; ?>"  width="100%"/>
            </a>
        </div>
        <div>
            <a href="<?php echo $klinks4; ?>" >
                <img src="<?php echo $imgurl5; ?>"  width="100%"/>
            </a>
        </div>    
    </div>
        <?php echo $args['after_widget'];
    }

    public function form( $instance ) {
        $title = ! empty( $instance['title'] ) ? $instance['title'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'title' ); ?>">Title:</label>
      <input type="text" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>" />
    </p><?php
    $imgurl1 = ! empty( $instance['imgurl1'] ) ? $instance['imgurl1'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'imgurl1' ); ?>">First Image Url:</label>
      <input type="textarea" id="<?php echo $this->get_field_id( 'imgurl1' ); ?>" name="<?php echo $this->get_field_name( 'imgurl1' ); ?>" value="<?php echo esc_attr( $imgurl1 ); ?>" />
    </p><?php
    /*$klinks = ! empty( $instance['klinks'] ) ? $instance['klinks'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'klinks' ); ?>">First Image link:</label>
      <input type="textarea" id="<?php echo $this->get_field_id( 'klinks' ); ?>" name="<?php echo $this->get_field_name( 'klinks' ); ?>" value="<?php echo esc_attr( $klinks ); ?>" />
    </p><?php*/

    $imgurl2 = ! empty( $instance['imgurl2'] ) ? $instance['imgurl2'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'imgurl2' ); ?>">Second Image Url:</label>
      <input type="textarea" id="<?php echo $this->get_field_id( 'imgurl2' ); ?>" name="<?php echo $this->get_field_name( 'imgurl2' ); ?>" value="<?php echo esc_attr( $imgurl2 ); ?>" />
    </p><?php
    $klinks1 = ! empty( $instance['klinks1'] ) ? $instance['klinks1'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'klinks1' ); ?>">Second Image link:</label>
      <input type="textarea" id="<?php echo $this->get_field_id( 'klinks1' ); ?>" name="<?php echo $this->get_field_name( 'klinks1' ); ?>" value="<?php echo esc_attr( $klinks1 ); ?>" />
    </p><?php

    $imgurl3 = ! empty( $instance['imgurl3'] ) ? $instance['imgurl3'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'imgurl3' ); ?>">Third Image Url:</label>
      <input type="textarea" id="<?php echo $this->get_field_id( 'imgurl3' ); ?>" name="<?php echo $this->get_field_name( 'imgurl3' ); ?>" value="<?php echo esc_attr( $imgurl3 ); ?>" />
    </p><?php
    $klinks2 = ! empty( $instance['klinks2'] ) ? $instance['klinks2'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'klinks2' ); ?>">Third Image link:</label>
      <input type="textarea" id="<?php echo $this->get_field_id( 'klinks2' ); ?>" name="<?php echo $this->get_field_name( 'klinks2' ); ?>" value="<?php echo esc_attr( $klinks2 ); ?>" />
    </p><?php

    $imgurl4 = ! empty( $instance['imgurl4'] ) ? $instance['imgurl4'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'imgurl4' ); ?>">Fourth Image Url:</label>
      <input type="textarea" id="<?php echo $this->get_field_id( 'imgurl4' ); ?>" name="<?php echo $this->get_field_name( 'imgurl4' ); ?>" value="<?php echo esc_attr( $imgurl4 ); ?>" />
    </p><?php
    $klinks3 = ! empty( $instance['klinks3'] ) ? $instance['klinks3'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'klinks3' ); ?>">Fourth Image link:</label>
      <input type="textarea" id="<?php echo $this->get_field_id( 'klinks3' ); ?>" name="<?php echo $this->get_field_name( 'klinks3' ); ?>" value="<?php echo esc_attr( $klinks3 ); ?>" />
    </p><?php

    $imgurl5 = ! empty( $instance['imgurl5'] ) ? $instance['imgurl5'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'imgurl5' ); ?>">Fifth Image Url:</label>
      <input type="textarea" id="<?php echo $this->get_field_id( 'imgurl5' ); ?>" name="<?php echo $this->get_field_name( 'imgurl5' ); ?>" value="<?php echo esc_attr( $imgurl5 ); ?>" />
    </p><?php
    $klinks4 = ! empty( $instance['klinks4'] ) ? $instance['klinks4'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'klinks4' ); ?>">Fifth Image link:</label>
      <input type="textarea" id="<?php echo $this->get_field_id( 'klinks4' ); ?>" name="<?php echo $this->get_field_name( 'klinks4' ); ?>" value="<?php echo esc_attr( $klinks4 ); ?>" />
    </p><?php

    $imgurl6 = ! empty( $instance['imgurl6'] ) ? $instance['imgurl6'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'imgurl6' ); ?>">Sixth Image Url:</label>
      <input type="textarea" id="<?php echo $this->get_field_id( 'imgurl6' ); ?>" name="<?php echo $this->get_field_name( 'imgurl6' ); ?>" value="<?php echo esc_attr( $imgurl6 ); ?>" />
    </p><?php
    $klinks5 = ! empty( $instance['klinks5'] ) ? $instance['klinks5'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'klinks5' ); ?>">Sixth Image link:</label>
      <input type="textarea" id="<?php echo $this->get_field_id( 'klinks5' ); ?>" name="<?php echo $this->get_field_name( 'klinks5' ); ?>" value="<?php echo esc_attr( $klinks5 ); ?>" />
    </p><?php

    $imgurl7 = ! empty( $instance['imgurl7'] ) ? $instance['imgurl7'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'imgurl7' ); ?>">Seventh Image Url:</label>
      <input type="textarea" id="<?php echo $this->get_field_id( 'imgurl7' ); ?>" name="<?php echo $this->get_field_name( 'imgurl7' ); ?>" value="<?php echo esc_attr( $imgurl7 ); ?>" />
    </p><?php
    $klinks6 = ! empty( $instance['klinks6'] ) ? $instance['klinks6'] : ''; ?>
    <p>
      <label for="<?php echo $this->get_field_id( 'klinks6' ); ?>">Seventh Image link:</label>
      <input type="textarea" id="<?php echo $this->get_field_id( 'klinks6' ); ?>" name="<?php echo $this->get_field_name( 'klinks6' ); ?>" value="<?php echo esc_attr( $klinks6 ); ?>" />
    </p><?php
    }

    public function update( $new_instance, $old_instance ) {
        $instance = $old_instance;
    $instance[ 'title' ] = strip_tags( $new_instance[ 'title' ] );
    $instance[ 'imgurl1' ] = strip_tags( $new_instance[ 'imgurl1' ] );
    $instance[ 'imgurl2' ] = strip_tags( $new_instance[ 'imgurl2' ] );
    $instance[ 'imgurl3' ] = strip_tags( $new_instance[ 'imgurl3' ] );
    $instance[ 'imgurl4' ] = strip_tags( $new_instance[ 'imgurl4' ] );
    $instance[ 'imgurl5' ] = strip_tags( $new_instance[ 'imgurl5' ] );
    $instance[ 'imgurl6' ] = strip_tags( $new_instance[ 'imgurl6' ] );
    $instance[ 'imgurl7' ] = strip_tags( $new_instance[ 'imgurl7' ] );
    $instance[ 'klinks' ] = strip_tags( $new_instance[ 'klinks' ] );
    $instance[ 'klinks1' ] = strip_tags( $new_instance[ 'klinks1' ] );
    $instance[ 'klinks2' ] = strip_tags( $new_instance[ 'klinks2' ] );
    $instance[ 'klinks3' ] = strip_tags( $new_instance[ 'klinks3' ] );
    $instance[ 'klinks4' ] = strip_tags( $new_instance[ 'klinks4' ] );
    $instance[ 'klinks5' ] = strip_tags( $new_instance[ 'klinks5' ] );
    $instance[ 'klinks6' ] = strip_tags( $new_instance[ 'klinks6' ] );
    return $instance;
    }
}

// Register and load the widget
function kayplugin_load_widget() {
    register_widget( 'kay_plugin' );
}
add_action( 'widgets_init', 'kayplugin_load_widget' );

?>
