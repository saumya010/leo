<?php
/**
 * leo Theme Customizer
 *
 * @package leo
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function leo_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
        class leo_customize_textarea_control extends WP_Customize_Control {
            public $type = 'textarea';
            public function render_content() {
            ?>
    <label>
        <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>
        <textarea rows="5" style="width:98%;" <?php $this->link(); ?>>
            <?php echo esc_textarea($this->value()); ?>
        </textarea>
    </label>
    <?php
            }
        }
        //new section slider        
        $wp_customize->add_section('leo_slider_image_section', array(
            'title' => __('Slider Image Settings', 'leo'),
            'priority' => 10,
        ));
        $wp_customize->add_setting('leo_slider_image_1',array('default' => '',
    'sanitize_callback' => 'esc_url_raw'));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'leo_slider_image_1', array(
                'label' => __('Slider image 1','leo'),
                'section' => 'leo_slider_image_section',
                'settings' => 'leo_slider_image_1',
                'priority' => 1,
                )
            )
        );
        $wp_customize->add_setting('leo_slider_image_2',array ( 'default' => '',
    'sanitize_callback' => 'esc_url_raw'
    ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'leo_slider_image_2', array(
                'label' => __('Slider image 2','leo'),
                'section' => 'leo_slider_image_section',
                'settings' => 'leo_slider_image_2',
                'priority' => 2,
                )
            )
        );
        $wp_customize->add_setting('leo_slider_image_3',array ( 'default' => '',
    'sanitize_callback' => 'esc_url_raw'
    ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'leo_slider_image_3', array(
                'label' => __('Slider image 3','leo'),
                'section' => 'leo_slider_image_section',
                'settings' => 'leo_slider_image_3',
                'priority' => 3,
                )
            )
        );
        $wp_customize->add_setting('leo_slider_image_4',array ( 'default' => '',
    'sanitize_callback' => 'esc_url_raw'
    ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'leo_slider_image_4', array(
                'label' => __('Slider image 4','leo'),
                'section' => 'leo_slider_image_section',
                'settings' => 'leo_slider_image_4',
                'priority' => 4,
                )
            )
        );
        //new section contact us
        $wp_customize->add_section('leo_contactus', array(
            'title' => __('Contact us banner', 'leo'),
            'priority' => 11,
        ));
        $wp_customize->add_setting('leo_contact_heading', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('leo_contact_heading', array(
            'label' => __('Heading', 'leo'),
            'section' => 'leo_contactus',
            'settings' => 'leo_contact_heading',
            'priority' => 1,
        ));
        $wp_customize->add_setting('leo_contact_description', array('default' => '',
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control(new leo_customize_textarea_control($wp_customize, 'leo_contact_description', array(
            'label' => __('Description', 'leo'),
            'section' => 'leo_contactus',
            'settings' => 'leo_contact_description',
            'priority' => 2,
        )));
        $wp_customize->add_setting('leo_contact_link_text', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('leo_contact_link_text', array(
            'label' => __('Link text', 'leo'),
            'section' => 'leo_contactus',
            'settings' => 'leo_contact_link_text',
            'priority' => 3,
        ));
        $wp_customize->add_setting('leo_contact_link', array(
            'sanitize_callback' => 'esc_url_raw',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('leo_contact_link', array(
            'label' => __('Link to page', 'leo'),
            'section' => 'leo_contactus',
            'settings' => 'leo_contact_link',
            'priority' => 4,
        ));
        //new section portfolio        
        $wp_customize->add_section('leo_portfolio_image_section', array(
            'title' => __('Portfolio Image Settings', 'leo'),
            'priority' => 12,
        ));
        $wp_customize->add_setting('leo_portfolio_heading', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('leo_portfolio_heading', array(
            'label' => __('Heading', 'leo'),
            'section' => 'leo_portfolio_image_section',
            'settings' => 'leo_portfolio_heading',
            'priority' => 1,
        ));
        $wp_customize->add_setting('leo_portfolio_image_1',array ( 'default' => '',
    'sanitize_callback' => 'esc_url_raw'
    ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'leo_portfolio_image_1', array(
                'label' => __('Portfolio image 1','leo'),
                'section' => 'leo_portfolio_image_section',
                'settings' => 'leo_portfolio_image_1',
                'priority' => 2,
                )
            )
        );
        $wp_customize->add_setting('leo_portfolio_image_2',array ( 'default' => '',
    'sanitize_callback' => 'esc_url_raw'
    ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'leo_portfolio_image_2', array(
                'label' => __('Portfolio image 2','leo'),
                'section' => 'leo_portfolio_image_section',
                'settings' => 'leo_portfolio_image_2',
                'priority' => 3,
                )
            )
        );
        $wp_customize->add_setting('leo_portfolio_image_3',array ( 'default' => '',
    'sanitize_callback' => 'esc_url_raw'
    ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'leo_portfolio_image_3', array(
                'label' => __('Portfolio image 3','leo'),
                'section' => 'leo_portfolio_image_section',
                'settings' => 'leo_portfolio_image_3',
                'priority' => 4,
                )
            )
        );
        $wp_customize->add_setting('leo_portfolio_image_4',array ( 'default' => '',
    'sanitize_callback' => 'esc_url_raw'
    ));

        $wp_customize->add_control(
            new WP_Customize_Image_Control(
            $wp_customize, 'leo_portfolio_image_4', array(
                'label' => __('Portfolio image 4','leo'),
                'section' => 'leo_portfolio_image_section',
                'settings' => 'leo_portfolio_image_4',
                'priority' => 5,
                )
            )
        );
	//new section blog       
        $wp_customize->add_section('leo_blog_section', array(
            'title' => __('Blog Settings', 'leo'),
            'priority' => 13,
        ));
        $wp_customize->add_setting('leo_blog_heading', array(
            'sanitize_callback' => 'sanitize_text_field',
            'transport' => 'postMessage',
        ));

        $wp_customize->add_control('leo_blog_heading', array(
            'label' => __('Heading', 'leo'),
            'section' => 'leo_blog_section',
            'settings' => 'leo_blog_heading',
            'priority' => 1,
        ));
}
add_action( 'customize_register', 'leo_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function leo_customize_preview_js() {
	wp_enqueue_script( 'leo_customizer', get_template_directory_uri() . '/includes/js/customizer.js', array( 'customize-preview' ), rand(), true );
}
add_action( 'customize_preview_init', 'leo_customize_preview_js' );