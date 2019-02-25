<section id="contact-footer" class="about-us container">
    <h2 class="center-title">Contact Us</h2>
    <div class="columns">
        <div class="contact__text __lt-6">
            <div>
                <?php echo get_field('about_us_content'); ?>
            </div>
            <div>
                <span>Email:</span> <span class="emails"><?php echo get_field('about_us_email'); ?></span>
            </div>
            <?php if(get_field('about_us_phone')): ?>
                <div>
                    <span>Phone (UK):</span> <span class="emails"><?php echo get_field('about_us_phone'); ?></span>
                </div>
            <?php endif; ?>
            <?php if(get_field('about_us_phone_eu')): ?>
            <div>
                <span>Phone (EU):</span> <span class="emails"><?php echo get_field('about_us_phone_eu'); ?></span>
            </div>
            <?php endif; ?>
        </div>
        <?php $image = get_field('about_us_featured_image'); ?>
        <?php if( !empty($image) ): ?>
            <div class="contact__image __lt-6" style="background-image:url('<?php echo $image; ?>');"></div>
        <?php endif; ?>
    </div>
</section>