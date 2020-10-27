<?php get_header(); global $post; $thumb = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); 

?>

	<div class="main-content">
		<h1 style="text-align:center;"><?php the_title() ?></h1>
				<h4 style="text-align:center;padding: 10px;">Home <span>&mdash;</span>  <?php 
					foreach((get_the_category()) as $category){
						echo $category->name."<br>";
						echo category_description($category);
				}
			?></h4>
		<div class="container" style="padding-top: 3%;"> 
			<div class="row">
				<div class="card top-card col-sm-12 col-md-7 col-lg-8">
					<div class="row">
						<div class="col-xs-12 single-post">
							<div class="card-background" style="background-image:url(<?php echo $thumb['0'];?>);">
								<?php if (!has_post_thumbnail()): echo '<img src="http://www.ipage.com/static/img/logo.svg" width="131" height="58" />'; endif; ?>
							</div>

							<!-- <div class="card-share">
		        		<div class="social-reveal" id="reveal-<?php echo $i; ?>">
			            <?php echo do_shortcode('[addtoany]'); ?>
		        		</div>
		        		<a href="javascript:void(0);" data-id="#reveal-<?php echo $i; ?>" class="js-reveal btn-floating btn-action share-toggle float-right"><i class="fa fa-share-alt"></i></a>
		   				</div> -->

					    <div class="card-block">
					    	<!-- <span class="datetime">Published On <?php the_time('M j, Y'); ?></span> -->
				        <div class="card-text" style="padding-top:10px;">
				        	<?php 
				        		if (have_posts()): while(have_posts()): the_post();
				        			the_content();
				        		endwhile; endif;
				        	?>
				        </div>
					    </div>
						</div>
					</div>
					<hr>
					<!-- <div class="row prev-next">
							<?php 
								// get previous posts data
								$prev = get_previous_post();
								$prev_title = wp_trim_words($prev->post_title, 6);

								// get next posts data
								$next = get_next_post();
								$next_title = wp_trim_words($next->post_title, 6);
								$next_ex_con = ( $next->post_excerpt ) ? $next->post_excerpt : strip_shortcodes( $next->post_content );
								$next_text = wp_trim_words( apply_filters( 'the_excerpt', $next_ex_con ), 3 );

								// layout for next prev posts
								if ($prev && $next) {
									$next_num = 6;
								} else if (!$prev && $next) {
									$next_num = 12;
								}

								if ($prev && $next) {
									$prev_num = 6;
								} else if ($prev && !$next) {
									$prev_num = 12;
								}


								if ($prev): ?>
								  <div class="prev-post nomargin nopadding col-sm-12 col-lg-<?php echo $prev_num; ?>">
								  	<a href="<?php echo esc_url( get_permalink( $prev->ID ) ); ?>">
								  		<strong>Previous Post</strong><br /><?php echo $prev_title; ?>
								  	</a>
								  </div>
								<?php endif; ?>

								<?php if ($next): ?>
								  <div class="next-post nomargin nopadding col-sm-12 col-lg-<?php echo $next_num; ?>">
								  	<a href="<?php echo esc_url( get_permalink( $next->ID ) ); ?>">
								  		<strong>Next Post</strong><br /><?php echo $next_title; ?>
								  	</a>
								  </div>
								<?php endif; ?>
						</div> -->

						<div class="row">
							<div class="col-12">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('social-sidebar') ) : endif; ?>
							</div>
						</div>
				</div>

	
				<div class="col-md-5 col-lg-4 hidden-sm-down">
					<?php get_sidebar(); ?>
				</div>
			</div>
		</div>


		<div class="container author"> 
				<div class="row">
					<div class="author col-sm-12 col-md-7 col-lg-8">

						<div class="author-image col-lg-4">
							<img src="/wp-content/uploads/2020/09/businessman-character-avatar-isolated_24877-60111.jpg">
						</div>
						<div class="author-description col-lg-4">
								<h2>Author Name</h2>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna</p>
								<a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ); ?>" >My Articles  <i class="fa fa-arrow-right" aria-hidden="true"></i></a>
						</div>
					</div>
					
						<div class="author-description col-md-5 col-lg-4 hidden-sm-down">
						</div>




		        </div>
		    </div>

			

	</div>


<?php get_footer(); ?>
