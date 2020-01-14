<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>

		<link href="//www.google-analytics.com" rel="dns-prefetch">
        <link href="<?php echo get_template_directory_uri(); ?>/image/site/favicon.ico" rel="shortcut icon">
        <link href="<?php echo get_template_directory_uri(); ?>/image/site/touch.png" rel="apple-touch-icon-precomposed">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php bloginfo('description'); ?>">

		<?php wp_head(); ?>

	</head>
	<body>

        <header class="section" id="page_header">
            <div class="container">

               <h1><a href="/" class="logo">Supadu! <span>Basic custom theme example</span></a></h1>

               <button id="primary_navigation_trigger" class="icon-before icon-close"><span class="visually-hidden">Menu</span></button>

            </div>
        </header>

        <div id="primary_navigation" class="primary_navigation--active">

            <ul class="primary_navigation_list">
                <li class="primary_navigation_item"><a href="#n" class="inline_link"><span class="link_text">Menu item 1</span></a></li>
                <li class="primary_navigation_item"><a href="#n/" class="inline_link"><span class="link_text">Menu item 2</span></a></li>
                <li class="primary_navigation_item"><a href="#n" class="inline_link"><span class="link_text">Menu item 3</span></a></li>
            </ul>

        </div>

        <div role="main" id="page_body" tabindex="-1">