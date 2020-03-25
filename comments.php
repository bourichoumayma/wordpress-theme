<?php
  if ( post_password_required() )
  return;
?>

<?php if ( have_comments() ) : ?>

  <h3 id="comments">
    <?php
      printf( _nx( 'One response to "%2$s"', '%1$s responses to "%2$s"', get_comments_number(), 'comments title', 'winter-blues' ),
      number_format_i18n( get_comments_number() ), '<span>' . get_the_title() . '</span>' );
    ?>
  </h3>

  <ol class="commentlist">
    <?php
      wp_list_comments( array(
        'style'       => 'ol',
        'short_ping'  => true,
        'avatar_size' => 74,
      ) );
    ?>
  </ol><!-- .comment-list -->

  <?php
    if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) :
  ?>
    <nav class="navigation comment-navigation" role="navigation">
      <div class="nav-previous"><?php previous_comments_link( __( '&larr; Older Comments', 'winter-blues' ) ); ?></div>
      <div class="nav-next"><?php next_comments_link( __( 'Newer Comments &rarr;', 'winter-blues' ) ); ?></div>
    </nav><!-- .comment-navigation -->
  <?php endif; // Check for comment navigation ?>

<?php endif; // have_comments() ?>

<?php if ( ! comments_open()) : ?>
  <p class="nocomments"><?php _e( 'Comments are closed.', 'winter-blues' ); ?></p>
<?php endif;
comment_form(); ?>
