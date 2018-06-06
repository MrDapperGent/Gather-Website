<?php
defined('GEU_INDEX') || die('This is probably not what you\'re looking for...');

/*if(!($voiceboard = @file_get_contents('http://oxid.filipebrito.com/gather.eu/gather_vote.php?open=votes'))) {
	$voiceboard = '<tr><td>Votes are offline</td></tr>';
}*/
?>
<div class="left_box">
<div class="green">
<h2>FILES</h2>
</div>
<div class="content">
<div class="left"><a href="https://static.soldat.pl/downloads/soldat171.zip" title="Soldat 1.7.1 (latest version)">Soldat Download</a></div><div class="right"></div>
<div class="left"><a href="http://gather.soldat.pl/downloads/taunteditv2-1.zip" title="Soldat Taunt Editor for creating key binds">Soldat Taunt Editor</a></div><div class="right"></div>
<div style="clear:both"></div>



</div> <!-- /content -->
<div class="green">
<h2>CTF TUTORIAL</h2>
</div>
<div class="content">
<div class="left"><a href="http://gather.soldat.pl/tutorial"><img src="https://i.imgur.com/WoDmAsr.png" alt="Discord" width="231" height="231"></a></div><div class="right"></div>
1.) <a href="index.php?p=tutorial#Introduction" title="">Introduction</a><br>
2.) <a href="index.php?p=tutorial#Movement" title="">Movement</a><br>
3.) <a href="index.php?p=tutorial#Aiming" title="">Weapons</a><br>
4.) <a href="index.php?p=tutorial#Tasks" title="">Tasks</a><br>
5.) <a href="index.php?p=tutorial#Tactics1" title="">Basic Tactics / Solo</a><br>
6.) <a href="index.php?p=tutorial#Mistakes" title="">Known mistakes</a><br>
7.) <a href="index.php?p=tutorial#Hintss" title="">Hints</a><br>
8.) <a href="index.php?p=tutorial#Tactics2" title="">Advanced Team Tactics</a>
<div style="clear:both"></div>

<!--<div class="left_box">
<div class="green">
<h2>LINKS</h2>
</div>
<div class="left"><a href="http://gather.soldat.pl/discord" title="Soldat's official Discord server" target="_blank">Soldat on Discord</a></div><div class="right"></div>
<div class="left"><a href="https://forums.soldat.pl" title="Official Soldat Forums" target="_blank">Soldat Forums</a></div><div class="right"></div>
</div>
</div>
<!--<a href="#"><s>Gather Gameplay Tutorial</s></a><br>-->
</div> <!-- /content -->
</div> <!-- /left_box -->
<div class="right_box">
<!--<div class="blue">
<table class="board">
<tr>
<th>VOTES IN PROGRESS</th>
<th style="width:50px">YES</th>
<th style="width:50px">NO</th>
</tr>
</table>
</div>--> <!-- /blue -->
<!--<div class="content">
<table class="board">
<colgroup>
<col>
<col style="width:50px">
<col style="width:50px">
</colgroup>
<?php /*echo $voiceboard;*/ ?>
</table>
</div>--> <!-- /content -->
<?php include('s_home.php'); ?>
</div> <!-- /right_box -->
