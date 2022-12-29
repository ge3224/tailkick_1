<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will appear. 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage TailKick
 * @since TailKick 0.1
 * @version 0.1
 */
?>

<!DOCTYPE html>
<html class="h-full" <?php language_attributes(); ?>>
<?php get_header(); ?>

<body <?php body_class('min-h-full flex flex-col'); ?>>
  <header>
  <?php get_template_part('template-parts/nav-primary', get_post_format()); ?>
  </header>
  <section
    id="hero"
    style="background:url('<?php echo get_theme_mod('hero_home_image', get_bloginfo('template_url').'/assets/images/tailkick-hero-home-wide.jpg'); ?>') no-repeat <?php echo get_theme_mod('hero_home_image_position_x', 'center'); ?> <?php echo get_theme_mod('hero_home_image_position_y', 'center'); ?>; background-size: cover;"
    class="bg-gray-200 lg:h-2/3 xl:h-[<?php echo get_theme_mod('home_hero_height', '48.5rem'); ?>] w-full"
  >
    <div class="w-full h-[767px] max-w-6xl mx-auto flex flex-col justify-center items-start">
      <div class="w-1/5 ml-auto mr-0">
        <h1 class="text-6xl font-bold"><?php echo get_theme_mod('hero_home_heading', 'Buy. Sell. Discover.'); ?></h1>
        <p class="mt-3"><?php echo get_theme_mod('hero_home_text', 'Interdum et malesuada fames ac ante ipsum primis in faucibus. Vestibulum luctus gravida neque, et fringilla erat aliquet id.'); ?></p>
        <a <?php echo get_tailwind_btn(); ?> href="https://github.com/ge3224/tailkick" target="_blank" type="button"<?php echo get_custom_styles_btn(); ?>>Download</a>
      </div>
    </div>
  </section>
  <main>
    <?php if (get_theme_mod('showcase_panel_include') == "true") : ?>
      <?php get_template_part('template-parts/showcase-panel', get_post_format()); ?>
    <?php endif; ?>
    <!-- testing zone -->
    <?php
      global $wp_registered_widgets;
      foreach ($wp_registered_widgets as $key => $value) {
        echo '<h2>' . $key . '</h2>';
        echo '<p>name => '. $wp_registered_widgets[$key]['name'] . '</p>';
        echo '<p>id => '. $wp_registered_widgets[$key]['id'] . '</p>';
        echo '<p>callback => '. $wp_registered_widgets[$key]['callback'] . '</p>';
        echo '<p>params => '. $wp_registered_widgets[$key]['params'] . '</p>';
        echo '<p>classname => '. $wp_registered_widgets[$key]['classname'] . '</p>';
        echo '<p>customize_selective_refresh => '. $wp_registered_widgets[$key]['customize_selective_refresh'] . '</p>';
        echo '<p>description => '. $wp_registered_widgets[$key]['description'] . '</p>';
        echo '<p>show_instance_in_rest => '. $wp_registered_widgets[$key]['show_instance_in_rest'] . '</p>';
        foreach($value as $k => $v) {
          echo '<p>' . $k . ' => ' . $v . '</p>';
        }
      }
    ?>
    <!-- end of testing zone -->
    <?php get_template_part('template-parts/feat-1', get_post_format()); ?>
    <?php get_template_part('template-parts/feat-2', get_post_format()); ?>
    <?php get_template_part('template-parts/feat-3', get_post_format()); ?>
    <?php get_template_part('template-parts/testimonials', get_post_format()); ?>
    <?php get_template_part('template-parts/banner-1', get_post_format()); ?>
  </main>
  <footer>
    <?php get_footer(); ?>
  </footer>
</body>

</html>
