<?php get_header(); 
/* Template Name: Contact*/?>

<section id="contact">
	<header>
		<h1 class="title">Learn how a mobile POS can work for you</h1>
		<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin scelerisque laoreet posuere. Curabitur quis nisl quam. Nunc dictum pulvinar pretium.</p>
	</header>

	<div class="formWrap">
		<?php echo do_shortcode('[gravityform id="2" title="false" description="false" ajax="true" tabindex="100"]'); ?>
	</div>
</section>

<?php get_footer(); ?>