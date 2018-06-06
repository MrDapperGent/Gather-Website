<?php
defined('GEU_INDEX') || die('This is probably not what you\'re looking for...');

/*if(!($voiceboard = @file_get_contents('http://oxid.filipebrito.com/gather.eu/gather_vote.php?open=votes'))) {
	$voiceboard = '<tr><td>Votes are offline</td></tr>';
}*/
?>
<div class="left_box_skip">
<div class="green">
<h2>SKIP TO</h2>
</div>
<div class="content">
<div class="left"><a href="http://gather.soldat.pl/tutorial"><img src="https://i.imgur.com/WoDmAsr.png" alt="Discord" width="231" height="231"></a></div><div class="right"></div>
1.) <a href="#Introduction" title="">Introduction</a><br>
2.) <a href="#Movement" title="">Movement</a><br>
3.) <a href="#Aiming" title="">Weapons</a><br>
4.) <a href="#Tasks" title="">Tasks</a><br>
5.) <a href="#Tactics1" title="">Basic Tactics / Solo</a><br>
6.) <a href="#Mistakes" title="">Known mistakes</a><br>
7.) <a href="#Hints" title="">Hints</a><br>
8.) <a href="#Tactics2" title="">Advanced Team Tactics</a>
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
<?php include('s_tutorial.php'); ?>
</div> <!-- /right_box -->
