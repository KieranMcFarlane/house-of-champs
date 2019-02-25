<?php echo get_sub_field('service_category_title'); ?>

<section class="services__container container">

    <div class="services__category">
    <?php if( have_rows('service_category') ): ?>
        
    <ul id="services__menu">
    
        <li><a class="all" href="#">All</a></li>
        <?php while ( have_rows('service_category') ) : the_row(); ?>

        <?php
            $service__category = get_sub_field('service_category_title'); 
            $lower_case_service = strtolower($service__category); 
        ?>

                <li><a class="services__<?php echo $lower_case_service; ?>" href="#"><?php the_sub_field('service_category_title'); ?></a></li>
        <?php endwhile; ?>
    </ul>
<?php endif; ?>
</div>

<div class="columns service__items">

    <?php if( have_rows('service_category') ): ?>
    <?php while ( have_rows('service_category') ) : the_row(); ?>

        <?php
            $service__category = get_sub_field('service_category_title'); 
            $upper_case_service = strtolower($service__category); 
        ?>

        <?php if( have_rows('service') ): ?>
        <?php while ( have_rows('service') ) : the_row(); ?>

            <div class="services__individual services__<?php echo $upper_case_service; ?> __t-4 active">
            
            <?php $image = get_sub_field('image'); ?>
            <?php if( !empty($image) ): ?>
            <div class="services__image" style="background-image:url('<?php echo $image; ?>');"></div>
            <?php endif; ?>
            <div class="services__title">
                <h3><?php the_sub_field('title'); ?></h3>
            </div>
            <div class="services__content">
                <?php if( get_sub_field('description') ): ?>
                    <?php the_sub_field('description'); ?>
                <?php endif; ?>
            </div>

            </div>

        <?php endwhile; ?>
        <?php endif; ?>
    
<?php endwhile; ?>
<?php endif; ?>
</div>
    
</section>