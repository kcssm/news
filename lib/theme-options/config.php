<?php

/**
 * Config Theme Options class
 *
 * @package _gpp
 * @since 1.0
 */

// Require the main plugin class
if( ! class_exists( 'GPPThemeOptions' ) ) {
	require_once( dirname( __FILE__ ) . '/inc/class-theme-options.php' );
}

// Call new class
$theme_options = new GPPThemeOptions;

// True for section tabs, false for no tabs
$theme_options->tabbed = true;

// Sections
$theme_options->sections[ 'default' ] = __( 'Default', '_gpp' );
$theme_options->sections[ 'example' ] = __( 'Example Fields', '_gpp' );
$theme_options->sections[ 'slideshow' ] = __( 'Slideshow', '_gpp' );

// Options
$theme_options->settings[ 'logo' ] = array(
			'section' => 'default',
			'title'   => __( 'Logo', '_gpp' ),
			'desc'    => __( 'Upload a logo in PNG or JPG format.', '_gpp' ),
			'type'    => 'upload',
			'std'     => ''
		);

$theme_options->settings[ 'favicon' ] = array(
			'section' => 'default',
			'title'   => __( 'Favicon', '_gpp' ),
			'desc'    => __( 'Upload a favicon in PNG format sized to 16px by 16px.', '_gpp' ),
			'type'    => 'upload',
			'std'     => ''
		);

$theme_options->settings[ 'font' ] = array(
			'section' => 'default',
			'title'   => __( 'Headline Font', '_gpp' ),
			'desc'    => __( 'Select a font to use for your headlines.', '_gpp' ),
			'type'    => 'select',
			'std'     => '',
			'choices' => gpp_font_array()
		);

$theme_options->settings[ 'font_alt' ] = array(
			'section' => 'default',
			'title'   => __( 'Body Font', '_gpp' ),
			'desc'    => __( 'Select a font to use for your paragraphs.', '_gpp' ),
			'type'    => 'select',
			'std'     => '',
			'choices' => gpp_font_array()
		);

$theme_options->settings[ 'color' ] = array(
			'section' => 'default',
			'title'   => __( 'Select a Color', '_gpp' ),
			'desc'    => __( 'Choose a color for your site.', '_gpp' ),
			'type'    => 'select',
			'std'     => 'light',
			'choices' => array(
				'light' => 'Light',
				'dark' => 'Dark'
				)
		);

$theme_options->settings[ 'layout' ] = array(
			'section' => 'default',
			'title'   => __( 'Layout', '_gpp' ),
			'desc'    => __( 'Select an image orientation layout.', '_gpp' ),
			'type'    => 'radio_img',
			'std'     => '1',
			'choices' => array(
							'1' => array( 'title' => 'Horizontal', 'img' => get_template_directory_uri() . '/lib/theme-options/img/horizontal.png' ),
							'2' => array( 'title' => 'Square', 'img' 	=> get_template_directory_uri() . '/lib/theme-options/img/square.png' ),
							'3' => array( 'title' => 'Vertical', 'img' 	=> get_template_directory_uri() . '/lib/theme-options/img/vertical.png' )
			) // Must provide key => value(array:title|img) pairs for radio options
		);

$theme_options->settings[ 'css' ] = array(
			'section' => 'default',
			'title'   => __( 'Custom CSS', '_gpp' ),
			'desc'    => __( 'Add some custom CSS to quickly change the design of your site.', '_gpp' ),
			'type'    => 'textarea',
			'std'     => 'my standard stuff'
		);

$theme_options->settings[ 'example_text' ] = array(
			'section' => 'example',
			'title'   => __( 'Text', '_gpp' ),
			'desc'    => __( 'An example text field.', '_gpp' ),
			'type'    => 'text',
			'std'     => 'my standard value'
		);

$theme_options->settings[ 'example_textarea' ] = array(
			'section' => 'example',
			'title'   => __( 'Textarea', '_gpp' ),
			'desc'    => __( 'An example textarea.', '_gpp' ),
			'type'    => 'textarea',
			'std'     => 'This is a std value'
		);

