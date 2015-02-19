<?php get_header(); 
/* Template Name: POS Bundles*/?>

<section id="hero" style="background:url('http://lorempixel.com/1000/400/abstract')">
	<div class="content">
		<div class="intro">
			<h1 class="title">Get started in minutes</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut cursus mauris, facilisis pellentesque lorem. Etiam vulputate placerat orci sit amet congue. Aliquam nibh ex, sagittis in ante ac, consectetur viverra sapien. Quisque vulputate velit eu velit viverra volutpat.</p>
		</div>
		<!-- <div class="image">
			<img src="<?php echo get_template_directory_uri(); ?>/img/vault_ipad.png">
		</div> -->
	</div>
</section>

<section class="aboutBundles">
	<div class="content">
		<header>
			<h2 class="title">What is in a POS bundle?</h2>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut cursus mauris, facilisis pellentesque lorem. Etiam vulputate placerat orci sit amet congue. Aliquam nibh ex, sagittis in ante ac.</p>
		</header>

		<div class="bundleItems">

			<!-- <h5 class="title">The Hardware</h5> -->
		
			<div class="item">
				<img src="http://lorempixel.com/401/150/">
				<h4 class="title">iPad and stand</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut cursus mauris, facilisis pellentesque lorem. Etiam vulputate placerat orci sit amet congue.</p>
			</div>

			<div class="item">
				<img src="http://lorempixel.com/402/150/">
				<h4 class="title">Card Reader</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut cursus mauris, facilisis pellentesque lorem. Etiam vulputate placerat orci sit amet congue.</p>
			</div>

			<div class="item">
				<img src="http://lorempixel.com/403/150/">
				<h4 class="title">Receipt Printer</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut cursus mauris, facilisis pellentesque lorem. Etiam vulputate placerat orci sit amet congue.</p>
			</div>

			<div class="item">
				<img src="http://lorempixel.com/404/150/">
				<h4 class="title">Cash Drawer</h4>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ut cursus mauris, facilisis pellentesque lorem. Etiam vulputate placerat orci sit amet congue.</p>
			</div>
		</div>
	</div>
</section>

<section class="features">
	<div class="content">
		<h2 class="title">Features</h2>
		<div class="supportingImage">
			<img src="http://lorempixel.com/404/500/">
		</div>

		<div class="featuresList">
			<h3>Something something something</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
			<ul>
				<li>
					<strong>Feature 1</strong>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</li>
				<li>
					<strong>Feature 2</strong>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</li>
				<li>
					<strong>Feature 3</strong>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</li>
				<li>
					<strong>Feature 4</strong>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				</li>
			</ul>
			<a href="">A link to somewhere &rarr;</a>
		</div>
	</div>
</section>

<section class="findBundle">
	<div class="content">
		<div class="formWrap">
			<h2 class="title">Which bundle is right for me?</h2>
			<p>We can help you figure that out! Let's start simple: <strong>What kind of business do you run?</strong></p>
			<?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="true" tabindex="100"]'); ?>
		</div>
	</div>
</section>

<section class="funFacts">
	<div class="content">
		<header>
			<h2 class="title">Still not convinced?</h2>
			<p>Check out some of these fun facts:</p>
		</header>
		<ul class="factsList">
			<li>51% of U.S. consumers surveyed stated that they believe traditional cash registers are outdated</li>
			<li>35% of respondents said that they would shop at a store more often if it offered a mobile POS solution</li>
			<li>26% of consumers feel more comfortable using a mobile POS in retail</li>
			<li>Mobile POS terminal adoption is expected to increase from 4.5 million to a staggering 38 million by 2017</li>
			<li>Mobile POS' ease of use is cited as it's unique selling point by the majority of businesses</li>
			<li>45% of businesses surveyed said Mobile POS could improve cash flow as it would allow them to get paid quicker</li>
		</ul>
	</div>
</section>

<?php get_footer(); ?>