<?php get_header();
$bundle_metabox->the_meta(); 
?>

<div id="hero">
	<div class="content">
		<div class="bundleInfo">
			<h1 class="title">The <?php the_title(); ?> Bundle</h1>
			<h4>Lease now for just $<?php $bundle_metabox->the_value('leasePrice'); ?></h4>
			<span class="purchase">Or buy it now for $<?php $bundle_metabox->the_value('purchasePrice'); ?></span>
			<button class="primary">get started</button>
		</div>
		<div class="bundleImage">
			<img src="http://lorempixel.com/400/200" />
		</div>
	</div>
</div>

<div class="benefits">
	<div class="content">
		<div class="item">
			<img src="http://lorempixel.com/200/200" />
			<strong><?php $bundle_metabox->the_value('benefit1_title'); ?></strong>
			<p><?php $bundle_metabox->the_value('benefit1_about'); ?></p>
		</div>

		<div class="item">
			<img src="http://lorempixel.com/200/200" />
			<strong><?php $bundle_metabox->the_value('benefit2_title'); ?></strong>
			<p><?php $bundle_metabox->the_value('benefit2_about'); ?></p>
		</div>

		<div class="item">
			<img src="http://lorempixel.com/200/200" />
			<strong><?php $bundle_metabox->the_value('benefit3_title'); ?></strong>
			<p><?php $bundle_metabox->the_value('benefit3_about'); ?></p>
		</div>

		<div class="item">
			<img src="http://lorempixel.com/200/200" />
			<strong><?php $bundle_metabox->the_value('benefit4_title'); ?></strong>
			<p><?php $bundle_metabox->the_value('benefit4_about'); ?></p>
		</div>
	</div>
</div>


<div id="features">
	<div class="content">
		<header>
			<h1 class="title">Features</h1>
		</header>

		<div class="supportingImage">
			<img src="http://lorempixel.com/600/1000" />
		</div>

		<div class="featuresList">
		<?php $bundle_metabox->the_value('featureTitle'); ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>