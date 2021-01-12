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
	<h2 class="blog-single-title"><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<div class="entry-meta">
			<?php if ( is_sticky() ) echo '<span class="fas fa-thumbtack"></span> Sticky <span class="blog-separator">|</span>  '; ?>
			<span class="published"><span class="far fa-clock"></span><a href="<?php esc_url(the_permalink()); ?>" title="<?php the_title_attribute(); ?>"><?php  the_time( get_option('date_format') ); ?></a></span>
				<span class="author"><span class="far fa-keyboard"></span><?php  the_author_posts_link(); ?></span>
				<span class="blog-label"><span class="far fa-folder-open"></span><?php  the_category(', '); ?></span>
				<span class="comment-count"><span class="far fa-comment"></span><?php  comments_popup_link( esc_html__('No comments yet', 'leadengine'), esc_html__('1 comment', 'leadengine'), esc_html__('% comments', 'leadengine') ); ?></span>
		</div>
		<div class="entry-content">
			<?php the_excerpt(); ?>
			<?php wp_link_pages(); ?>
		</div>
</article>
