<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 */

?>
<div class="post-preview" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header col-md-12 pr-0 pl-0">
		<?php if ( has_post_thumbnail() && ! post_password_required() && ! is_attachment() ) : ?>
		<?php if ( is_front_page() ) : ?>
		<div class="entry-thumbnail col-md-12 pr-0 pl-0">
			<?php the_post_thumbnail( 'medium_large' ); ?>
		</div>
		<?php endif; ?>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
		<h1 class="entry-title col-md-12 pr-0 pl-0"><?php the_title(); ?></h1>
		<?php else : ?>
		<h1 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h1>
		<?php endif; // is_single() ?>

		<div class="entry-meta col-md-12">
			<?php edit_post_link( __( 'Edit', 'blogtheme' ), '<span class="edit-link">', '</span>' ); ?>
		</div>
	</header>

	<?php if ( is_search() ) : // Only display excerpts for search. ?>
	<div class="entry-summary">
		<?php the_excerpt(); ?>
	</div>
	<?php else : ?>
	<div class="entry-content">
		<?php
			//the_content();
			mohcinBn_excerpt_more();
		?>
	</div>
	<?php endif; ?>

	<footer class="entry-meta">
		<?php if ( comments_open() && ! is_single() ) : ?>
			<div class="comments-link">
				<?php comments_popup_link( '<span class="leave-reply">' . __( 'Leave a comment', 'blogtheme' ) . '</span>', __( 'One comment so far', 'blogtheme' ), __( 'View all % comments', 'blogtheme' ) ); ?>
			</div><!-- .comments-link -->
		<?php endif; // comments_open() ?>
	</footer>
</div>