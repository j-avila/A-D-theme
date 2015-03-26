<?php /*/ Template Name: la prueba*/ ?>
<?php get_header(); ?>

	<div id="single-page">
<?php
//if a certain page, then display posts authored by the logged in user
$page_title = 'Contributors Page';
if ( is_user_logged_in()  && is_page($page_title) ) {
  global $current_user;
  get_currentuserinfo();
  echo 'User ID: ' . $current_user->ID . "\n";
  $args=array(
    'author' => $current_user->ID,
    'post_type' => 'post',
    'post_status' => 'publish',
    'posts_per_page' => -1,
    'caller_get_posts'=> 1
  );
  $my_query = null;
  $my_query = new WP_Query($args);
  if( $my_query->have_posts() ) {
    echo 'Your Posts';
    while ($my_query->have_posts()) : $my_query->the_post(); ?>
      <p><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></p>
      <?php
    endwhile;
  }
  wp_reset_query();  // Restore global post data stomped by the_post().
}
?>
	</div>

<?php get_footer(); ?>