$theme_options->settings[ 'example_color' ] = array(
			'section' => 'example',
			'title'   => __( 'Color Picker', '_gpp' ),
			'desc'    => __( 'An example color picker.', '_gpp' ),
			'type'    => 'color',
			'std'     => ''
		);

$theme_options->settings[ 'example_color_2' ] = array(
			'section' => 'example',
			'title'   => __( 'Color Picker 2', '_gpp' ),
			'desc'    => __( 'An example color picker 2.', '_gpp' ),
			'type'    => 'color',
			'std'     => ''
		);

$theme_options->settings[ 'example_font' ] = array(
			'section' => 'example',
			'title'   => __( 'Google Fonts', '_gpp' ),
			'desc'    => __( 'An example Google Font select.', '_gpp' ),
			'type'    => 'select',
			'std'     => '',
			'choices' => gpp_font_array()
		);

$theme_options->settings[ 'example_heading' ] = array(
			'section' => 'example',
			'title'   => __( 'Heading', '_gpp' ),
			'desc'    => __( 'Heading. Only desc used', '_gpp' ),
			'type'    => 'heading',
			'std'     => ''
		);

$theme_options->settings[ 'example_checkbox' ] = array(
			'section' => 'example',
			'title'   => __( 'Checkbox', '_gpp' ),
			'desc'    => __( 'An example checkbox.', '_gpp' ),
			'type'    => 'checkbox',
			'std'     => ''
		);

$theme_options->settings[ 'example_select' ] = array(
			'section' => 'example',
			'title'   => __( 'Select', '_gpp' ),
			'desc'    => __( 'An example select.', '_gpp' ),
			'type'    => 'select',
			'std'     => '',
			'choices' => array(
				'first' => 'First Choice',
				'second' => 'Second Choice',
				'third' => 'Third Choice'
				),
			'class'		=>	'pid example_checkbox'
		);

$theme_options->settings[ 'example_categories' ] = array(
			'section' => 'example',
			'title'   => __( 'Categories', '_gpp' ),
			'desc'    => __( 'An example Category select.', '_gpp' ),
			'std'     => '',
			'type'    => 'select',
			'choices' => $theme_options->getCategories(),
			'class'		=>	'pid example_checkbox'
		);

$theme_options->settings[ 'example_pages' ] = array(
			'section' => 'example',
			'title'   => __( 'Pages', '_gpp' ),
			'desc'    => __( 'An example Page select.', '_gpp' ),
			'std'     => '',
			'type'    => 'select',
			'choices' => $theme_options->getPages(),
			'class'		=>	'pid example_checkbox'
		);

$theme_options->settings[ 'example_multiselect' ] = array(
			'section' => 'example',
			'title'   => __( 'Multiselect', '_gpp' ),
			'desc'    => __( 'An example multiselect.', '_gpp' ),
			'type'    => 'multiselect',
			'std'     => array('first','second'),
			'choices' => array(
				'first' => 'First Choice',
				'second' => 'Second Choice',
				'third' => 'Third Choice'
				)
		);

$theme_options->settings[ 'example_multicheck' ] = array(
			'section' => 'example',
			'title'   => __( 'Multiselect', '_gpp' ),
			'desc'    => __( 'An example multiselect.', '_gpp' ),
			'type'    => 'multicheck',
			'std'     => array('first','third'),
			'choices' => array(
				'first' => 'First Choice',
				'second' => 'Second Choice',
				'third' => 'Third Choice'
				)
		);

$theme_options->settings[ 'example_radio' ] = array(
			'section' => 'example',
			'title'   => __( 'Radio', '_gpp' ),
			'desc'    => __( 'An example radio.', '_gpp' ),
			'type'    => 'radio',
			'std'     => 'first',
			'choices' => array(
				'first' => 'First Choice',
				'second' => 'Second Choice',
				'third' => 'Third Choice'
				)
		);

