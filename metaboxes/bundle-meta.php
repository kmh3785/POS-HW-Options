<?php global $wpalchemy_media_access; ?>
<div class="my_meta_control">
 
	<label>Pricing</label>

	<p>
		<?php $mb->the_field('leasePrice'); ?>
		$ <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<span>What is the lease price?</span>
	</p>

	<p>
		<?php $mb->the_field('purchasePrice'); ?>
		$ <input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
		<span>What is the purchase price?</span>
	</p>

	<hr>

	<label>Benefits</label>
	<table class="benefits">
		<tr>
			<td>
				<p>
					<?php // $mb->the_field('benefit1_img'); ?>
   					<?php // $wpalchemy_media_access->setGroupName('nn')->setInsertButtonLabel('Insert'); ?>
       				<?php // echo $wpalchemy_media_access->getField(array('name' => $mb->get_the_name(), 'value' => $mb->get_the_value())); ?>
        			<?php // echo $wpalchemy_media_access->getButton(); ?>
    
				</p>				
				<p>
					<?php $mb->the_field('benefit1_title'); ?>
					<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
				</p>

				<p>
					<?php $mb->the_field('benefit1_about'); ?>
					<textarea type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/><?php $mb->the_value(); ?></textarea>
				</p>
			</td>

			<td>				
				<p>
					<?php $mb->the_field('benefit2_title'); ?>
					<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
				</p>

				<p>
					<?php $mb->the_field('benefit2_about'); ?>
					<textarea type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/><?php $mb->the_value(); ?></textarea>
				</p>
			</td>

			<td>				
				<p>
					<?php $mb->the_field('benefit3_title'); ?>
					<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
				</p>

				<p>
					<?php $mb->the_field('benefit3_about'); ?>
					<textarea type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/><?php $mb->the_value(); ?></textarea>
				</p>
			</td>

			<td>				
				<p>
					<?php $mb->the_field('benefit4_title'); ?>
					<input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/>
				</p>

				<p>
					<?php $mb->the_field('benefit4_about'); ?>
					<textarea type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/><?php $mb->the_value(); ?></textarea>
				</p>
			</td>
		</tr>
	</table>

	<hr>

	<div class="features">
		<h3>Features</h3>
		<a style="float:right; margin:0 10px;" href="#" class="dodelete-features button">Remove All</a>
		 
		<?php while($mb->have_fields_and_multi('features')): ?>
		<?php $mb->the_group_open(); ?>
		 
		    <?php $mb->the_field('featureTitle'); ?>
		    <label>Title</label>
		    <p><input type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/></p>
		     
		    <?php $mb->the_field('featureDescription'); ?>
		    <p><textarea type="text" name="<?php $mb->the_name(); ?>" value="<?php $mb->the_value(); ?>"/><?php $mb->the_value(); ?></textarea></p>
		 
		<?php $mb->the_group_close(); ?>
		<?php endwhile; ?>
		 
		<p style="margin-bottom:15px; padding-top:5px;"><a href="#" class="docopy-features button">Add Feature</a></p>
		<!-- <p>
			<?php $mb->the_field('features');

			$settings = array(
				'textarea_rows' => '10',
				'media_buttons' => false,
				'tabindex' =>2,
				'textarea_name' => $mb->get_the_name(),
			);

			// need to html_entity_decode() the value b/c WP Alchemy's get_the_value() runs the data through htmlentities()
			wp_editor( html_entity_decode( $mb->get_the_value() ),  $mb->get_the_id() , $settings );
			?>

			 <span>Enter in some text</span>
		</p>

		<p class="meta-save"><button type="submit" class="button-primary" name="save"><?php _e('Update');?></button></p> -->
	</div>

</div>