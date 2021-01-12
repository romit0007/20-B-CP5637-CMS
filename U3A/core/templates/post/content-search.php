<?php
/**
 * Template part for displaying posts with excerpts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leadEngine
 * by KeyDesign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<h3 class="blog-single-title"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
	<?php if ( 'post' === get_post_type() ) : ?>
		<div class="entry-meta">
			<span class="page-type"><span class="far fa-file-alt"></span><?php _e( 'Post', 'leadengine' ); ?></span>
			<span class="published"><span class="far fa-clock"></span><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php  the_time( get_option('date_format') ); ?></a></span>
			<span class="author"><span class="far fa-keyboard"></span><?php  the_author_posts_link(); ?></span>
			<span class="blog-label"><span class="far fa-folder-open"></span><?php  the_category(', '); ?></span>
			<span class="comment-count"><span class="far fa-comment"></span><?php  comments_popup_link( esc_html__('No comments yet', 'leadengine'), esc_html__('1 comment', 'leadengine'), esc_html__('% comments', 'leadengine') ); ?></span>
		</div>
	<?php else : ?>
		<div class="entry-meta">
			<?php if ( 'page' === get_post_type() ) : ?>
				<span class="page-type"><span class="far fa-file-alt"></span><?php _e( 'Page', 'leadengine' ); ?></span>
			<?php elseif ( 'portfolio' === get_post_type() ) : ?>
				<span class="page-type"><span class="far fa-file-image"></span><?php _e( 'Portfolio', 'leadengine' ); ?></span>
			<?php elseif ( 'product' === get_post_type() ) : ?>
				<span class="page-type"><span class="fas fa-shopping-cart"></span><?php _e( 'Product', 'leadengine' ); ?></span>
			<?php endif; ?>
			<span class="published"><span class="far fa-clock"></span><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php  the_time( get_option('date_format') ); ?></a></span>
		</div>
	<?php endif; ?>
		<div class="entry-content">
			<?php if ( has_excerpt() ) {
				the_excerpt();
			} ?>
			<a class="post-link" href="<?php esc_url(the_permalink()); ?>"><?php _e( 'Read more', 'leadengine' ); ?></a>
		</div>
</article>
