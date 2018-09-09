 

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
 <div class="bs-comments">
   <?php 
   // If comments are open or we have at least one comment, load up the comment template.
    if ( comments_open() || get_comments_number() ) :
        comments_template();
    endif;
    ?>
 </div>
<?php endwhile; ?>
<?php else: ?>
   <?php __('There are no posts.'); ?>



<?php endif; ?>
<?php get_footer(); ?>
