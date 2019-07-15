<?php
/**
 * Template Name: ACCESSBANK MARATHON
 * 
 * 
 *
 * @package Relic Fashion Store
 */

 ?>
<?php //'get_header(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta name="description" content="<?php bloginfo( 'description' ); ?>" />
		<meta name="author" content="<?php bloginfo( 'author' ); ?>"/>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body>
    
</body>
</html>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main" style="margin-top:-30px;">
		<?php
		// Start the loop.
		while ( have_posts() ) : the_post();

			// Include the page content template.
			get_template_part( 'template-parts/content', 'page' );

			// If comments are open or we have at least one comment, load up the comment template.
			// if ( comments_open() || get_comments_number() ) {
			// 	comments_template();
			// }

			// End of the loop.
		endwhile;
		?>

	</main><!-- .site-main -->

	<?php //get_sidebar( 'content-bottom' ); ?>
<style>
    body {
        background:#CCC;
        font-size: 12px !important;
    }
    header {
        display:none;
        visibility:hidden;
        
    }
    .site-main {
        background: #fff;
        border:1px solid #ccc;
    }
    </style>
</div><!-- .content-area -->

<?php //get_sidebar(); ?>
<?php //get_footer(); ?>