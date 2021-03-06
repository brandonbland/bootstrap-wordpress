<?php get_header(); ?>

<!-- Content area -->
<div class="col-md-8">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
 <!-- Post content -->
 <div class="bs-post">
   <h2><?php __(the_title()); ?></h2>

   <?php __(the_content()); ?> 
   
 </div>
 
 <!-- Comments -->
 <div class="bs-comments">
 </div>
 
<?php endwhile; ?>
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
