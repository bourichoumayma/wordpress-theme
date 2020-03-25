<?php if ( is_active_sidebar( 'nl-sidebar' ) ) : ?>

  <?php 
    if ( is_active_widget( false, false, 'winterblues-social-icons', true ) ) {
      wp_enqueue_style( 'social-icons' );
    }
  ?>

  <div class="nl-sidebar">
    <?php dynamic_sidebar( 'nl-sidebar' ); ?>
  </div><!-- .nl-sidebar -->
<?php endif; ?>
