<?php


// create custom block category
add_filter( 'block_categories', function( $categories, $post ) {
    return array_merge(
        $categories,
        array(
            array(
                'slug'  => 'wpvs-custom-blocks',
                'title' => __('Custom Blocks', 'wpvs'),
            ),
        )
    );
}, 10, 2 );


function wpvs_acf_block_render_callback($block) {
	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/template-parts/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/template-parts/block/content-{$slug}.php") );
	}
}


add_action('acf/init', 'wpvs_init_blocks');
function wpvs_init_blocks() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'price-calculator',
			'title'				=> __('Price Calculator', 'wpvs'),
			'description'		=> __('A Bottle Price Calculator.', 'wpvs'),
			'render_callback'	=> 'wpvs_acf_block_render_callback',
			'category'			=> 'wpvs-custom-blocks',
			'icon'				=> 'tickets-alt',
			'keywords'			=> array( 'Price', 'Bottle', 'Calculator' ),
		));
	}
}

