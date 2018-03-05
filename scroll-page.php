<?php
	/* Template Name: Scroll Page*/ 
	get_header();
?>
	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php
				$args = array(
					'post_type'	=> 'page',
					'order'		=> 'ASC',
					'orderby' 	=> 'menu_order'
				);
				$the_query = new WP_Query($args);			
			?>
			
			<?php if(have_posts()):while($the_query->have_posts()):$the_query->the_post(); ?>
			<div id="post-<?php the_ID(); ?>" class="page-content">
				<div class="row h-100">
					<div class="col-sm-1 text-center"></div>
					<div class="col-sm-10">
						<?php the_content(); 
						?>
					</div>
					<div class="col-sm-1 text-center"></div>
				</div>
				<?php 
					
					?>
			</div>
			<?php endwhile; endif; ?>
		</div>
	</div>

<?php
	get_footer();
?>
