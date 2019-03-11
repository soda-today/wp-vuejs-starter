<?php
/**
 * Block Name: Price Calculator
 *
 * This is the template that displays the testimonial block.
 */

// get image field (array)
$avatar = get_field('avatar');

// create id attribute for specific styling
$id = 'price-calculator-' . $block['id'];

// create align class ("alignwide") from block setting ("wide")
$align_class = $block['align'] ? 'align' . $block['align'] : '';

?>
<div id="<?php echo $id; ?>" class="testimonial <?php echo $align_class; ?>">
    <h2><?php the_field('title'); ?></h2>
    <?php if ( is_admin() ): ?>
    <img style="width: 100%;" src="<?= get_stylesheet_directory_uri() ?>/assets/editor/price-calculator-preview.png" />
    <?php else: ?>
    <price-calculator></price-calculator>
    <?php endif; ?>
</div>
