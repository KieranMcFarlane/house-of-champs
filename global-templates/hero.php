<?php
/**
 * Hero setup.
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
?>

<!-- HTML -->
<div id="video-container">
  <video autoplay muted loop>
    <source src="<?php echo get_stylesheet_directory_uri(); ?>/images/boxing-gym.mp4" type="video/mp4">
  </video>
  <div id="overlay">
	  <h1><span>House</span> of Champs</h1>
	  <p>Meet the warrior in you</p>
  </div>
</div>



<?php /*

	<div class="hero-unit__outer-container" style="background-image: url(<?php echo get_field('hero_featured_image'); ?>);">
		<div class="wrapper" id="wrapper-hero">

			<div class="hero__content__box">
				<h1><?php echo get_field('hero_title'); ?></h1>
				<p><?php echo get_field('hero_content'); ?></p>
				<a href="<?php echo get_field('hero_button_link'); ?>" class="button"><?php echo get_field('hero_button_title'); ?></a>
			</div>
		
		</div>
		<a href="#flex-0" class="hero__scroll">Scroll Here</a>
	</div>

*/?>