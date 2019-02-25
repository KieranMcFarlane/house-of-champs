<div class="text-center-module">
	<div class="text-center-module-wrapper">
    
		<?php if (have_rows('full_width_section')): ?>
		<?php while (have_rows('full_width_section')): the_row(); ?>
			<?php if( get_sub_field('title') ): ?>
				<h2><?php the_sub_field('title'); ?></h2>
			<?php endif; ?>
			
			<div class="full-text-container">
				<?php if( get_sub_field('content_box') ): ?>
					<?php the_sub_field('content_box'); ?>
				<?php endif; ?>
			</div>

			<div class="slide-button-container">
				<?php if($link = get_sub_field('link')): ?>
					<li class="button-anim">
						<a class="inside-link" href="<?php echo get_sub_field('link'); ?>"><?php the_sub_field('btn_title'); ?></a>
					</li>
				<?php endif; ?>
			</div>

		<?php endwhile; ?>
		<?php endif; ?>	

	</div>
</div>