$theme_options->settings[ 'example_radio_img' ] = array(
			'section' => 'example',
			'title'   => __( 'Radio Images', '_gpp' ),
			'desc'    => __( 'An example radio images.', '_gpp' ),
			'type'    => 'radio_img',
			'std'     => '2',
			'choices' => array(
							'1' => array( 'title' => 'Opt 1', 'img' => 'images/align-none.png' ),
							'2' => array( 'title' => 'Opt 2', 'img' => 'images/align-left.png' ),
							'3' => array( 'title' => 'Opt 3', 'img' => 'images/align-center.png' ),
							'4' => array( 'title' => 'Opt 4', 'img' => 'images/align-right.png' )
								)//Must provide key => value(array:title|img) pairs for radio options
		);

$theme_options->settings[ 'example_radio_img_custom' ] = array(
			'section' => 'example',
			'title'   => __( 'Radio Images Custom', '_gpp' ),
			'desc'    => __( 'An example of custom radio images.', '_gpp' ),
			'type'    => 'radio_img',
			'std'     => '2',
			'choices' => array(
							'1' => array( 'title' => 'Opt 1', 'img' => get_template_directory_uri() . '/lib/theme-options/img/1col.png' ),
							'2' => array( 'title' => 'Opt 2', 'img' => get_template_directory_uri() . '/lib/theme-options/img/2cl.png' ),
							'3' => array( 'title' => 'Opt 3', 'img' => get_template_directory_uri() . '/lib/theme-options/img/2cr.png' )
			) // Must provide key => value(array:title|img) pairs for radio options
		);

$theme_options->settings[ 'example_checkbox1' ] = array(
			'section' => 'example',
			'title'   => __( 'Checkbox', '_gpp' ),
			'desc'    => __( 'An example checkbox.', '_gpp' ),
			'type'    => 'checkbox',
			'std'     => '1'
		);

$theme_options->settings[ 'example_password' ] = array(
			'section' => 'example',
			'title'   => __( 'Password', '_gpp' ),
			'desc'    => __( 'An example password field.', '_gpp' ),
			'type'    => 'password',
			'std'     => '',
			'class'		=>	'pid example_checkbox1'
		);

$theme_options->settings[ 'example_html' ] = array(
			'section' => 'example',
			'title'   => __( 'HTML', '_gpp' ),
			'desc'    => __( 'An example html field.', '_gpp' ),
			'type'    => 'html',
			'std'     => '',
			'class'		=>	'pid example_checkbox1'
		);

$theme_options->settings[ 'example_upload' ] = array(
			'section' => 'example',
			'title'   => __( 'Upload', '_gpp' ),
			'desc'    => __( 'An example upload field.', '_gpp' ),
			'type'    => 'upload',
			'std'     => '',
			'class'		=>	'pid example_checkbox1'
		);

$theme_options->settings[ 'slideshow' ] = array(
    'section' => 'slideshow',
    'title'   => __( 'Slideshow Images', '_gpp' ),
    'desc'    => __( 'Upload slider Images. Drag and drop to reorganize.', '_gpp' ),
    'type'    => 'slide',
    'std'     => ''
);

$theme_options->settings[ 'file' ] = array(
	'section' => 'default',
	'title' => __( 'Single File Upload', '_gpp'),
	'desc' => __( 'This is used to upload a single image.', '_gpp' ),
	'type' => 'file'
	);

/**
 * Set theme options above to global theme settings
 * @since _gpp 1.0
 */
global $gpp_settings;
$gpp_settings = $theme_options->settings;


/**
 * Items that need to be ran during "theme activation".
 * @since _gpp 1.0
 */
add_action( 'load-themes.php', 'gpp_theme_activation' );

function gpp_theme_activation() {

	global $pagenow, $gpp_settings;

	$gpp_theme = new GPPThemeOptions;

	$new_version = $gpp_theme->theme[ 'version' ]; // activating theme version
	$version_var = '_gpp_version';
	$version = get_option( $version_var ); // already existing theme version

	update_option( $version_var, $new_version );

	//If the theme option is not already set, then initialize the settings.
	if ( ! get_option( '_gpp_options' ) ) {
		$gpp_theme->initializeSettings( $gpp_settings );
	}
}

