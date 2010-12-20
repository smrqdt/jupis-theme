<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>">
<head>
<title><?php print $head_title ?></title>
<?php print $head ?>
<?php print $styles ?>
<?php print $scripts ?>
</head>
<body class="<?php print $body_classes; ?>">
<div id="background"><div id="pageWrap">
	<div id="header2">
<div id="header">
		<?php if ($logo) { ?><a href="<?php print $front_page ?>" title="<?php print $site_name.'-'.t('Home') ?>"><img src="<?php print $logo ?>" alt="<?php print $site_name.'-'.t('Home') ?>" /></a><?php } ?>			

<?php if ($site_name) { ?><h1 class="site-name"><a href="<?php print $front_page ?>" title="<?php print $site_name ?>"><?php print $site_name ?></a></h1><?php } ?>
					
		
		</div>
	</div>


<div id="linksprimary">

  <div class="container clearfix">
<?php if ($primary_links): ?>
          <?php print theme('links', $primary_links, $attributes = array('id' => 'lavaLampBorderOnly')); ?>
      <?php endif; ?>
</div> 
</div><div><div id="schatten"></div>

	<div id="outerColumn">
		<div id="innerColumn">
			<div id="soContainer">
				<div id="content">
					<div class="inside">
						<?php if ($mission) { ?><div class="mission"><?php print $mission ?></div><?php } ?>
						<?php if ($header) { ?><div class="intro"><?php print $header ?></div><?php } ?>
						<?php print $breadcrumb ?>
						<?php if ($tabs) { ?><div class="tabs"><?php print $tabs ?></div><?php } ?>
						<?php if ($title) { ?><h2 class="title"><?php print $title ?></h2><div id="h1bottom"></div><?php } ?>

						<?php print $help ?>
						<?php if ($show_messages) { print $messages; } ?>
						<?php print $content; ?>
						
					
				</div></div>
<!-- <?php if ($search_box) { ?><div class="header_right">
				<div class="search">
					<?php print $search_box ?>
				</div></div>
				
			<?php } ?> -->
				<?php if ($left) { ?><div id="leftCol">
					<div class="inside">
			
			
<?php print $left ?>
					
</div>
				</div><?php } ?>
				
			</div>
			<?php if ($right) { ?><div id="rightCol">
				<div class="inside">
					<?php print $right ?>
				</div>
			</div><?php } ?>
		</div>
		<div class="clr"></div>
	</div>
	<div id="footer">
		<div class="inside">
			<?php if ($footer_message || $footer) { ?><div class="footer_left">
				<?php print $footer_message ?>
				<?php print $footer ?>
			</div><?php } ?>
			<div class="footer_right">
				<div class="designed">designed by <a href="http://www.reizkraft.com">Reizkraft.com</a></div>
			</div>
			<div id="footer-image">&#160;</div>

		
	</div>
</div></div></div>
<?php print $closure ?>
</body>
</html>
