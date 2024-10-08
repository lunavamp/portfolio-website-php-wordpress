<?php
get_header();

function my_get_categories($id){
  return implode(', ', array_map(fn($v) => $v->name, get_the_category($id)));
 }
?>
<main>
<section class="blog-post-section container fx-col-sb">
<nav>
    <ul class="breadcrumbs">
        <li><a href="/">Home</a></li>
        <li><a href="blog/">Blog</a></li>
        <li><?php the_title(); ?></li>
    </ul>
    </nav>
    <?php
    while ( have_posts() ) : the_post();
        ?>
        <article class="fx-col-sb container" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <header>
            <p class="category"><?php echo my_get_categories(get_the_ID()); ?></p>
            <h2><?php the_title(); ?></h2>
            <div class="post-info fx-sb">
              <p>Date: <time datetime="<?php echo get_the_date('c'); ?>"><?php echo get_the_date(); ?></time></p>
              <p>Author: <a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></p>
            </div>
          </header>
          <section class="post-content-section fx-col-sb">
            <?php the_content(); ?>
          </section>
          <footer>
            <p>
              Categories: <?php echo my_get_categories(get_the_ID()); ?>
            </p>
            <p><?php the_tags(); ?></p>
          </footer>
        </article>
    <?php endwhile; ?>
</section>
<?php include "modal.php";?>
</main>
<div class="cursor"></div>
<?php get_footer(); ?>
