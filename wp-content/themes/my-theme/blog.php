<?php
/*
Template Name: Blog
*/
get_header();

$query_args = [
  'posts_per_page' => '10',
  'paged' => get_query_var('paged') ?: 1
]; 

?>
<main>
<section class="blog-section container fx-col-sb">

<h2>Blog</h2>

        <div class="search fx-sb">
          <input type="search" name="search" placeholder="Search by title..." />
          <button>
            <svg><use xlink:href="#search-svg" /></svg>
          </button>
        </div>
        <div class="blog-cards">
            <?php 
            wp_reset_query(); 
            $query = new WP_Query($query_args);
                while ($query->have_posts()):
                  $query-> the_post()
             ?>
            <article class="card" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <img src="<?php the_post_thumbnail_url(); ?>" alt="">
            <p class="category"><?php the_category(', '); ?></p>
                <header>
                    <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                </header>
               
                <div>
                    <?php the_excerpt(); ?>
                </div>
                <footer>
                    <a href="<?php the_permalink(); ?>">Continue reading</a>
                </footer>
            </article>
            <?php endwhile ?>
      
          </div>
        </div>
      </section>
</main>

<?php get_footer(); ?>