<?php get_header(); ?>

<!-- Content area -->
<div class="col-md-8">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
  <!-- Post snippet -->
  <div class="bs-post-snippet">
    <?php if (has_post_thumbnail()) : ?>
      <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium-large', ['class' => 'img-fluid mb-2']); ?></a>
    <?php endif; ?>
    <h2><a href="<?php the_permalink(); ?>"><?php __(the_title()); ?></a></h2>
    <p>
      <small class="text-muted">
        <?php the_date(); ?>, by 
        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
      </small>
    </p>
    <?php __(the_excerpt()); ?> 
    <hr>
  </div>
<?php endwhile; ?>

<!-- Pagination -->
<div class="bs-pagination">
  <span class="float-right"><?php next_posts_link('Older posts'); ?></span>  
  <span class="float-left"><?php previous_posts_link('Newer posts.'); ?></span>
</div>

<?php else: ?>
    <?php __('There are no posts.'); ?>



<?php endif; ?>

</div>

  <!-- Sidebar widgets -->
  <div class="col-md-4 bs-widgets">
    <?php if ( is_active_sidebar( 'right-sidebar' ) ) : ?>
      <div id="primary-sidebar" class="primary-sidebar widget-area" role="complementary">
        <?php dynamic_sidebar( 'right-sidebar' ); ?>
      </div><!-- #primary-sidebar -->
    <?php endif; ?>
  </div>
</div>


</div> <!-- /container -->

</main>

<?php get_footer(); ?>
