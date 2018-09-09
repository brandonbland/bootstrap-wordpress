 
<?php get_header(); ?>
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
  <!-- Post snippet -->
  <div class="bs-post-snippet">
    <?php if (has_post_thumbnail()) : ?>
      <?php the_post_thumbnail('medium-large', ['class' => 'img-fluid mb-2']); ?>
    <?php endif; ?>
    <h2><?php __(the_title()); ?></h2>
    <p>
      <small class="text-muted">
        <?php the_date(); ?>, by 
        <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID'))); ?>"><?php the_author(); ?></a>
      </small>
    </p>
    <?php the_content(); ?> 
  </div>
  
  <!-- Comments -->
  <div class="bs-comments">
  </div>
<?php endwhile; ?>

<div class="bs-pagination">
  <span class="float-right"><?php echo next_post_link('%link'); ?></span><br><br>
  <span class="float-left"><?php echo previous_post_link('%link'); ?></span><br>
</div>

<?php else: ?>
    <?php __('There are no posts.'); ?>



<?php endif; ?>
<?php get_footer(); ?>