/**
 * Integrates with the Theme Customizer in WP 3.4
 * @since _gpp 1.0
 */
add_action( 'customize_register', 'gpp_customize_register' );

function gpp_customize_register( $wp_customize ) {

	// extending the field type to textarea
	class gpp_CSS_Control extends WP_Customize_Control {
		public $type = 'customarea';

		public function render_content() {
			$theme_options = get_option( '_gpp_options' );
			$stored = "";
			if( isset( $theme_options[ 'css' ] ) ) { $stored = $theme_options[ 'css' ]; }
			echo '<textarea style="width:100%;height:200px;">' . $stored . '</textarea>';
		}
		public function enqueue() {
			wp_enqueue_script( 'customarea', get_template_directory_uri() . '/lib/theme-options/js/customarea.js', array( 'customize-controls' ), '20120607', true );
		}
	}

	// get our theme options so we can use defaults below
	$theme_options = get_option( '_gpp_options' );

	// enables live change support
	$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	// add a setting to an existing theme option
	$wp_customize->add_setting( '_gpp_options[logo]', array(
		'default'        => '',
		'type'           => 'option',
		'capability'     => 'edit_theme_options',
		//'transport'      => 'postMessage'
	) );

	// intercept the theme option and control it
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'logo', array(
		'label'      => __( 'Upload Logo', '_gpp' ),
		'section'    => 'title_tagline',
		'settings'   => '_gpp_options[logo]'
	) ) );

	// add a setting to an existing theme option
	$wp_customize->add_setting( '_gpp_options[color]', array(
		'default'        => '',
		'type'           => 'option',
		'capability'     => 'edit_theme_options',
		'transport'      => 'postMessage'
	) );

	// intercept the theme option and control it
	$wp_customize->add_control( '_gpp_color_customizer', array(
		'settings'		=> '_gpp_options[color]',
		'label'			=> __( 'Select a color', '_gpp' ),
		'section'		=> 'colors',
		'type'			=> 'select',
		'choices' => array(
				'light' => 'Light',
				'dark' => 'Dark'
				),
		'priority'		=> 5
	) );

	// add customizer section
	$wp_customize->add_section( '_gpp_fonts', array(
		'title'			=> __( 'Fonts', '_gpp' ),
		'priority'		=> 45
	) );

	// add a setting to an existing theme option
	$wp_customize->add_setting( '_gpp_options[font]', array(
		'default'        => '',
		'type'           => 'option',
		'capability'     => 'edit_theme_options',
		'transport'      => 'postMessage'
	) );

	// intercept the theme option and control it
	$wp_customize->add_control( '_gpp_font_customizer', array(
		'settings'		=> '_gpp_options[font]',
		'label'			=> __( 'Headline Font', '_gpp' ),
		'section'		=> '_gpp_fonts',
		'type'			=> 'select',
		'choices'		=> gpp_font_array() // don't call all fonts on public themes. Choose a few.
	) );

	// add a setting to an existing theme option
	$wp_customize->add_setting( '_gpp_options[font_alt]', array(
		'default'        => '',
		'type'           => 'option',
		'capability'     => 'edit_theme_options',
		'transport'      => 'postMessage'
	) );

	// intercept the theme option and control it
	$wp_customize->add_control( '_gpp_font_alt_customizer', array(
		'settings'		=> '_gpp_options[font_alt]',
		'label'			=> __( 'Body Font', '_gpp' ),
		'section'		=> '_gpp_fonts',
		'type'			=> 'select',
		'choices'		=> gpp_font_array() // don't call all fonts on public themes. Choose a few.
	) );


		// add customizer section
	$wp_customize->add_section( '_gpp_layout', array(
		'title'			=> __( 'Layout', '_gpp' ),
		'priority'		=> 50
	) );

	// add a setting to an existing theme option
	$wp_customize->add_setting( '_gpp_options[layout]', array(
		'default'        => '',
		'type'           => 'option',
		'capability'     => 'edit_theme_options',
		'transport'      => 'postMessage'
	) );

	// intercept the theme option and control it
	$wp_customize->add_control( '_gpp_layout_customizer', array(
		'settings'		=> '_gpp_options[layout]',
		'label'			=> __( 'Select a layout', '_gpp' ),
		'section'		=> '_gpp_layout',
		'type'			=> 'radio',
		'choices' => array(
				'1' => 'Horizontal',
				'2' => 'Square',
				'3' => 'Vertical'
				)
	) );

	// add customizer section
	$wp_customize->add_section( '_gpp_css', array(
		'title'			=> __( 'Custom CSS', '_gpp' ),
		'priority'		=> 60
	) );

	// add a setting to an existing theme option
	$wp_customize->add_setting( '_gpp_options[css]', array(
		'default'        => '',
		'type'           => 'option',
		'capability'     => 'edit_theme_options',
		'transport'      => 'postMessage'
	) );

	// intercept the theme option and control it
	$wp_customize->add_control( new gpp_CSS_Control( $wp_customize, 'css', array(
		'settings'		=> '_gpp_options[css]',
		'label'			=> __( 'Custom CSS', '_gpp' ),
		'section'		=> '_gpp_css'
	) ) );


	/**
	 * Bind JS handlers to make Theme Customizer preview reload changes asynchronously.
	 * Used with fonts
	 *
	 * @since _gpp 1.0
	 */
	function gpp_customize_preview_js() { ?>
		<?php
		$doc_ready_script = '
		<script type="text/javascript">
			(function($){
				$(document).ready( function() {

					wp.customize( "blogname", function( value ) {
						value.bind( function( to ) {
							$( ".site-title a" ).html( to );
						} );
					} );

					wp.customize( "blogdescription", function( value ) {
						value.bind( function( to ) {
							$( ".site-description" ).html( to );
						} );
					} );

					wp.customize( "header_textcolor", function( value ) {
						value.bind( function( to ) {
							$( ".site-title a, .site-description" ).css( "cssText", "color: " + to + " !important;" );
						} );
					} );


					wp.customize( "_gpp_options[logo]", function( value ) {
						value.bind( function( to ) {
							$( ".site-title a" ).html( "<img class=\"sitetitle\" alt=\"' . get_bloginfo( 'name' ) . '\" src=\"" + to + "\">" );
						} );
					} );

					wp.customize( "_gpp_options[font]", function( value ) {
						value.bind(function( to ) {
							$( "#fontdiv" ).remove();
							var googlefont = to.split( "," );
							$( "body" ).append("<div id=\"fontdiv\"><link href=\"http://fonts.googleapis.com/css?family="+googlefont[0]+"\" rel=\"stylesheet\" type=\"text/css\" /><style type=\"text/css\">	h1, h2, h3, h4, h5, h6 { font-family: " + googlefont[1] + " }</style></div>" );

						} );
					} );

					wp.customize("_gpp_options[font_alt]",function(value) {
						value.bind(function( to ) {
							$( "#fontaltdiv" ).remove();
							var googlefont = to.split( "," );
							$( "body" ).append( "<div id=\"fontaltdiv\"><link href=\"http://fonts.googleapis.com/css?family="+googlefont[0]+"\" rel=\"stylesheet\" type=\"text/css\" /><style type=\"text/css\">	body, p { font-family: " + googlefont[1] + " }</style></div>" );

						} );
					} );

					wp.customize( "_gpp_options[color]", function( value ) {
						value.bind( function( to ) {
							$( "#alt-style-css" ).attr( "href", "' . get_template_directory_uri() . '/css/" + to + ".css" );
						} );
					} );

					wp.customize( "_gpp_options[css]", function( value ) {
						value.bind( function( to ) {
							$( "#tempcss" ).remove();
							var googlefont = to.split( "," );
							$( "body" ).append( "<div id=\"tempcss\"><style type=\"text/css\">" + to + "</style></div>" );
						} );
					} );
			} );
		})(jQuery);
		</script>';

		echo $doc_ready_script;
	}
	if ( $wp_customize->is_preview() && ! is_admin() )
		add_action( 'wp_footer', 'gpp_customize_preview_js', 21 );
}