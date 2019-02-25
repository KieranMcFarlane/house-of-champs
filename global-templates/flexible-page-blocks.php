<section class="page-block__container container">

    <h2 class="center-title">
        <?php echo get_sub_field('page_suptitle'); ?>
    </h2>
    <div class="columns">
    <?php if( have_rows('page_blocks') ): ?>
    <?php while ( have_rows('page_blocks') ) : the_row(); ?>
    
    <div class="page-block__individual __lt-6">
        
        <?php $image = get_sub_field('page_featured_image'); ?>
        <?php if( !empty($image) ): ?>
        <div class="page-block__image" style="background-image:url('<?php echo $image; ?>');"></div>
        <?php endif; ?>
        <div class="page-block__title">
            <h3><?php the_sub_field('page_title'); ?></h3>
        </div>
        <div class="page-block__content">
            <?php if( get_sub_field('page_content') ): ?>
                <?php the_sub_field('page_content'); ?>
            <?php endif; ?>
        </div>

        <div class="page-block__container">
            <?php if($link = get_sub_field('page_button_link')): ?>
                    <a class="sub-button" href="<?php echo $link; ?>"><?php echo get_sub_field('page_button_title'); ?></a>
            <?php endif; ?>
        </div>
        
    </div>
        
    <?php endwhile; ?>
    <?php endif; ?>
    </div>
        
	</section>