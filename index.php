<?php
  /**
   * template name: Home Page
   * The main template file
   *
   * This is the most generic template file in a WordPress theme
   * and one of the two required files for a theme (the other being style.css).
   * It is used to display a page when nothing more specific matches a query.
   * E.g., it puts together the home page when no home.php file exists.
   *
   * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
   *
   * @package Wordpress Developer Challenge Theme wp
   */
  
  get_header();
?>
  
  <main>
    <section class="showcase">
      <?php query_posts("post_type=films&posts_per_page=1");
        if(have_posts()):
          while(have_posts()):the_post();
            get_template_part( 'template-parts/post', 'showcase');
          endwhile;
        endif;
      ?>
    </section>
  </main>

<?php get_footer();
