 <?php get_header(); ?>

 <!-- Content area -->
 <div class="col-md-8">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
  <!-- Post content -->
  <div class="bs-post">
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
    <!-- Above post widget -->
    <?php if ( is_active_sidebar( 'above-post' ) ) : ?>
        <?php dynamic_sidebar( 'above-post' ); ?>
    <?php endif; ?>
    
    <!-- Post content  -->
    <?php __(the_content()); ?> 
    
    <!-- Below post widget -->
    <?php if ( is_active_sidebar( 'below-post' ) ) : ?>
        <?php dynamic_sidebar( 'below-post' ); ?>
    <?php endif; ?>
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
