<?php
define('GEU_INDEX', 1);
$pages = array(
	//'test' => array('test.php', 'Test page'),
	'stats' => array('p_stats.php', 'Player Rankings'),
	'voice' => array('p_voice.php', 'Gather Ranks'),
	'home' => array('p_home.php', 'Soldat Matchmaking'),
	'bans' => array('p_bans.php', 'Ban List (outdated)'),
	'play' => array('p_play.php', 'Community Discord Chat'),
	'rules' => array('p_rules.php', 'Rules'),
    'help' => array('p_help.php', 'Help Documentation'),
	'downloads' => array('p_downloads.php', 'Downloads'),
	//'news' => array('p_news.php', 'News'),
	'knife-only' => array('p_knife-only.php', 'Soldat Knife Only'),
	'realistic' => array('p_realistic.php', 'Soldat Realistic'),
	'australian' => array('p_australian.php', 'Soldat Australian Gather'),
	'about' => array('p_about.php', 'About #Soldat'),
	'manual' => array('p_manual.php', 'Soldat Manual'),
	'tutorial' => array('p_tutorial.php', 'Soldat CTF Tutorial'),
	'north-american' => array('p_north-american.php', 'Soldat North-American Gather'));
	//'report' => array('p_report.php', 'Report'));
$menu = array(
   // 'news' => 'News',
	'help' => 'Help',
	'rules' => 'Rules',  
    'voice' => 'Ranks',	
	'play' => 'Play');	 	
	//'stats' => 'Stats');
	//'report' => 'Report',
	//'bans' => 'Bans');
$keywords = array(
    'home' => 'soldatgather,soldat,website,game,2d,multiplayer, discord',
	'news' => 'gathernews,soldat',
	'stats' => 'stats,gatherstats,soldat,server',
	'voice' => 'voice,gather',
	'help' => 'help,soldat,tutorial',
	'downloads' => 'download,free,teeworlds,linux,multiplayer,soldat',
	'knife-only' => 'knife only,soldat,2d',
	'realistic' => 'realistic,soldat,game',
	'north-american' => 'snagather,nagather,north-american');

if(isset($_GET['p']) && isset($pages[$_GET['p']])) {
	$page = $pages[$_GET['p']][0];
	$title = $pages[$_GET['p']][1];
}
else {
	header('Location: http://gather.soldat.pl/index.php?p=home');
	die();
}

$dark_style = false;
if(isset($_GET['astyle'])) {
	setcookie('style');
}
if(isset($_GET['bstyle']) || (isset($_COOKIE['style']) && $_COOKIE['style'] == 'dark' && !isset($_GET['astyle']))) {
	setcookie('style', 'dark', strtotime('+60 days'));
	$dark_style = true;
}
?>
<!doctype html>
<html>
<head>
<html lang="en-US">
<title>#Soldat Gather - <?php echo $title; ?> | Community on Discord</title>
<link rel="icon" href="http://gather.soldat.pl/favicon.ico" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=0.4">
<meta charset="utf-8">
<meta name="keywords" content="soldat,game,gather,2d,free,download,sctfl,soldatforums,gather.eu,steam,free,multiplayer,community,IRC<?php if(isset($_GET['p']) && isset($keywords[$_GET['p']])) { echo ',', $keywords[$_GET['p']]; } ?>">
<?php if(!isset($_GET['p']) || $_GET['p'] == 'news'): ?>
<meta name="description" content="#Soldat Gather is the home of the competitive community for the free 2D multiplayer game Soldat. Play organized Soldat mutliplayer matches in several gamemodes on soldat servers located all across the world. Download the free 2D multiplayer action shooter Soldat 1.7.1 and join the battle!">
<?php else: ?>
<meta name="description" content="#Soldat Gather - <?php echo $title; ?>">
<?php endif; ?>
<link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:600,700' rel='stylesheet' type='text/css'>
<?php if($dark_style): ?>
<link href='bstyle.css' rel='stylesheet' type='text/css'>
<?php else: ?>
<link href='style.css' rel='stylesheet' type='text/css'>
<?php endif; ?>
</head>
<body>
<div id="wrapper">
<div id="pre_footer">
<div id="header">
<div class="center padded">
<div id="menu">
<?php if(!isset($_GET['p']) || $_GET['p'] == 'news'): ?><b><?php endif; ?>
<a href="<?php echo $_SERVER['PHP_SELF']; ?>">Home</a>
<?php if(!isset($_GET['p']) || $_GET['p'] == 'news'): ?></b><?php endif; ?>
<?php foreach($menu as $name => $item): ?>
<?php if(isset($_GET['p']) && $name == $_GET['p']): ?><b><?php endif; ?>
<a href="<?php echo $_SERVER['PHP_SELF'], '?p=', $name; ?>"><?php echo $item; ?></a>
<?php if(isset($_GET['p']) && $name == $_GET['p']): ?></b><?php endif; ?>
<?php endforeach; ?>
</div>
<div id="logo">
  <div style="display: inline-flex; align-items: center;">
    <a href="http://gather.soldat.pl" style="padding-right: 10px;">
      <img src="https://i.imgur.com/B2YunVS.png" alt="Discord" width="35" height="40">
    </a>
    <span style="padding-right: 10px; color:silver;">#Soldat Gather</span>
    <span style="color: grey; font-weight: bold; font-size: 9pt;">Game Community on Discord</span>
	
  </div>
</div>
</div> <!-- /center padded -->

</div> <!-- /header -->
<div class="center">
<div id="theme">
Theme: <?php if(!$dark_style): ?><b><?php endif; ?>[
<a href="<?php echo $_SERVER['PHP_SELF'], '?p=', urlencode($_GET['p']); ?>&astyle" rel="nofollow">Dark</a>
]<?php if(!$dark_style): ?></b><?php endif; ?> <?php if($dark_style): ?><b><?php endif; ?>[
<a href="<?php echo $_SERVER['PHP_SELF'], '?p=', urlencode($_GET['p']); ?>&bstyle" rel="nofollow">Bright</a>
]<?php if($dark_style): ?></b><?php endif; ?>
</div> <!-- /theme -->
<h1><?php echo $title; ?></h1>
<?php @include $page; ?>
</div> <!-- /center -->
<div id="push"></div>
</div> <!-- /pre_footer -->
<div id="footer">
<div class="center padded">
<div id="copy">
&copy; 2010 -<?php echo date('Y'); ?> <a href="http://gather.soldat.pl/about">#Soldat</a> - All rights reserved.
</div>
<a href="http://gather.soldat.pl/play">Join our community</a> on <strong>Discord</strong>
</div> <!-- /center padded -->
</div> <!-- /footer -->
</div> <!-- /wrapper -->
</body>
</html>
