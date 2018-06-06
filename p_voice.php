<?php
defined('GEU_INDEX') || die('This is probably not what you\'re looking for...');

/*if(!($voiceboard = @file_get_contents('http://oxid.filipebrito.com/gather.eu/gather_vote.php?open=votes'))) {
	$voiceboard = '<tr><td>Votes are offline</td></tr>';
}*/
?>
<div class="left_box">
<div class="green">
<h2>RECENTLY PROMOTED</h2>
</div> <!-- /red -->
<div class="content">
Puure<br>
shredder<br>
kooka<br>
DrK<br>
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
<?php include('s_voice.php'); ?>
</div> <!-- /right_box -->
