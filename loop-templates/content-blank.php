<?php
/**
 * Blank content partial template.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

  <?php if(have_rows('flexible_content')): ?>
    <?php $counter = 0; ?>
    <?php while (have_rows('flexible_content')): the_row(); ?>
      <?php if ( 'page_blocks' === get_row_layout() ): ?>
        <div id="flex-<?php echo $counter ?>" class="flex-<?php echo $counter ?>">
          <?php get_template_part('global-templates/flexible', 'page-blocks'); ?>
        </div>
      <?php elseif ( 'side_to_side_content' === get_row_layout() ): ?>
        <div id="flex-<?php echo $counter ?>" data-aos="fade-up" class="flex-<?php echo $counter ?> fade__block__container">
          <?php get_template_part('global-templates/flexible', 'side-to-side-content'); ?>
        </div>
        <?php elseif ( 'tab_services' === get_row_layout() ): ?>
        <div id="flex-<?php echo $counter ?>" class="flex-<?php echo $counter ?>">
          <?php get_template_part('global-templates/flexible', 'tab-services'); ?>
        </div>
		<?php elseif ( 'title_block' === get_row_layout() ): ?>
		<div id="flex-<?php echo $counter ?>" class="flex-<?php echo $counter ?>">
		<?php get_template_part('global-templates/flexible', 'title-block'); ?>
		</div>
        <?php endif; ?>
        <?php $counter++; ?>
      <?php endwhile; ?>
    <?php endif; ?>
    <?php /* get_template_part('global-templates/static', 'about-us'); */ ?>
