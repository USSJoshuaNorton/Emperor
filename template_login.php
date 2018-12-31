<?php
/*
|---------------------------------------------------------------
| TEMPLATE - LOGIN
|---------------------------------------------------------------
|
| File: application/views/beta/template_login.php
| Skin Version: 1.0
|
| Login template file used by the beta skin.
|
| $sec options are: main, wiki, admin, login
| $css can be anything you want (with a .css extension of course)
|
*/

$sec = 'global'; /* set the section of the system */
$css = 'main.css'; /* the name of the main css file */

$path_raw = dirname(__FILE__); /* absolute path of the current file */
$path = explode('/', $path_raw); /* explode the string into an array */

if (count($path) <= 1)
{ /* Windows servers use back slashes, so we have to capture for that */
	$path = explode('\\', $path_raw);
}

$pcount = count($path); /* count the number of keys in the array */
$skin_loc = $pcount -1; /* create the first element used */
$current_skin = $path[$skin_loc];

/* set the final style location */
$style_loc = APPFOLDER . '/views/' . $current_skin . '/' . $sec . '/css/' . $css;

/* set up the link tag parameters */
$link = array(
	'href'	=> 	$style_loc,
	'rel'	=> 	'stylesheet',
	'type'	=> 	'text/css',
	'media'		=> 'screen',
	'charset'	=> 'utf-8'
);

echo "<?xml version='1.0' encoding='UTF-8'?>\r\n";

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "https://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="https://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title><?php echo $title;?></title>
		<link rel="dns-prefetch" href="//fa.deathkitten.net/" />
		<link rel="dns-prefetch" href="//code.jquery.com/" />
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="language" content="en" />
		<meta name="description" content="<?php echo $this->config->item('meta_desc');?>" />
		<meta name="keywords" content="<?php echo $this->config->item('meta_keywords');?>" />
		<meta name="author" content="<?php echo $this->config->item('meta_author');?>" />
		<?php include("twittercard.php"); ?>
		<meta name="viewport" content="initial-scale=1"> 
		<?php echo $_redirect;?>
		
		<!-- STYLESHEETS -->
		<?php echo link_tag($link); ?>
		<link type="text/css" rel="stylesheet" href="https://fa.deathkitten.net/fa5/css/all.css" />
		
		<!-- JAVASCRIPT FILES -->
		<?php include_once($this->config->item('include_head_login')); ?>
		<script src="/application/views/neptune/global/js/navigation.js" type="text/javascript"></script>
		
		<?php echo $javascript;?>
	</head>
	<body>
		<noscript>
			<div class="system_warning"><?php echo lang_output('text_javascript_off', '');?></div>
		</noscript>

		<!-- HEADER -->
			<div id="header">
				<!-- MENU -->
				<div class="nav-bar">
							<ul>
								<li><div class="main-toggle" style="width: 40px;height: 40px;"><a href="/"><span class="fal fa-home nav-icon"></span></a></div></li>
								
								<center><li id="logo"><a href="/"><?php echo text_output($this->options['sim_name'], '');?></a></li></center>
								</ul>
				</div>
				<?php echo text_output($header, 'h1', 'other-head-text');?>
			</div>
		
		<!-- BODY -->
		<div id="body">
			<div class="wrapper">
					
				<!-- PAGE CONTENT -->
				<div class="content">
					<?php echo $flash_message;?>
					<?php echo $content;?>

				</div>
			</div>
		</div>
</html>
