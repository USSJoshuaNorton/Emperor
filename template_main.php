<?php
/*
|---------------------------------------------------------------
| TEMPLATE - MAIN
|---------------------------------------------------------------
|
| File: application/views/beta/template_main.php
| Skin Version: 1.0
|
| Main template file used by the beta skin.
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

$this->load->helper('panel');
$panel = array(
   'inbox'      => array('src' => APPFOLDER.'/views/'.$current_skin.'/global/images/panel-mail.png'),
   'writing'   => array('src' => APPFOLDER.'/views/'.$current_skin.'/global/images/panel-writing.png'),
);

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
		<meta name="google-site-verification" content="eNwGDe7jP5Jp6wJz9y9gx3JwO72RmzVkvfg0HumVYVY" />
		<meta name="google-site-verification" content="fJbFfd74dLRIJy-E5iMrEA9gaLuDpMK75z6ur3u0RG0" />
		<meta name="viewport" content="initial-scale=1"> 
		<?php echo $_redirect;?>
		
		<!-- STYLESHEETS -->
		<?php echo link_tag($link); ?>
		<link type="text/css" rel="stylesheet" href="https://fa.deathkitten.net/fa5/css/all.css" />

		
		<!-- JAVASCRIPT FILES -->
		<?php include_once($this->config->item('include_head_main')); ?>
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
								<li><div class="main-toggle" style="width: 40px;height: 40px;"><span class="fal fa-bars nav-icon"></span></div></li>
								<div class="main-side-nav"><?php echo str_replace('<ul' , '<ul class="side-main"' , $nav_main);?><br /><li class="logged-in-controls-mobile">
                         <?php if (Auth::is_logged_in()): ?>
                               <?php echo panel_inbox(true, true, false, '(x)', img($panel['inbox']));?> &nbsp;
                               <?php echo panel_writing(true, true, false, '(x)', img($panel['writing']));?> &nbsp;
                               <a href="/user/account"><span class="fal fa-cog fa-fw" aria-hidden="true"></span></a> &nbsp;
                               <a class="head-btn-out-main-mobile" href="/login/logout"><span class="fal fa-sign-out fa-fw" aria-hidden="true" title="Logout"></span></a>
                         <?php else: ?>
										<a href="/login/index"><span class="fal fa-sign-in fa-fw" aria-hidden="true" title="Login"></span></a>

                         <?php endif;?>
                </li></div>
								<center><li id="logo"><a href="/"><?php echo text_output($this->options['sim_name'], '');?></a></li></center>
								<li><div class="sub-toggle" style="width: 40px;height: 40px;"><span class="fal fa-folder-open nav-icon"></span></div></li>
								<div class="sub-side-nav"><?php echo str_replace('<ul' , '<ul class="side-main"' , $nav_sub);?></div>
                <li class="logged-in-controls">
                         <?php if (Auth::is_logged_in()): ?>
                               <?php echo panel_inbox(true, true, false, '(x)', img($panel['inbox']));?> &nbsp;
                               <?php echo panel_writing(true, true, false, '(x)', img($panel['writing']));?> &nbsp;
                               <a href="/user/account"><span class="fal fa-cog fa-fw" aria-hidden="true"></span></a> &nbsp;
                               <a class="head-btn-out-main" href="/login/logout"><span class="fal fa-sign-out fa-fw" aria-hidden="true" title="Logout"></span></a>
                         <?php else: ?>
										<a class="head-btn-main" href="/login/index"><span class="fal fa-sign-in fa-fw" aria-hidden="true" title="Login"></span></a>
                         <?php endif;?>
                </li>
								<center><?php echo str_replace('<ul' , '<ul class="nav-main"' , $nav_main);?></center>
								</ul>
					</div>
					<?php echo text_output($header, 'h1', 'other-head-text');?>
				</div>
			
			<!-- BODY -->
			<div id="body">
				<div class="wrapper">
					<!-- SUB NAVIGATION -->
					<div class="sub-nav" style="z-index:1000;"><?php echo str_replace('<ul' , '<ul class="nav nav-pills nav-stacked"' , $nav_sub);?>
					<a href="http://crywolf.jcink.net/"><img src="/application/assets/images/missions/crywolf.gif" title="Cry Wolf - A Mercy Thompson&frasl;Alpha &amp; Omega RP" alt="Wolf with flames, Cry Wolf" class="affiliate-subnav" width="88" height="31" /></a>
					<a href="https://faw.jcink.net/"><img src="/application/assets/images/missions/affiliatev1.png" title="Find Another Way - A Teen Wolf forum based RP" alt="FAW in front of a face" class="affiliate-subnav" width="88" height="31" /></a><br />
					<a href="https://gorram.space/"><img src="/application/assets/images/missions/valkyrie.jpg" title="Valkyrie - A Firefly/Serenity Nova based RPG" alt="A Firefly class ship with the word Valkyrie in it's glowing wake" class="affiliate-subnav" width="88" height="31" /></a>
					<a href="https://quietus.brassfrog.net/nova"><img src="/application/assets/images/missions/sgquietus.png" title="Stargate: Quietus - A Stargate Nova based RPG" alt="The words Stargate Quietus, where a Stargate is the Q" class="affiliate-subnav" width="88" height="31" /></a><br /></div>
						
					<!-- PAGE CONTENT -->
					<div class="content">
						<?php echo $flash_message;?>
						<?php echo $content;?>
						<?php echo $ajax;?>
						<div id="footer">
					
<div id="rating"><span><a href="http://www.rpgrating.com/">RPG Rating</a></span><br /><span class="r3">L3</span><span class="r2">S2</span><span class="r2">V2</span></div><br />
<a href="http://crywolf.jcink.net/"><img src="/application/assets/images/missions/crywolf.gif" title="Cry Wolf - A Mercy Thompson&frasl;Alpha &amp; Omega RP" alt="Wolf with flames, Cry Wolf" class="affiliate-footer" width="88" height="31" /></a>
<a href="https://faw.jcink.net/"><img src="/application/assets/images/missions/affiliatev1.png" title="Find Another Way - A Teen Wolf forum based RP" alt="FAW in front of a face" class="affiliate-footer" width="88" height="31" /></a><br class="affiliate-footer" />
<a href="https://gorram.space/"><img src="/application/assets/images/missions/valkyrie.jpg" title="Valkyrie - A Firefly/Serenity Nova based RPG" alt="A Firefly class ship with Valkyrie in it's glowing wake" class="affiliate-footer" width="88" height="31" /></a>
<a href="https://quietus.brassfrog.net/nova"><img src="/application/assets/images/missions/sgquietus.png" title="Stargate: Quietus - A Stargate Nova based RPG" alt="The words Stargate Quietus, where a Stargate is the Q" class="affiliate-footer" width="88" height="31" /></a><br class="affiliate-footer" />
<a href="http://www.emperorsbridge.org/"><img src="/application/assets/images/missions/EmperorsBridge.png" title="The Emperor&#39;s Bridge Campaign &#45; to honor the life &#43; advance the legacy of Emperor Norton" alt="The Emperor&#39;s Bridge Campaign"></a><br />
<a href="https://www.rpgfix.com/" title="RPGfix"><img src="/application/assets/images/missions/rpgfix.gif" alt="RPGfix" border="0" /></a>
<a href="http://rpginitiative.com" title="RPG Initiative"><img src="/application/assets/images/missions/RPGinitiative.png" title="RPG Initiative - Community for all Roleplayers" alt="RPG Initiative" /></a>
<a href="https://www.dreamhost.com/r.cgi?195130" title="DreamHost Affiliate"><img src="/application/assets/images/missions/DHaffiliate.gif" alt="DreamHost Affiliate" title="DreamHost Affiliate" border="0"></a>
<a href="https://letsencrypt.org" title="Let&#39;s Encrypt"><img src="/application/assets/images/missions/lebutton.png" alt="Let&#39;s Encrypt" title="Let&#39;s Encrypt" border="0" /></a><br />
					Powered by <strong><?php echo APP_NAME;?></strong> from <a href="http://www.anodyne-productions.com" target="_blank">Anodyne Productions</a> | 
					<?php echo anchor('main/credits', 'Site&nbsp;Credits');?> | <a href="http://fontawesome.com/"><span class="fab fa-font-awesome" aria-hidden="true" title="This site uses Font Awesome"></span></a><br /><?php echo anchor('main/policies', 'Privacy Policy'); ?>
				</div>
					</div>
					<div style="clear:both;"></div>
				</div>
				
				
			</div>
	</body>
</html>
