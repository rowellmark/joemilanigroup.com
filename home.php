<?php get_header(); ?>


<div class="floating-smi fixed top-0 right-0 h-100 flex flex-col items-center justify-center">
	<a href="#" target="_blank" class="block"><i class="ai-font-facebook"></i> Facebook</a>
	<a href="#" target="_blank" class="block"><i class="ai-font-instagram"></i> Instagram</a>
	<a href="#" target="_blank" class="block"><i class="ai-font-linkedin"></i> Linkedin</a>
	<a href="#" target="_blank" class="block"><i class="ai-font-zillow"></i> Zillow</a>
	<a href="#" target="_blank" class="block"><i class="ai-font-tiktok"></i> Tiktok</a>
	<div class="smi-divider"></div>
	<h3>follow us</h3>
</div>
<section class="hero relative">
	<div class="slideshow relative">
		<?php echo do_shortcode('
			[aios_slider id="Homepage Slideshow"]
		'); ?>
	</div><!--- end of slideshow -->
	<div class="slideshow-content absolute w-100 h-100 top-0 left-0 text-center flex items-center justify-center">
		<div>
			<h1>Joe Milani</h1>
			<p>Real Estate Group</p>
		</div>
	</div>
</section><!-- end of hero -->
<section class="hp-quick-search relative">
	<div class="default-container">
		<div class="qc-container">
			<div class="quick-search-wrapper flex items-center">


				<div class="qc-title">
					<div class="default-title __title-inverted">
						<h2>
							<span>QUICK</span>
							<em>SEARCH</em>
						</h2>
					</div>
				</div><!-- end of quick search title -->

				<div class="qc-form flex">

					<div class="qc-form-row relative w-100">

						<div class="qc-set w-100">

							<div class="qcform-hold relative qc-propety-type">
								<div class="w-100 relative">
									<label for="property-type"></label>
									<select name="property-type" id="property-type">
										<option value="#">property type</option>
									</select>
								</div>
							</div><!-- end of form hold -->

							
						</div><!-- endo qc set -->

						<div class="qc-set flex">

							<div class="qcform-hold relative w-50 qc-bedrooms">
								<div class="w-100 relative">
									<label for="bedrooms"></label>
									<select name="bedrooms" id="bedrooms">
										<option value="#">BEDROOMS</option>
									</select>
								</div>
							</div><!-- end of form hold -->

							<div class="qcform-hold relative w-50 qc-bathrooms">
								<div class="w-100 relative">
									<label for="bathrooms"></label>
									<select name="bathrooms" id="bathrooms">
										<option value="#">BATHROOMS</option>
									</select>
								</div>
							</div><!-- end of form hold -->

						</div><!-- end of qc set -->

					</div>
					<div class="qc-form-row relative w-100">

						<div class="qc-set w-100">

							<div class="qcform-hold relative qc-city-zip">
								<div class="w-100 relative">
									<label for="city-zip"></label>
									<select name="city-zip" id="city-zip">
										<option value="#">CITY OR ZIP</option>
									</select>
								</div>
							</div><!-- end of form hold -->

							
						</div><!-- endo qc set -->

						<div class="qc-set flex">

							<div class="qcform-hold relative w-50 qc-price">
								<div class="w-100 relative">
									<label for="min-price"></label>
									<select name="min-price" id="min-price">
										<option value="#">MIN PRICE</option>
									</select>
								</div>
							</div><!-- end of form hold -->

							<div class="qcform-hold relative w-50 qc-price">
								<div class="w-100 relative">
									<label for="max-price"></label>
									<select name="max-price" id="max-price">
										<option value="#">MAX PRICE</option>
									</select>
								</div>
							</div><!-- end of form hold -->

						</div><!-- end of qc set -->

					</div>

					<div class="qc-buttons relative flex flex-col">
						<input type="submit" value="SEARCH">
						<a href="#" class="block w-100 relative">ADVANCED</a>
					</div>


				</div><!-- end of qc form -->
			</div><!-- end of quick search wrapper -->
			<p class="block w-100 text-right">Real Estate IDX Powered by iHomefinder</p>
		</div>
	</div>
</section><!-- end of quick search -->

<section class="welcome-section accent-bg">
	<div class="welcome-wrapper default-container">
		<div class="welcome-container flex justify-between items-start">
			<div class="agent-photo">
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/agent-photo.png" alt="Joe Milani" class="block w-100">
			</div><!-- end of agent photo -->

			<div class="welcome-content">

				<div class="default-title">
					<h2>
						<span>WELCOME TO</span>
						<em>JoE MILANI</em>
						<i>REAL ESTATE GROUP</i>
					</h2>
				</div>

				<h5>Joe Milani Real Estate Group is the largest real estate company in the Mid-Atlantic region. Our goal is to bring you the total home ownership experience.</h5>

				<p>Joe Milani is a realtor with Long and Foster Real Estate and is in the top 3% of
				agents in the Philadelphia area. Joe has been nominated for Realtor of the Year and has
				won many prestigious awards including Rookie of the Year, Diamond Level Circle of
				Excellence, Top Small Team, and Triple Star Plus Level Producer. Philadelphia Magazine
				has recognized him as a Top Producer and Agent for the last several years in a row.</p>
				<p>
				When you hire Joe to help you buy, sell, or build a home, you are getting an agent that will
				work tirelessly on your behalf and go above and beyond to exceed your expectations. Joe
				brings forth his experience in real estate, construction, and development. </p>

				<div class="default-button">
					<a href="#" class="block relative">LEARN MORE</a>
				</div>
			</div><!-- end of welcome content -->
		</div>
	</div>
</section><!-- end of welcome section -->

<section class="hp-meet-the-team relative">

	<div class="meet-the-team-container flex relative">

		<div class="meet-the-team-content">
			<div class="default-title">
				<h2>
					<span>MEET</span>
					<em>THE TEAM</em>
				</h2>
			</div>
			<p>The Agency has offices in some of the world’s
			most coveted real estate markets, allowing us to serve our clients with a full scope of residential, commercial, luxury leasing, vacation rental and
			new development real estate services. </p>
			
			<div class="default-pagination mtt-pagination flex items-center">
				<div class="arrow-left">
					<button data-arrow="prev">
						<i></i>Prev
					</button>
				</div>
				<div class="separator"></div>
				<div class="arrow-right">
					<button data-arrow="next">
						Next <i></i>
					</button>
				</div>
			</div>

			<div class="default-button">
				<a href="#" class="block relative">LEARN MORE</a>
			</div>


		</div><!-- end of meet the team content -->

		<div class="meet-the-team-teams">
			<div class="hp-teams splide">

				 <div class="splide__track">
    				<div class="splide__list">

						<div class="splide__slide hp-team">
							<div class="hp-team-wrap relative">
								<div class="team-img relative">
									<a href="#" class="block w-100 relative">
										<canvas width="280" height="440" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/agent-1.jpg" alt="AMANDA WHITE" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
									</a>
								</div>
								<div class="team-content relative">
									<h4>AMANDA WHITE</h4>
									<p>Managing Director, Pennsylvania</p>
									<ul>
										<li><?= do_shortcode('[ai_phone unwrap_em="true" href="+1.941.586.4889"]Call 941.586.4889[/ai_phone]')?></li>
										<li> <?= do_shortcode('[mail_to email="jonathan@joemilanigroup.com"]jonathan@joemilanigroup.com[/mail_to]')?></li>
									</ul>
								</div>
							</div>
						</div><!-- end of team -->
						<div class="splide__slide hp-team">
							<div class="hp-team-wrap relative">
								<div class="team-img relative">
									<a href="#" class="block w-100 relative">
										<canvas width="280" height="440" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/agent-2.jpg" alt="JONATHAN SMITH" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
									</a>
								</div>
								<div class="team-content relative">
									<h4>JONATHAN SMITH</h4>
									<p>Realtor / Partner</p>
									<ul>
										<li><?= do_shortcode('[ai_phone unwrap_em="true" href="+1.941.586.4889"]Call 941.586.4889[/ai_phone]')?></li>
										<li> <?= do_shortcode('[mail_to email="jonathan@joemilanigroup.com"]jonathan@joemilanigroup.com[/mail_to]')?></li>
									</ul>
								</div>
							</div>
						</div><!-- end of team -->
						<div class="splide__slide hp-team">
							<div class="hp-team-wrap relative">
								<div class="team-img relative">
									<a href="#" class="block w-100 relative">
										<canvas width="280" height="440" class="block w-100"></canvas>
										<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/agent-3.jpg" alt="Joe Milani" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
									</a>
								</div>
								<div class="team-content relative">
									<h4>LELSIE WILLIAMS</h4>
									<p>Realtor / Partner</p>
									<ul>
										<li><?= do_shortcode('[ai_phone unwrap_em="true" href="+1.941.586.4889"]Call 941.586.4889[/ai_phone]')?></li>
										<li> <?= do_shortcode('[mail_to email="jonathan@joemilanigroup.com"]jonathan@joemilanigroup.com[/mail_to]')?></li>
									</ul>
								</div>
							</div>
						</div><!-- end of team -->
						<div class="splide__slide hp-team">
								<div class="hp-team-wrap relative">
									<div class="team-img relative">
										<a href="#" class="block w-100 relative">
											<canvas width="280" height="440" class="block w-100"></canvas>
											<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/agent-4.jpg" alt="Joe Milani" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
										</a>
									</div>
									<div class="team-content relative">
										<h4>adam roberts</h4>
										<p>Managing Director, Scottsdale</p>
										<ul>
											<li><?= do_shortcode('[ai_phone unwrap_em="true" href="+1.941.586.4889"]Call 941.586.4889[/ai_phone]')?></li>
											<li> <?= do_shortcode('[mail_to email="jonathan@joemilanigroup.com"]jonathan@joemilanigroup.com[/mail_to]')?></li>
										</ul>
									</div>
								</div>
						
						</div><!-- end of team -->

					</div>
				</div>
			</div><!-- end of teams -->

			
		</div><!-- end of teams -->

	</div><!-- end of meet the team container -->
</section><!-- end of meet the team -->

<section class="hp-cta">
	<div class="cta-container relative">
		
		<div class="cta-backgroud-slides relative">
			<canvas width="1600" height="700" class="block w-100"></canvas>

			<div class="cta-slide absolute w-100 h-100 active">
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/cta-defualt.jpg" alt="Call to Action" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
			</div>

			<div class="cta-slide absolute w-100 h-100 cta-1" data-slide="1">
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/cta-hover-1.jpg" alt="Call to Action" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
			</div>

			<div class="cta-slide absolute w-100 h-100 cta-2" data-slide="2">
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/cta-hover-1.jpg" alt="Call to Action" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
			</div>
			<div class="cta-slide absolute w-100 h-100 cta-3" data-slide="3">
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/cta-hover-1.jpg" alt="Call to Action" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
			</div>
		</div><!-- end of bg slides -->


		<div class="cta-links absolute top-0 left-0 w-100 h-100 flex justify-center items-center">
			<ul class="flex">
				<li><a href="#" class="block" data-slide="1">BUY</a></li>
				<li><a href="#" class="block" data-slide="2">HOME VALUATION</a></li>
				<li><a href="SELL" class="block" data-slide="3">Sell</a>	</li>
			</ul>
						
		</div>
	</div>
</section><!-- end of cta -->

<section class="hp-featured-properties accent-bg">
	<div class="fp-container">

		<div class="fp-title">
			<div class="default-title text-center">
				<h2 class="inline-block text-left">
					<span>FEATURED</span>
					<em>PROPERTIES</em>
				</h2>
			</div>
		</div><!-- end of fp title -->


		<div class="fp-lists splide">
			<div class="splide__track">
				<div class="splide__list">

					<div class="fp-list splide__slide">
						<a href="#" class="block w-100 relative">
							<div class="fp-img relative">
								<canvas width="674" height="500" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-1.jpg" alt="41 W Springfield Avenue Philadelphia, PA 19118" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fp-content absolute w-100 text-right right-0 bottom-0">
								<h3>$650,000</h3>
								<p>41 W Springfield Avenue Philadelphia, PA 19118</p>
								<span>VIEW DETAILS</span>
							</div>
							<div class="fp-info absolute">
								<div><i class="fp-beds"></i> 4 BEDS</div>
								<div><i class="fp-baths"></i> 2 BATHS</div>
								<div><i class="fp-sqft"></i> 1,498 SQ FT</div>
							</div>
						</a>
					</div><!-- end of fp list -->
					<div class="fp-list splide__slide">
						<a href="#" class="block w-100 relative">
							<div class="fp-img relative">
								<canvas width="674" height="500" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-2.jpg" alt="2201 Glenspring Lane Broomall, PA 19008" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fp-content absolute w-100 text-right right-0 bottom-0">
								<h3>$2,800,000</h3>
								<p>2201 Glenspring Lane Broomall, PA 19008</p>
								<span>VIEW DETAILS</span>
							</div>
							<div class="fp-info absolute">
								<div><i class="fp-beds"></i> 4 BEDS</div>
								<div><i class="fp-baths"></i> 2 BATHS</div>
								<div><i class="fp-sqft"></i> 1,498 SQ FT</div>
							</div>
						</a>
					</div><!-- end of fp list -->
					<div class="fp-list splide__slide">
						<a href="#" class="block w-100 relative">
							<div class="fp-img relative">
								<canvas width="674" height="500" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-3.jpg" alt="41 W Springfield Avenue Philadelphia, PA 19118" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fp-content absolute w-100 text-right right-0 bottom-0">
								<h3>$450,000</h3>
								<p>41 W Springfield Avenue Philadelphia, PA 19118</p>
								<span>VIEW DETAILS</span>
							</div>
							<div class="fp-info absolute">
								<div><i class="fp-beds"></i> 4 BEDS</div>
								<div><i class="fp-baths"></i> 2 BATHS</div>
								<div><i class="fp-sqft"></i> 1,498 SQ FT</div>
							</div>
						</a>
					</div><!-- end of fp list -->
					<div class="fp-list splide__slide">
						<a href="#" class="block w-100 relative">
							<div class="fp-img relative">
								<canvas width="674" height="500" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-1.jpg" alt="904 Cable Hill Drive UNIT 904 Springfield, PA 19064" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fp-content absolute w-100 text-right right-0 bottom-0">
								<h3>$289,900</h3>
								<p>904 Cable Hill Drive UNIT 904 Springfield, PA 19064</p>
								<span>VIEW DETAILS</span>
							</div>
							<div class="fp-info absolute">
								<div><i class="fp-beds"></i> 4 BEDS</div>
								<div><i class="fp-baths"></i> 2 BATHS</div>
								<div><i class="fp-sqft"></i> 1,498 SQ FT</div>
							</div>
						</a>
					</div><!-- end of fp list -->
					<div class="fp-list splide__slide">
						<a href="#" class="block w-100 relative">
							<div class="fp-img relative">
								<canvas width="674" height="500" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-1.jpg" alt="41 W Springfield Avenue Philadelphia, PA 19118" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fp-content absolute w-100 text-right right-0 bottom-0">
								<h3>$650,000</h3>
								<p>41 W Springfield Avenue Philadelphia, PA 19118</p>
								<span>VIEW DETAILS</span>
							</div>
							<div class="fp-info absolute">
								<div><i class="fp-beds"></i> 4 BEDS</div>
								<div><i class="fp-baths"></i> 2 BATHS</div>
								<div><i class="fp-sqft"></i> 1,498 SQ FT</div>
							</div>
						</a>
					</div><!-- end of fp list -->
					<div class="fp-list splide__slide">
						<a href="#" class="block w-100 relative">
							<div class="fp-img relative">
								<canvas width="674" height="500" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-2.jpg" alt="2201 Glenspring Lane Broomall, PA 19008" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fp-content absolute w-100 text-right right-0 bottom-0">
								<h3>$2,800,000</h3>
								<p>2201 Glenspring Lane Broomall, PA 19008</p>
								<span>VIEW DETAILS</span>
							</div>
							<div class="fp-info absolute">
								<div><i class="fp-beds"></i> 4 BEDS</div>
								<div><i class="fp-baths"></i> 2 BATHS</div>
								<div><i class="fp-sqft"></i> 1,498 SQ FT</div>
							</div>
						</a>
					</div><!-- end of fp list -->
					<div class="fp-list splide__slide">
						<a href="#" class="block w-100 relative">
							<div class="fp-img relative">
								<canvas width="674" height="500" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fp-3.jpg" alt="41 W Springfield Avenue Philadelphia, PA 19118" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fp-content absolute w-100 text-right right-0 bottom-0">
								<h3>$450,000</h3>
								<p>41 W Springfield Avenue Philadelphia, PA 19118</p>
								<span>VIEW DETAILS</span>
							</div>
							<div class="fp-info absolute">
								<div><i class="fp-beds"></i> 4 BEDS</div>
								<div><i class="fp-baths"></i> 2 BATHS</div>
								<div><i class="fp-sqft"></i> 1,498 SQ FT</div>
							</div>
						</a>
					</div><!-- end of fp list -->
					<div class="fp-list splide__slide">
						<a href="#" class="block w-100 relative">
							<div class="fp-img relative">
								<canvas width="674" height="500" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-1.jpg" alt="904 Cable Hill Drive UNIT 904 Springfield, PA 19064" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fp-content absolute w-100 text-right right-0 bottom-0">
								<h3>$289,900</h3>
								<p>904 Cable Hill Drive UNIT 904 Springfield, PA 19064</p>
								<span>VIEW DETAILS</span>
							</div>
							<div class="fp-info absolute">
								<div><i class="fp-beds"></i> 4 BEDS</div>
								<div><i class="fp-baths"></i> 2 BATHS</div>
								<div><i class="fp-sqft"></i> 1,498 SQ FT</div>
							</div>
						</a>
					</div><!-- end of fp list -->


				</div>
			</div>

		</div><!-- end of fp lists -->


		<div class="default-pagination fp-pagination flex items-center justify-center">
			<div class="arrow-left">
				<button data-arrow="prev">
					<i></i>Prev
				</button>
			</div>
			<div class="default-button">
				<a href="#" class="block w-100 relative">VIEW ALL PROPERTIES</a>
			</div>
			<div class="arrow-right">
				<button data-arrow="next">
					Next <i></i>
				</button>
			</div>
		</div>
	</div>
</section><!-- end of featured properties -->

<section class="hp-featured-communities">

	<div class="fc-container">

		<div class="fc-title">
			<div class="default-title text-center">
				<h2 class="inline-block text-left">
					<span>FEATURED</span>
					<em>COMMUNITIES</em>
				</h2>
			</div>
		</div><!-- end of fc title -->


		<div class="fc-lists splide">
			<div class="splide__track">
				<div class="splide__list">

					<div class="fc-list splide__slide">
						<a href="#" class="block relative w-100">
							<div class="fc-img relative">
								<canvas width="533" height="400" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-1.jpg" alt="Havertown" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fc-content-wrap absolute w-100 h-100 top-0 left-0">
								<div class="fc-content w-100 h-100 flex flex-col items-center justify-end">
									<h4>Havertown</h4>
									<span>EXPLORE</span>
								</div>
							</div>
						</a>
					</div><!-- end of fc list -->
					<div class="fc-list splide__slide">
						<a href="#" class="block relative w-100">
							<div class="fc-img relative">
								<canvas width="533" height="400" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-2.jpg" alt="Ardmore" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fc-content-wrap absolute w-100 h-100 top-0 left-0">
								<div class="fc-content w-100 h-100 flex flex-col items-center justify-end">
									<h4>Ardmore</h4>
									<span>EXPLORE</span>
								</div>
							</div>
						</a>
					</div><!-- end of fc list -->
					<div class="fc-list splide__slide">
						<a href="#" class="block relative w-100">
							<div class="fc-img relative">
								<canvas width="533" height="400" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-3.jpg" alt="Haverford" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fc-content-wrap absolute w-100 h-100 top-0 left-0">
								<div class="fc-content w-100 h-100 flex flex-col items-center justify-end">
									<h4>Haverford</h4>
									<span>EXPLORE</span>
								</div>
							</div>
						</a>
					</div><!-- end of fc list -->
					<div class="fc-list splide__slide">
						<a href="#" class="block relative w-100">
							<div class="fc-img relative">
								<canvas width="533" height="400" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-4.jpg" alt="Bryn Mawr" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fc-content-wrap absolute w-100 h-100 top-0 left-0">
								<div class="fc-content w-100 h-100 flex flex-col items-center justify-end">
									<h4>Bryn Mawr</h4>
									<span>EXPLORE</span>
								</div>
							</div>
						</a>
					</div><!-- end of fc list -->
					<div class="fc-list splide__slide">
						<a href="#" class="block relative w-100">
							<div class="fc-img relative">
								<canvas width="533" height="400" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-5.jpg" alt="Wayne" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fc-content-wrap absolute w-100 h-100 top-0 left-0">
								<div class="fc-content w-100 h-100 flex flex-col items-center justify-end">
									<h4>Wayne</h4>
									<span>EXPLORE</span>
								</div>
							</div>
						</a>
					</div><!-- end of fc list -->
					<div class="fc-list splide__slide">
						<a href="#" class="block relative w-100">
							<div class="fc-img relative">
								<canvas width="533" height="400" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-6.jpg" alt="Newtown Square" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fc-content-wrap absolute w-100 h-100 top-0 left-0">
								<div class="fc-content w-100 h-100 flex flex-col items-center justify-end">
									<h4>Newtown Square</h4>
									<span>EXPLORE</span>
								</div>
							</div>
						</a>
					</div><!-- end of fc list -->
					<div class="fc-list splide__slide">
						<a href="#" class="block relative w-100">
							<div class="fc-img relative">
								<canvas width="533" height="400" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-1.jpg" alt="Havertown" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fc-content-wrap absolute w-100 h-100 top-0 left-0">
								<div class="fc-content w-100 h-100 flex flex-col items-center justify-end">
									<h4>Havertown</h4>
									<span>EXPLORE</span>
								</div>
							</div>
						</a>
					</div><!-- end of fc list -->
					<div class="fc-list splide__slide">
						<a href="#" class="block relative w-100">
							<div class="fc-img relative">
								<canvas width="533" height="400" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-2.jpg" alt="Ardmore" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fc-content-wrap absolute w-100 h-100 top-0 left-0">
								<div class="fc-content w-100 h-100 flex flex-col items-center justify-end">
									<h4>Ardmore</h4>
									<span>EXPLORE</span>
								</div>
							</div>
						</a>
					</div><!-- end of fc list -->
					<div class="fc-list splide__slide">
						<a href="#" class="block relative w-100">
							<div class="fc-img relative">
								<canvas width="533" height="400" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-3.jpg" alt="Haverford" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fc-content-wrap absolute w-100 h-100 top-0 left-0">
								<div class="fc-content w-100 h-100 flex flex-col items-center justify-end">
									<h4>Haverford</h4>
									<span>EXPLORE</span>
								</div>
							</div>
						</a>
					</div><!-- end of fc list -->
					<div class="fc-list splide__slide">
						<a href="#" class="block relative w-100">
							<div class="fc-img relative">
								<canvas width="533" height="400" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-4.jpg" alt="Bryn Mawr" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fc-content-wrap absolute w-100 h-100 top-0 left-0">
								<div class="fc-content w-100 h-100 flex flex-col items-center justify-end">
									<h4>Bryn Mawr</h4>
									<span>EXPLORE</span>
								</div>
							</div>
						</a>
					</div><!-- end of fc list -->
					<div class="fc-list splide__slide">
						<a href="#" class="block relative w-100">
							<div class="fc-img relative">
								<canvas width="533" height="400" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-5.jpg" alt="Wayne" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fc-content-wrap absolute w-100 h-100 top-0 left-0">
								<div class="fc-content w-100 h-100 flex flex-col items-center justify-end">
									<h4>Wayne</h4>
									<span>EXPLORE</span>
								</div>
							</div>
						</a>
					</div><!-- end of fc list -->
					<div class="fc-list splide__slide">
						<a href="#" class="block relative w-100">
							<div class="fc-img relative">
								<canvas width="533" height="400" class="block w-100"></canvas>
								<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/fc-6.jpg" alt="Newtown Square" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
							</div>
							<div class="fc-content-wrap absolute w-100 h-100 top-0 left-0">
								<div class="fc-content w-100 h-100 flex flex-col items-center justify-end">
									<h4>Newtown Square</h4>
									<span>EXPLORE</span>
								</div>
							</div>
						</a>
					</div><!-- end of fc list -->					
				</div>
			</div>
		</div><!-- end of fp list -->


		
		<div class="default-pagination fc-pagination flex items-center justify-center">
			<div class="arrow-left">
				<button data-arrow="prev">
					<i></i>Prev
				</button>
			</div>
			<div class="default-button">
				<a href="#" class="block w-100 relative">VIEW ALL COMMUNITIES</a>
			</div>
			<div class="arrow-right">
				<button data-arrow="next">
					Next <i></i>
				</button>
			</div>
		</div>

	</div>
</section><!-- end of featured communities -->

<section class="hp-our-services relative">
	<div class="services-container default-container relative">	
		
		<div class="services-title">
			<div class="default-title __title-inverted text-center">
				<h2 class="inline-block text-left">
					<span>OUR</span>
					<em>SERVICES</em>
				</h2>
			</div>
		</div>
		<div class="hp-services flex">

			<div class="hp-service w-50">
				<a href="#" class="block w-100 relative">
					<div class="service-img relative">
						<canvas width="674" height="430" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/construction-company.jpg" alt="Construction Company" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
					</div>
					<div class="service-content absolute w-100">
						<h3>Construction Company</h3>
					</div>
				</a>
			</div><!-- end of hp service -->
			<div class="hp-service w-50">
				<a href="#" class="block w-100 relative">
					<div class="service-img relative">
						<canvas width="674" height="430" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/property-investment.jpg" alt="Property Investments" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
					</div>
					<div class="service-content absolute w-100">
						<h3>Property Investments</h3>
					</div>
				</a>
			</div><!-- end of hp service -->
		</div><!-- end of hp service -->

	</div><!-- end of services container -->
</section><!-- end of our services -->
<section class="hp-social-media accent-bg">
	<div class="hp-social-media-container default-container flex items-start">
		<div class="social-media-content relative">

			<div class="default-title">
				<h2 class="inline-block text-left">
					<span>FOLLOW US ON</span>
					<em>SOCIAL MEDIA</em>
				</h2>
			</div>
			<p>Follow us on social media for the most exclusive real estate news and photos from our amazing listings with updates and more.</p>

			<div class="social-media-head flex items-center justify-between">

				<div class="social-client-info flex items-center">
					<div class="sc-image relative">
						<canvas width="100" height="101" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/small-agentphoto.jpg" alt="Joe Milani" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
					</div>
					<div class="sc-text">
						<h5>Joe Milani</h5>
						<p>@joemilanirealestategroup</p>
					</div>
				</div>

				<div class="sc-button">
					<a href="#" class="block w-100 relative"><i class="ai-font-instagram"></i>FOLLOW</a>
				</div>

			</div>
			<div class="social-media-smi flex justify-between items-center">
				<h2>CHECK JOE MILANI ON OTHER SOCIAL MEDIA PLATFORMS:</h2>
				<ul class="flex">
					<li><a href="#" target="_blank" class="block"><i class="ai-font-facebook"></i> Facebook</a></li>
					<li><a href="#" target="_blank" class="block"><i class="ai-font-linkedin"></i> Linkedin</a></li>
					<li><a href="#" target="_blank" class="block"><i class="ai-font-zillow"></i> Zillow</a></li>
					<li><a href="#" target="_blank" class="block"><i class="ai-font-tiktok"></i> Tiktok</a></li>
				</ul>
			</div>


		</div><!-- end of social media content -->
		<div class="social-media-images flex items-start flex-wrap-wrap">
			
			<div class="sm-ig w-50">
				<a href="#" class="relative block w-100">
					<div class="smig-img relative">
						<canvas width="334" height="300" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/ig-1.jpg" alt="IG" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
					</div>
					<div class="smig-text-wrap absolute left-0 top-0 w-100 h-100">
						<div class="smig-text w-100 h-100 flex flex-col justify-center items-center">
							<p><i class="sm-heart"></i>1,483</p>
							<p><i class="sm-cloud"></i>301</p>
						</div>
					</div>
				</a>
			</div>
			<div class="sm-ig w-50">
				<a href="#" class="relative block w-100">
					<div class="smig-img relative">
						<canvas width="334" height="300" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/ig-2.jpg" alt="IG" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
					</div>
					<div class="smig-text-wrap absolute left-0 top-0 w-100 h-100">
						<div class="smig-text w-100 h-100 flex flex-col justify-center items-center">
							<p><i class="sm-heart"></i>1,483</p>
							<p><i class="sm-cloud"></i>301</p>
						</div>
					</div>
				</a>
			</div>
			<div class="sm-ig w-50">
				<a href="#" class="relative block w-100">
					<div class="smig-img relative">
						<canvas width="334" height="300" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/ig-3.jpg" alt="IG" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
					</div>
					<div class="smig-text-wrap absolute left-0 top-0 w-100 h-100">
						<div class="smig-text w-100 h-100 flex flex-col justify-center items-center">
							<p><i class="sm-heart"></i>1,483</p>
							<p><i class="sm-cloud"></i>301</p>
						</div>
					</div>
				</a>
			</div>
			<div class="sm-ig w-50">
				<a href="#" class="relative block w-100">
					<div class="smig-img relative">
						<canvas width="334" height="300" class="block w-100"></canvas>
						<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/ig-4.jpg" alt="IG" class="block w-100 absolute left-0 top-0 object-fit-cover object-position-center h-100">
					</div>
					<div class="smig-text-wrap absolute left-0 top-0 w-100 h-100">
						<div class="smig-text w-100 h-100 flex flex-col justify-center items-center">
							<p><i class="sm-heart"></i>1,483</p>
							<p><i class="sm-cloud"></i>301</p>
						</div>
					</div>
				</a>
			</div>


		</div><!-- end of social media images -->
	</div><!-- end of hp social media -->
</section><!-- end of social media -->
<section class="hp-testimonials accent-bg">
	<div class="testimonials-container flex">

		<div class="testimonials-title">

			<div class="default-title">
				<h2 class="inline-block text-left">
					<span>TESTIMONIALS</span>
					<em>WHAT OUR CLIENTS ARE SAYING</em>
				</h2>
			</div>

			<div class="default-pagination testi-pagination flex items-center">
				<div class="arrow-left">
					<button data-arrow="prev">
						<i></i>Prev
					</button>
				</div>
				<div class="separator"></div>
				<div class="arrow-right">
					<button data-arrow="next">
						Next <i></i>
					</button>
				</div>
			</div>

			<div class="default-button">
				<a href="#" class="inline-block  relative">VIEW ALL TESTIMONIALS</a>
			</div>
		</div><!-- end of testimonials title -->


		<div class="testimonials-content flex items-start">
			<div class="test-img">
				<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/testi-img.jpg" alt="Testimonials" class="block w-100 relative">
			</div>

			<div class="testi-lists splide">
				<div class="splide__track">
					<div class="splide__list">
						<div class="testi-list splide__slide">
							<h4>Joe was a huge help throughout our search and home-buying process. Having grown up in the area, he was extremely knowledgeable about the different neighborhoods and school districts we were exploring. </h4>
							<p>He was always available and communication was smooth and easy. On the few occasions he wasn't around to accompany us on a home visit, his team of associates were also great (Anna especially!). </p>
							<p>Would absolutely work with Joe again and would recommend him to anyone looking for a new home in the area. At the end of the day, with Joe's help, I found a wonderful home and I am very happy. I'd say that is the ultimate goal of any home search!</p>
							<h5>Colin Reynolds</h5>
							<span>Bought a Single Family home in 2018 in Glen Mills, PA.</span>
						
						</div><!-- end of testi list -->
						<div class="testi-list splide__slide">
							<h4>Joe was a huge help throughout our search and home-buying process. Having grown up in the area, he was extremely knowledgeable about the different neighborhoods and school districts we were exploring. </h4>
							<p>He was always available and communication was smooth and easy. On the few occasions he wasn't around to accompany us on a home visit, his team of associates were also great (Anna especially!). </p>
							<p>Would absolutely work with Joe again and would recommend him to anyone looking for a new home in the area. At the end of the day, with Joe's help, I found a wonderful home and I am very happy. I'd say that is the ultimate goal of any home search!</p>
							<h5>Colin Reynolds</h5>
							<span>Bought a Single Family home in 2018 in Glen Mills, PA.</span>
						
						</div><!-- end of testi list -->
					</div>
				</div>
			</div>

		</div><!-- end of testimonials content -->

	</div>
</section><!-- end of hp testimonials -->
<?php get_footer(); ?>
