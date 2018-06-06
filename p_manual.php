<?php
defined('GEU_INDEX') || die('This is probably not what you\'re looking for...');

/*if(!($voiceboard = @file_get_contents('http://oxid.filipebrito.com/gather.eu/gather_vote.php?open=votes'))) {
	$voiceboard = '<tr><td>Votes are offline</td></tr>';
}*/
?>
<div class="left_box">
<div class="green">
<h2>SKIP TO</h2>
</div>
<div class="content">
01.) <a href="#Introduction" title="">Introduction</a><br>
02.) <a href="#Movement" title="">Requirements</a><br>
03.) <a href="#Aiming" title="">Getting Started</a><br>
04.) <a href="#Tasks" title="">Controls</a><br>
05.) <a href="#Tactics1" title="">Game Modes</a><br>
06.) <a href="#Mistakes" title="">Game Options</a><br>
07.) <a href="#Hints" title="">GUI</a><br>
08.) <a href="#Tactics2" title="">Weapons</a><br>
09.) <a href="#Tactics2" title="">Bonuses</a><br>
10.) <a href="#Tactics2" title="">Commands</a><br>
11.) <a href="#Tactics2" title="">Dedicated Server</a><br>
12.) <a href="#Tactics2" title="">License and Distribution</a><br>
13.) <a href="#Tactics2" title="">Credits</a><br>
13.) <a href="#Tactics2" title="">Contact</a><br>
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
<?php include('s_manual.php'); ?>
</div> <!-- /right_box -->
