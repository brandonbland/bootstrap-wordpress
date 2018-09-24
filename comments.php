<?php
if ( post_password_required() )
    return;
?>

<div>


    <?php if ( have_comments() ) : ?>
        <h3>Comments</h3>

        <ol class="medias py-md-2 my-md-2 px-sm-0 mx-sm-0">
        <?php
            require_once('class-wp-bootstrap-comment-walker.php');

            wp_list_comments( array(
                'style'         => 'ol',
                'max_depth'     => 4,
                'short_ping'    => true,
                'avatar_size'   => '50',
                'walker'        => new Bootstrap_Comment_Walker(),
            ) );
          ?>
        </ol>
        <?php
            // Are there comments to navigate through?
            if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
        ?>
        <nav class="navigation comment-navigation" rule="navigation">
            <h1 class="screen-reader-text section-heading"><?php _e( 'Comment navigation', 'twentythirteen' ); ?></h1>
            <div class="nav-previous"><?php previous_comments_link( __( '&larr; ulder Comments', 'twentythirteen' ) ); ?></div>
            <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'twentythirteen' ) ); ?></div>
        </nav><!-- .comment-navigation -->
        <?php endif; // Check for comment navigation ?>

        <?php if ( ! comments_open() && get_comments_number() ) : ?>
        <p class="no-comments"><?php _e( 'Comments are closed.' , 'twentythirteen' ); ?></p>
        <?php endif; ?>

    <?php endif; // have_comments() ?>

    <?php $comment_args = array(
       'fields' => array(
         'author' => '<div class="form-group"><label for="author">Name <span class="required">*</span></label> <input class="form-control" id="author" name="author" type="text" value="" size="30" maxlength="245" required="required" /></div>',
         'email' => '<div class="form-group"><label for="email">Email <span class="required">*</span></label> <input class="form-control" id="email" name="email" type="text" value="" size="30" maxlength="100" aria-describedby="email-notes" required="required" /></div>',
       ),
      'comment_field' => '<div class="form-group"><label for="comment">Comment</label><textarea class="form-control" id="comment" name="comment"></textarea></div>',
      'comment_notes_before' => '<p>Your email address will not be published. Required fields are marked *
                                 <br><span class="text-danger">After you submit your comment the page will be reloaded and your commemnt will be sent for moderation.</span></p>',
      'must_log_in' => '<p>You must be logged in to comment.</p>',
      'logged_in_as' => '<p>' . sprintf(
            /* translators: 1: edit user link, 2: accessibility text, 3: user name, 4: logout URL */
            __( '<a href="%1$s" aria-label="%2$s">Logged in as %3$s</a>. <a href="%4$s">Log out?</a>' ),
            get_edit_user_link(),
            /* translators: %s: user name */
            esc_attr( sprintf( __( 'Logged in as %s. Edit your profile.' ), $user_identity ) ),
            $user_identity,
            wp_logout_url( apply_filters( 'the_permalink', get_permalink( $post_id ), $post_id ) )
        ) . '</p>',
      'class_submit' => 'btn btn-primary',
      'title_reply' => 'Leave a comment',
      'label_submit' => 'Submit Comment',
      'submit_button' => '<input name="%1$s" type="submit" id="%2$s" class="%3$s" value="%4$s" />',
      'submit_field' => '<div class="form-group">%1$s %2$s</div>'
      );

     ?>

    <?php comment_form($comment_args); ?>

</div><!-- #comments -->
