<?php /* Template Name: Full-Width */ ?>

<?php get_header(); ?>

<!-- Content area -->
<div class="col-md-12">

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
 <!-- Post content -->
 <div class="bs-post">
   <!-- <?php if (has_post_thumbnail()) : ?>
     <?php the_post_thumbnail('medium-large', ['class' => 'img-fluid mb-2']); ?>
   <?php endif; ?> -->
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


</div> <!-- /container -->

</main>

<?php get_footer(); ?>
