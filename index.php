<?php
get_header(); ?>
	<section id="single">
<div class="container">
	<div class="row">
		<div class="col-xs-12  single-post-contents">
		<?php
				
				while ( have_posts() ) : the_post();?>
				<a href="<?php the_permalink() ?>"><h1><?php the_title(); ?></h1></a>
				
				<?php 
				
					if ( has_post_thumbnail() ) {?>
					<div class="single-post-img"><a href="<?php the_permalink() ?>"><?php echo the_post_thumbnail('', array( 'class' => 'img-responsive')); ?></a></div>
				<?php } ?>					

				<div class="single-post-content"><p>
					<?php
					 the_content();
				endwhile;
				// Previous/next page navigation.
				the_posts_pagination( array(
					'prev_text'          => __( 'Previous page', 'twentysixteen' ),
					'next_text'          => __( 'Next page', 'twentysixteen' ),
					'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( 'Page', 'twentysixteen' ) . ' </span>',
				) );
					?>
					</p>
				</div>
			
			
			

			</div>
				
	</div>
</div>
</section>    
<?php

get_footer();