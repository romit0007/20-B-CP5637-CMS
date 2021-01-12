<?php
/**
 * Template part for displaying standard posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package leadengine
 * by KeyDesign
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
	<?php if ('quote' === get_post_format()) : ?>
	  <h2 class="blog-single-title quote"><?php the_title(); ?></h2>
	<?php else : ?>
	  <h2 class="blog-single-title"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	<?php endif; ?>
		<div class="entry-meta">
			<?php if ( is_sticky() ) echo '<span class="fas fa-thumbtack"></span> Sticky <span class="blog-separator">|</span>  '; ?>
			<span class="published"><span class="far fa-clock"></span><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_time( get_option('date_format') ); ?></a></span>
				<span class="author"><span class="far fa-keyboard"></span><?php  the_author_posts_link(); ?></span>
				<span class="blog-label"><span class="far fa-folder-open"></span><?php  the_category(', '); ?></span>
				<span class="comment-count"><span class="far fa-comment"></span><?php  comments_popup_link( esc_html__('No comments yet', 'leadengine'), esc_html__('1 comment', 'leadengine'), esc_html__('% comments', 'leadengine') ); ?></span>
		</div>
		<?php get_template_part( 'core/templates/post/post-type/content', get_post_format() ); ?>
		<div class="entry-content">
			<div class="page-content">
				<?php the_excerpt(); ?>
			</div>
			<?php wp_link_pages(); ?>
			<a class="tt_button" href="<?php esc_url(the_permalink()); ?>"><?php _e( 'Read more', 'leadengine' ); ?></a>
		</div>
</article>
