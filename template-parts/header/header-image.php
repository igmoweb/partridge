<?php
/**
 * Displays header media
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

?>
<div class="custom-header">

	<?php if ( ! has_post_thumbnail() ): ?>
		<div class="custom-header-media">
			<?php the_custom_header_markup(); ?>
		</div>
	<?php else: ?>
		<div class="custom-header-media">
			<?php the_post_thumbnail(); ?>
		</div>
	<?php endif; ?>

	<?php get_template_part( 'template-parts/header/site', 'branding' ); ?>

</div><!-- .custom-header -->
