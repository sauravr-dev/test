<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>

					<div class="container form" style="background-color:#B63838;width: 100%;">
						<div class="row">
							<div class="col-md-12">
								<div class="inner-div">
									<h2>Ready to get your domain? </h2>
									<p>Search for your new name now and bring your big idea to life.</p>
									<?php echo do_shortcode('[contact-form-7 id="51" title="Contact form 1"]'); ?>
								</div>
							</div>
						</div>
					</div>

			<footer id="site-footer" role="contentinfo" class="header-footer-group">
				<div class="section-inner">
					<div class="container">
						<div class="row">
							<div class="col-sm-12 col-md-7 col-lg-4">
								<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) : endif; ?>
									<div class="row-fluid">
										<ul class="list-items social-links">
											<li><a target="_blank" href="#" class="icons-sm fb-ic" target="_blank"><i class="fa fa-facebook"></i></a></li>
											<li><a target="_blank" href="#" class="icons-sm tw-ic" target="_blank"><i class="fa fa-twitter"></i></a></li>
											<li><a target="_blank" href="#" class="icons-sm ins-ic" target="_blank"><i class="fa fa-instagram"></i></a></li>
											<li><a target="_blank" href="#" class="icons-sm li-ic" target="_blank"><i class="fa fa-linkedin"></i></a></li>
										</ul>
									</div>

							</div>
							<div class="col-sm-12 col-md-7 col-lg-4">
								<h3>Featured Posts</h3>

									<?php domain_featured_posts(); ?>
							</div>
							<div class="col-sm-12 col-md-7 col-lg-4">
								<?php echo do_shortcode('[mc4wp_form id="3795"]'); ?>
									<p class="copyright">Terms of Service  |  Registration Agreement  
									Privacy  |  Sitemap</p>
										<p class="copyright">© Copyright 2020 Domain.com. 
										All rights reserved.</p>
							</div>
						</div>
					</div>					

				</div><!-- .section-inner -->

			</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</html>
