<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400, 500' rel='stylesheet' type='text/css'>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>
		<script>
        // conditionizr.com
        // configure environment tests
        conditionizr.config({
            assets: '<?php echo get_template_directory_uri(); ?>',
            tests: {}
        });
        </script>

	</head>
	<body <?php body_class(); ?>>
		<div class="wrapper">
  <div id="header">
    <div id="logo">
      <h1><a href="index/"><img src="http://www.appekapps.com/wp-content/uploads/2015/01/cornerLogo.png" alt="Appek the house app"></a></h1>
    </div>
    				<!-- nav -->
					<div id="topnav">
					<?php html5blank_nav(); ?>
					</div>
				<!-- /nav -->    
<br class="clear" />
  </div>
</div>	
			<!-- /header -->
