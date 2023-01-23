			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>

	<footer class="footer">
		<div class="container">

			<div class="footer-top-container flex justify-between">
				<div class="footer-form">
					<div class="default-title __title-inverted text-center">
						<h2 class="inline-block text-left">
							<span>CONTACT US</span>
							<em>GET IN TOUCH</em>
						</h2>
					</div>
					
					<?= do_shortcode('[contact-form-7 id="339" title="HP Contact Us"  html_class="use-floating-validation-tip"]')?>
				</div>
				<div class="footer-info">

					<div class="footer-logo">
						<a href="<?= do_shortcode('[blogurl]')?>" class="block w-100">
							<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/logo.png" alt="Joe Milani" class="block w-100">
						</a>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/team-logo.png" alt="Joe Milani">
					</div><!-- end of logo -->


					<div class="footer-more-info flex justify-between">
						<div class="footer-nav">
							<h3>NAVIGATE:</h3>
							<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
						</div>
						<div class="footer-contact-info">
							<h3>Contact Us:</h3>
							<ul>
								<li>
									<i class="ai-font-location-c"></i>
									<span><?= do_shortcode('[ai_client_address]')?></span>
								</li>
								<li>
									<i class="ai-font-phone"></i>
									<span><?= do_shortcode('[ai_client_phone]{default-phone}[/ai_client_phone]')?></span>
								</li>
								
								<li>
									<i class="ai-font-envelope-filled-a"></i>
									<span><?= do_shortcode('[ai_client_email]{default-email}[/ai_client_email]')?></span>
								</li>
							</ul>
							
							<h3>CHECk US ON:</h3>
							<div class="ft-smi flex">
								<a href="#" target="_blank" class="block"><i class="ai-font-facebook"></i> Facebook</a>
								<a href="#" target="_blank" class="block"><i class="ai-font-instagram"></i> Instagram</a>
								<a href="#" target="_blank" class="block"><i class="ai-font-linkedin"></i> Linkedin</a>
								<a href="#" target="_blank" class="block"><i class="ai-font-zillow"></i> Zillow</a>
								<a href="#" target="_blank" class="block"><i class="ai-font-tiktok"></i> Tiktok</a>
							</div>
						</div>
					</div><!-- end of more info -->

				</div>

			</div><!-- end of footer container -->

			<div class="footer-disclaimer">
				<p>Joe Milani Real Estate Group is committed to providing an accessible website. If you have difficulty accessing content, have difficulty viewing a file on the website, or notice any accessibility problems, please contact us at <?= do_shortcode('[ai_phone href="+1.215.206.4697"]215.206.4697[/ai_phone]')?> to specify the nature of the accessibility issue and any assistive technology you use. We strive to provide the content you need in the format you require.</p>
			</div>

			<div class="footer-copyright flex justify-between">
				<div>
					<p>&copy; Copyright  <?php echo date('Y') ?> <strong>Joe Milani Real Estate Group.</strong> All Rights Reserved. Sitemap | <?= do_shortcode('[agentimage_credits credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold">Agent Image</a>"]')?></p>
				</div>
				<div>
					<div class="footer-copyright-logo flex items-center justify-center">
						<i class="ai-font-eho"></i>
						<i class="ai-font-realtor"></i>
						<i class="ai-font-mls"></i>
						
					</div><!-- end of footer logo -->
				</div>
			</div>

		</div>		
	</footer>

	<?php do_action('aios_neighborhoods_footer')?>
	<?php do_action('aios_landing_page_footer')?>
	
	</div><!-- end of #main-wrapper -->


	<?php wp_footer(); ?>
</body>
</html>
