<?php
get_header();
?>
<main>
<section class="blog-post-section container">
    <?php
    while ( have_posts() ) : the_post();
        ?>
        <article class="fx-col-sb" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header>
            <p class="category"><?php the_category(', '); ?></p>
            <h2><?php the_title(); ?></h2>
            <div class="post-info fx-sb">
              <p>Date: <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time></p>
              <p>Author: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
            </div>
          </header>
          <?php if ( has_post_thumbnail() ) { ?>
            <img src="<?php echo get_the_post_thumbnail_url(array(803, 426)); ?>" alt="" />
          <?php } ?>
          <section class="post-content-section fx-col-sb">
            <?php the_content(); ?>
          </section>
          <footer>
            <p>
              Categories: <?php the_category(', '); ?>
            </p>
            <p>Tags: <?php the_tags(); ?></p>
          </footer>
        </article>
    <?php endwhile; ?>
</section>
</main>

<?php get_footer(); ?>
