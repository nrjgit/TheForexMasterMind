  <?php
/**
 * Template Name: Default Page
 * Description: Page template with a content container and right sidebar.
 *
 * @package WordPress
 * @subpackage BootstrapWP
 */
get_header(); ?>
  
  
  <div class="container">

<?php while (have_posts()) : the_post(); ?>
  <div class="row content">
    <div class="span8">
       
        <h1>page.php</h1>
<?php get_template_part('content','page'); ?>


    </div><!-- /.span8 -->
</div>


        <?php endwhile; ?>
    <?php get_sidebar(); ?>
    <?php get_footer(); ?>
	
	</div>