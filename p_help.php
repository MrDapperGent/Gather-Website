<?php
defined('GEU_INDEX') || die('This is probably not what you\'re looking for...');
?>
<div class="blue">
<h2>GETTING STARTED</h2>
</div> <!-- /blue -->
<div class="content">
<h2>What is #Soldat Gather?</h2>
<p>#Soldat Gather is a community on Discord, on which competitive matches are being organized. These matches are called gathers. Gathers are similar to what you might know from games such as 'CS:GO' as 'matchmaking'.</p>
<p>The preferably played gamemode on our gather is 'Capture the Flag'.
Six players are needed to start a default gather, as the match is played 3 vs. 3 in CTF gamemode.<p>
<p>Players can add themselves to the gather queue by typing '!add' as a message on our #gather channel. Our bot will send you a personal message, containing the server IP/Port and password, once six players added to the gather queue.</p>
<p>You will receive server details (IP & Port) by our bot once the gather has filled. Team Alpha picks the first map. The winning team will be determined in a <a href="#">best of three</a> (bo3) maps format.</p>
<h2>Why should I play gathers?</h2>
<p>Playing gathers actively, will rapidly turn you into a stronger player. You will also have the chance to play against the best Soldat players in the world and become a part of the competitive Soldat community.</p>
<h2>How to join?</h2>
<p><a href="http://gather.soldat.pl/discord/" target="_blank">Join us</a> at #gather on Soldat's official Discord server and start playing!</p>

<!--<h2>Gather Tutorial:</h2>
<p><a href="#">soldatgather.pdf</a> (english) <a href="#">soldatgather.pdf</a> (deutsch) <a href="#">soldatgather.pdf</a> (polska) <a href="#">soldatgather.pdf</a> (turkyie) <a href="#">soldatgather.pdf</a> (russia) <a href="#">soldatgather.pdf</a> (espanol) <a href="#">soldatgather.pdf</a> (czech)</p>
	-->
</div> <!-- /content -->
<div class="blue">
<h2>CHANNEL COMMANDS</h2>
</div> <!-- /blue -->
<div class="content">
<table class="commands">
	<tr>
		<td><strong>!status</strong></td>
		<td>Will display the current status of the active queues.</td>
	</tr><tr>
		<td><strong>!add</strong></td>
		<td>Will add you to a CTF gather queue on european servers. The bot will balance the teams.
	</tr>
		<tr>
		<td><strong>!del</strong></td>
		<td>Deletes you from the gather queue.</td>
	</tr>
	<tr>
<td><strong>!cadd</strong></td>
		<td>Will add you to a CTF captain-gather queue on european servers. Captains choose the teams. 
	</tr>
	<tr>
			<tr>
		<td><strong>!addna</strong></td>
		<td>Will add you to a CTF gather queue on north-american servers. Our bot will balance the teams.
	</tr>
	<td><strong>!caddna</strong></td>
		<td>Will add you to a CTF captain-gather queue on north-american servers. Captains choose the teams. 
	</tr>

<tr>
		<td><strong>!sadd / !sadd+</strong></td>
		<td>Add as an substitute if there's an open sub queue.</td>
	</tr>
	<tr>
		<td><strong>!players</strong></td>
		<td>Lists all players who are currently in a gather server.</td>
		<tr>
		<td><strong>!spec (id)</strong></td>
		<td>Receive server details of a specific server. Replace (id) with the server number (e.g. !spec 1).</td>
	</tr>
		<tr>
		<td><strong>!msg (id)</strong></td>
		<td>Sends a message to a specific Soldat server. Replace (id) with the server number (e.g. !msg 1 Hello!).</td>
	</tr>
	</tr><!--<tr>
		<td>!stats ctf Jim</td>
		<td>Will display the stats for player 'Jim'.</td>
	</tr><tr>
		<td>!msg3 Hello World!</td>
		<td>Will send 'Hello World!' to server3.</td>
			</tr><tr>
		<td>!report</td>
		<td>Gives details about how to report players for breaking rules.</td>
	</tr>-->
</table>
</div> <!-- /content -->
<!--<div class="blue">
<h2><a id="gamemodes"></a>OTHER LOCATIONS &amp; GAMEMODES</h2>
</div> <!-- /blue -->
<!--<div class="content">
<table class="commands">
	<tr>
		<td><a href="http://gather.soldat.pl/help/north-american">!addna</a></td>
		<td>Adds you to a north-american server gather queue.</td>
	</tr><tr>
		<td><a href="http://gather.soldat.pl/help/australian">!addaus</a></td>
		<td>Adds you to an australian server gather queue.</td>
	</tr><tr>
	<td><a href="http://gather.soldat.pl/help/knifeonly">!addko</a></td>
		<td>Adds you to a 'Knife Only (KO)' gather queue.</td>
	</tr><tr>
		<td><a href="http://gather.soldat.pl/help/realistic">!addr</a></td>
		<td>Adds you to a 'Realistic' gather queue.</td>
	</tr><tr>
		<td>!addi</td>
		<td>Adds you to an 'Infiliration' gather queue.</td>
	</tr><tr>
		<td>!adddm</td>
		<td>Adds you to a 'Deathmatch' gather queue.</td>
	</tr><tr>
		<td>!addrambo</td>
		<td>Adds you to a 'Rambo' gather queue.</td>
	</tr><tr>
		<td>!addt</td>
		<td>Adds you to a 'Team-Deathmatch' gather queue.</td>
	</tr><tr>
		<td>!addp</td>
		<td>Adds you to a 'Pointmatch' gather queue.</td>
	</tr>
</table>
</div> <!-- /content -->
<div class="blue">
<h2>INGAME COMMANDS</h2>
</div> <!-- /blue -->
<div class="content">
<table class="commands">
	<tr>
		<td><strong>!ginfo</strong></td>
		<td>Displays the teams and tiebreaker map.</td>
	</tr><tr>
		<td><strong>!map (name)</strong></td>
		<td>Will change the map (e.g. !map Ash).</td>
		<tr>
		<td><strong>!maps</strong></td>
		<td>Displays all available maps.</td>
	</tr>
	</tr><tr>
		<td><strong>!p</strong></td>
		<td>Pauses the round.</td>
	</tr><tr>
		<td><strong>!up</strong></td>
		<td>Unpauses the round.</td>
	</tr><tr>
			<td><strong>!r</strong></td>
		<td>Restarts the current map.</td>
	</tr><tr>
		<td><strong>!tb</strong></td>
		<td>Starts tiebreaker map.</td>
	</tr><tr>
		<td><strong>!sub / !sub+</strong></td>
		<td>Will call a substitute player.</td>
	</tr><tr>
		<td><strong>!soff</strong></td>
		<td>Turns the sub call off.</td>
	</tr><tr>
			<td><strong>!ub</strong></td>
		<td>Unbans the last player.</td>
	</tr>
	<tr>
			<td><strong>!msg</strong></td>
		<td>Sends a message to the Discord #Gather channel (e.g. !msg Hello!)</td>
	</tr>
	<!--<tr>
		<td>!stats</td>
		<td>Displays your gather stats.</td>
	</tr><tr>
		<td>!irc Hello World!</td>
		<td>Will send 'Hello World!' to the IRC channel.</td>
	</tr>-->
</table>
</div> <!-- /content -->
