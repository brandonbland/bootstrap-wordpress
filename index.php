<?php get_header(); ?>
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
    <?php the_excerpt(); ?> 
    <hr>
  </div>
<?php endwhile; ?>
<?php else: ?>
    <?php __('There are no posts.'); ?>



<?php endif; ?>
<?php get_footer(); ?>
