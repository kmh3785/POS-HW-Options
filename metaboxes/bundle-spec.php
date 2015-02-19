<?php

$bundle_metabox = $bundle_mb = new WPAlchemy_MetaBox(array
(
	'id' => '_bundle_meta',
	'title' => 'POS Bundle Meta',
	'template' => get_stylesheet_directory() . '/metaboxes/bundle-meta.php',
	'types' => array ('pos_bundle'),
));

/* eof */