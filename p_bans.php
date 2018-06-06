<?php
defined('GEU_INDEX') || die('This is probably not what you\'re looking for...');

$head = '<th>BAN LIST</th>';
$columns = '<col>';
/*if(isset($_GET['a'])) {
	$auth = $_GET['a'];
	if($list = @file_get_contents('http://fryer.soldatladder.net/gathereu_bans.php?a=' . $auth)) {
		$head = '<th style="width:160px">TIME</th>' .
			'<th style="width:140px">ADMIN</th>' .
			'<th>(G#) REASON</th>';
		$columns = '<col style="width:160px">' .
			'<col style="width:140px">' .
			'<col>';
	}
}
else if($list = @file_get_contents('http://fryer.soldatladder.net/gathereu_bans.php')) {
	$head = '<th style="width:140px">AUTH</th>' .
		'<th>(G#) LAST REASON</th>' .
		'<th style="width:160px">EXPIRES</th>';
	$columns = '<col style="width:140px">' .
		'<col>' .
		'<col style="width:160px">';
}*/
$list = $list? $list : '
<tr><td>Player: mtk <td>Reason: leaving itmog.</td><td>expires:16.05.16</td></tr>
<tr><td>Player: Gonxta <td>Reason: trolling</td><td>expires: 11.05.16</td></tr>
<tr><td>Player: Rakkety <td>Reason: trolling</td><td>expires: 11.05.16</td></tr>
<tr><td>Player: Rakkety <td>Reason: trolling</td><td>expires: 11.05.16</td></tr>
<tr><td>Player: vitaminkas/peace <td>Reason: ban-evading</td><td>expires: never</td></tr>
<tr><td>Player: mtk <td>Reason: leaving itmog.</td><td>expires: 09.05.16</td></tr>
<tr><td>Player: Verbeia <td>Reason: inappropriate behaviour</td><td>expires: 08.05.16</td></tr>
<tr><td>Player: Yngwie <td>Reason: leaving itmog.</td><td>expires: 08.05.16</td></tr>
<tr><td>Player: vitaminkas <td>Reason: playing while banned</td><td>expires: 12.05.16</td></tr>
<tr><td>Player: vitaminkas <td>Reason: leaving itmog.</td><td>expires: 07.05.16</td></tr>
<tr><td>Player: Cursed Child <td>Reason: not showing up</td><td>expires: 06.05.16</td></tr>
<tr><td>Player: Mexikano <td>Reason: playing while banned</td><td>expires: 03.05.16</td></tr>
<tr><td>Player: Reebook <td>Reason: adding for someoene else</td><td>expires: 03.05.16</td></tr>
<tr><td>Player: Mexikano <td>Reason: not showing up</td><td>expires: 03.05.16</td></tr>
<tr><td>Player: slaydon <td>Reason: not showing up</td><td>expires: 03.05.16</td></tr>
<tr><td>Player: snejke <td>Reason: inappropriate behaviour</td><td>expires: 04.05.16</td></tr>
<tr><td>Player: tommyj <td>Reason: inappropriate behaviour & spam</td><td>expires: 06.05.16</td></tr>
<tr><td>Player: Mexikano <td>Reason: leaving itmog.</td><td>expires: 02.05.16</td></tr>
<tr><td>Player: tommyj <td>Reason: inappropriate behaviour</td><td>expires: 01.05.16</td></tr>
<tr><td>Player: Method Man.at <td>Reason: hacking</td><td>expires: never</td></tr>
<tr><td>Player: gin-bombay <td>Reason: inappropriate behaviour</td><td>expires: 28.04.16</td></tr>
<tr><td>Player: Foley <td>Reason: inappropriate behaviour</td><td>expires: 28.04.16</td></tr>
<tr><td>Player: DelintiQ <td>Reason: ban evading</td><td>expires: never</td></tr>
<tr><td>Player: DelintiQ <td>Reason: inappropriate behaviour</td><td>expires: 26.05.16</td></tr>
<tr><td>Player: Chap <td>Reason: trolling</td><td>expires: 30.04.16</td></tr>
<tr><td>Player: lestath <td>Reason: inappropriate behaviour</td><td>expires: 28.04.16</td></tr>
<tr><td>Player: Gonxta <td>Reason: leaving itmog.</td><td>expires: 28.04.16</td></tr>
<tr><td>Player: Rakkety <td>Reason: leaving itmog.</td><td>expires: 27.04.16</td></tr>
<tr><td>Player: glk <td>Reason: leaving itmog.</td><td>expires: 26.04.16</td></tr>
<tr><td>Player: Leprosy <td>Reason: not showing up</td><td>expires: 26.04.16</td></tr>
<tr><td>Player: DelintiQ <td>Reason: mass highlight</td><td>expires: 26.04.16</td></tr>
<tr><td>Player: Hellsik <td>Reason: sharing malicious link</td><td>expires: 29.04.16</td></tr>
<tr><td>Player: Maniak <td>Reason: cating votekick</td><td>expires: 24.04.16</td></tr>
<tr><td>Player: skrillex <td>Reason: hacking</td><td>expires: never</td></tr>
<tr><td>Player: DelintiQ <td>Reason: showing up too late</td><td>expires: 18.04.16</td></tr>
<tr><td>Player: Rakkety <td>Reason: leaving itmog.</td><td>expires: 17.04.16</td></tr>
<tr><td>Player: Rakkety <td>Reason: trolling</td><td>expires: 15.04.16</td></tr>
<tr><td>Player: Snip <td>Reason: leaving itmog.</td><td>expires: 17.04.16</td></tr>
<tr><td>Player: DDSSTINY <td>Reason: leaving itmog.</td><td>expires: 17.04.16</td></tr>
<tr><td>Player: DelintiQ <td>Reason: spamming commands</td><td>expires: 12.04.16</td></tr>
<tr><td>Player: shizo <td>Reason: excessive trolling</td><td>expires: never</td></tr>
<tr><td>Player: Punsha<td>Reason: excessive trolling</td><td>expires: never</td></tr>
<tr><td>Player: Con<td>Reason: hacking</td><td>expires: never</td></tr>
';
?>
<?php if(isset($auth)): ?>
<h2>AUTH: <?php echo $auth; ?></h2>
<?php endif; ?>
<div class="blue">
<table class="board">
<tr>
<th style="width:170px">PLAYER</th>
<th>REASON</th>
<th style="width:130px">EXPIRES</th>
<?php /*echo $head;*/ ?>
</tr>
</table>
</div> <!-- /blue -->
<div class="content">
<table class="board">
<colgroup>
<col style="width:170px">
<col>
<col style="width:130px">
<?php /*echo $columns;*/ ?>
</colgroup>
<?php # echo '<tr><td>Bl4ck/Saal</td><td>h</td><td>never</td></tr>';?>
<tr><td>tommyj</td><td>not showing up</td><td>19.01.17</td></tr>
<tr><td>Maniak</td><td>not showing up</td><td>17.01.17</td></tr>
<tr><td>GarfieldpZ</td><td>leaving itmog.</td><td>14.01.17</td></tr>
<tr><td>silent</td><td>ban-evading</td><td>never</td></tr>
<tr><td>Maron</td><td>not showing up</td><td>10.01.17</td></tr>
<tr><td>pedro</td><td>trolling</td><td>12.01.17</td></tr>
<tr><td>silent</td><td>trolling</td><td>12.01.17</td></tr>
<tr><td>Kzya</td><td>not showing up</td><td>01.01.17</td></tr>
<tr><td>Maron8</td><td>not showing up</td><td>02.01.17</td></tr>
<tr><td>Maron8</td><td>not showing up</td><td>31.12.16</td></tr>
<tr><td>Ciern</td><td>not showing up</td><td>30.12.16</td></tr>
<tr><td>tommyj</td><td>chatting and insulting</td><td>30.12.16</td></tr>
<tr><td>Sting</td><td>trolling</td><td>28.12.16</td></tr>
<tr><td>asdcds</td><td>not showing up</td><td>11.12.16</td></tr>
<tr><td>nicosslee</td><td>cheating</td><td>never</td></tr>
<tr><td>cmplx / Aveiro / qLinex</td><td>cheating</td><td>never</td></tr>
<tr><td>pedro</td><td>trolling</td><td>07.12.16</td></tr>
<tr><td>cmplx</td><td>trolling</td><td>07.12.16</td></tr>
<tr><td>Varrok</td><td>leaving itmog.</td><td>02.12.16</td></tr>
<tr><td>Kyza</td><td>inappropriate behaviour</td><td>02.12.16</td></tr>
<tr><td>gin-bombay</td><td>afk mid game</td><td>30.11.16</td></tr>
<tr><td>Reebook</td><td>not showing up</td><td>29.11.16</td></tr>
<tr><td>Chukcha</td><td>trolling</td><td>28.11.16</td></tr>
<tr><td>Reebook</td><td>leaving itmog.</td><td>26.11.16</td></tr>
<tr><td>vitaminkas</td><td>cheating</td><td>never</td></tr>
<tr><td>Hellsik</td><td>cheating</td><td>never</td></tr>
<tr><td>maniactra / mutal</td><td>cheating</td><td>never</td></tr>
<tr><td>Gakusei</td><td>cheating</td><td>never</td></tr>
<tr><td>KieCa</td><td>cheating</td><td>never</td></tr>
<tr><td>SpecialS` / DaroS</td><td>cheating</td><td>never</td></tr>
<tr><td>Petr-</td><td>cheating</td><td>never</td></tr>
<tr><td>Mexikano</td><td>not showing up.</td><td>24.11.16</td></tr>
<tr><td>ThePunisher</td><td>faking as another player</td><td>18.11.16</td></tr>
<tr><td>Skipzor</td><td>leaving itmog.</td><td>17.11.16</td></tr>
<tr><td>wolfy</td><td>not showing up</td><td>16.11.16</td></tr>
<tr><td>Nijo</td><td>inappropriate behaviour</td><td>20.11.16</td></tr>
<tr><td>Kaan</td><td>leaving itmog.</td><td>14.11.16</td></tr>
<tr><td>DelintiQ</td><td>admitting to cheat</td><td>never</td></tr>
<tr><td>E7wood</td><td>leaving itmog.</td><td>13.11.16</td></tr>
<tr><td>nicosslee</td><td>faking as another player</td><td>13.11.16</td></tr>
<tr><td>stachu</td><td>trolling</td><td>12.11.16</td></tr>
<tr><td>Rakkety</td><td>leaving itmog.</td><td>23.11.16</td></tr>
<tr><td>Airforce</td><td>not showing up</td><td>12.11.16</td></tr>
<tr><td>DutchFlame</td><td>not showing up</td><td>12.11.16</td></tr>
<tr><td>FuckIt</td><td>not showing up</td><td>12.11.16</td></tr>
<tr><td>cortez</td><td>inappropriate behaviour</td><td>11.11.16</td></tr>
<tr><td>Usso</td><td>spamming & abusing commands</td><td>10.11.16</td></tr>
<tr><td>Fame</td><td>leaving itmog.</td><td>09.11.16</td></tr>
<tr><td>gin-bombay</td><td>not showing up</td><td>08.11.16</td></tr>
<tr><td>SilentKill</td><td>leaving itmog.</td><td>06.11.16</td></tr>
<tr><td>sdm</td><td>not showing up</td><td>05.11.16</td></tr>
<tr><td>Faster</td><td>inappropriate behaviour</td><td>05.11.16</td></tr>
<tr><td>thommyj</td><td>inappropriate behaviour</td><td>02.11.16</td></tr>
<tr><td>anthy</td><td>not showing up</td><td>02.11.16</td></tr>
<tr><td>KronosKrexX</td><td>leaving itmog.</td><td>02.11.16</td></tr>
<tr><td>Varrok</td><td>leaving itmog.</td><td>02.11.16</td></tr>
<tr><td>Maniak</td><td>not showing up</td><td>02.11.16</td></tr>
<tr><td>Karel</td><td>not showing up</td><td>02.11.16</td></tr>
<tr><td>Zorf</td><td>not showing up</td><td>01.11.16</td></tr>
<tr><td>Kieca</td><td>leaving itmog.</td><td>31.10.16</td></tr>
<tr><td>Fame</td><td>not showing up</td><td>29.10.16</td></tr>
<tr><td>Karel</td><td>not showing up</td><td>27.10.16</td></tr>
<tr><td>knave</td><td>leaving itmog.</td><td>26.10.16</td></tr>
<tr><td>snejok</td><td>inappropriate behaviour</td><td>26.10.16</td></tr>
<tr><td>Slasher</td><td>leaving itmog.</td><td>24.10.16</td></tr>
<tr><td>FarrukoArg</td><td>leaving itmog.</td><td>24.10.16</td></tr>
<tr><td>WhiteShadow</td><td>not showing up</td><td>24.10.16</td></tr>
<tr><td>tommyj</td><td>inappropriate behaviour</td><td>25.10.16</td></tr>
<tr><td>hellsik</td><td>trolling</td><td>23.10.16</td></tr>
<tr><td>snejok</td><td>inappropriate behaviour</td><td>23.10.16</td></tr>
<tr><td>anth</td><td>leaving itmog.</td><td>23.10.16</td></tr>
<tr><td>Morvan</td><td>inappropriate behaviour</td><td>23.10.16</td></tr>
<tr><td>Petr</td><td>excessive pausing</td><td>23.10.16</td></tr>
<tr><td>DelintiQ</td><td>evading channel ban</td><td>21.10.16</td></tr>
<tr><td>Slasher</td><td>not showing up</td><td>20.10.16</td></tr>
<tr><td>dsll</td><td>not showing up</td><td>19.10.16</td></tr>
<tr><td>kyuubiiL</td><td>not showing up</td><td>19.10.16</td></tr>
<tr><td>Karel</td><td>not showing up</td><td>18.10.16</td></tr>
<tr><td>DelintiQ</td><td>trolling a new player</td><td>18.10.16</td></tr>
<tr><td>nicosslee</td><td>leaving itmog.</td><td>16.10.16</td></tr>
<tr><td>Rakkety</td><td>inappropriate behaviour</td><td>04.11.16</td></tr>
<tr><td>Timmeh</td><td>inappropriate behaviour</td><td>15.10.16</td></tr>
<tr><td>anth</td><td>leaving itmog.</td><td>14.10.16</td></tr>
<tr><td>Reebook</td><td>trolling</td><td>12.10.16</td></tr>
<tr><td>Timmeh</td><td>inappropriate behaviour</td><td>11.10.16</td></tr>
<tr><td>LegacyCl</td><td>leaving itmog.</td><td>11.10.16</td></tr>
<tr><td>Morvan</td><td>bad latency</td><td>04.10.16</td></tr>
<tr><td>Rakketty</td><td>not showing up</td><td>14.10.16</td></tr>
<tr><td>smokkk</td><td>leaving itmog</td><td>03.10.16</td></tr>
<tr><td>kyuubiiL</td><td>leaving itmog</td><td>29.09.16</td></tr>
<tr><td>Reebook</td><td>trolling</td><td>29.09.16</td></tr>
<tr><td>darDar</td><td>not showing up</td><td>25.09.16</td></tr>
<tr><td>DelintiQ</td><td>leaving  itmog.</td><td>30.09.16</td></tr>
<tr><td>tommyj</td><td>leaving itmog.</td><td>22.09.16</td></tr>
<tr><td>DelintiQ</td><td>afk mid game & wrong team</td><td>23.09.16</td></tr>
<tr><td>Reebook</td><td>leaving itmog.</td><td>19.09.16</td></tr>
<tr><td>D4sh</td><td>leaving itmog.</td><td>18.09.16</td></tr>
<tr><td>SimoTheHedgehog</td><td>trolling & afk mid-game</td><td>18.09.16</td></tr>
<tr><td>tommyj</td><td>inappropriate behaviour</td><td>17.09.16</td></tr>
<tr><td>DelintiQ</td><td>spamming</td><td>16.09.16</td></tr>
<tr><td>Reebook</td><td>trolling</td><td>16.09.16</td></tr>
<tr><td>kyuubi</td><td>not showing up</td><td>08.09.16</td></tr>
<tr><td>Reebook</td><td>leaving itmog.</td><td>04.09.16</td></tr>
<tr><td>Rakkety</td><td>repeatedly showing up too late</td><td>16.09.16</td></tr>
<tr><td>Airforce</td><td>leaving itmog.</td><td>03.09.16</td></tr>
<tr><td>kyuubi</td><td>not showing up</td><td>31.08.16</td></tr>
<tr><td>qb</td><td>not showing up</td><td>30.08.16</td></tr>
<tr><td>Rakkety</td><td>repeatedly showing up too late</td><td>02.09.16</td></tr>
<tr><td>tommyj</td><td>inappropriate behaviour</td><td>29.08.16</td></tr>
<tr><td>E7wood</td><td>trolling & throwing gather</td><td>28.08.16</td></tr>
<tr><td>AtomiC</td><td>leaving itmog.</td><td>27.08.16</td></tr>
<tr><td>qb</td><td>trolling & throwing gather</td><td>26.08.16</td></tr>
<tr><td>LegacyCL</td><td>leaving itmog.</td><td>26.08.16</td></tr>
<tr><td>Yngwie</td><td>leaving itmog.</td><td>25.08.16</td></tr>
<tr><td>Rakkety</td><td>not showing up</td><td>26.08.16</td></tr>
<tr><td>Reebook</td><td>refusing to leave</td><td>23.08.16</td></tr>
<tr><td>Anth</td><td>leaving itmog.</td><td>23.08.16</td></tr>
<tr><td>Karel</td><td>not showing up</td><td>02.09.16</td></tr>
<tr><td>cortez</td><td>not showing up</td><td>19.08.16</td></tr>
<tr><td>Rakkety</td><td>not showing up</td><td>18.08.16</td></tr>
<tr><td>LegacyCL</td><td>leaving itmog.</td><td>18.08.16</td></tr>
<tr><td>Karel</td><td>repeatedly showing up too late & leaving itmog.</td><td>19.08.16</td></tr>
<tr><td>HicioOoR</td><td>not showing up</td><td>15.08.16</td></tr>
<tr><td>YB</td><td>leaving itmog.</td><td>10.08.16</td></tr>
<tr><td>Sting</td><td>leaving itmog.</td><td>08.08.16</td></tr>
<tr><td>asdcds</td><td>not showing up</td><td>07.08.16</td></tr>
<tr><td>Derek</td><td>leaving itmog.</td><td>31.07.16</td></tr>
<tr><td>Snejok</td><td>not showing up</td><td>30.07.16</td></tr>
<tr><td>FuckIt</td><td>not showing up</td><td>28.07.16</td></tr>
<tr><td>dsll</td><td>playing while banned</td><td>02.08.16</td></tr>
<tr><td>vinteek</td><td>adding for someone else</td><td>29.07.16</td></tr>
<tr><td>Rakkety</td><td>leaving itmog.</td><td>28.07.16</td></tr>
<tr><td>Snejok</td><td>spamming</td><td>26.07.16</td></tr>
<tr><td>Riev</td><td>not showing up</td><td>26.07.16</td></tr>
<tr><td>dsll</td><td>not showing up</td><td>26.07.16</td></tr>
<tr><td>Rakkety</td><td>calling a sub due to team randomizations</td><td>25.07.16</td></tr>
<tr><td>fageragera</td><td>deception</td><td>25.07.16</td></tr>
<tr><td>LoQ</td><td>showing up too late</td><td>25.07.16</td></tr>
<tr><td>Nijo</td><td>not showing up</td><td>25.07.16</td></tr>
<tr><td>tommyj</td><td>trolling</td><td>04.08.16</td></tr>
<tr><td>`lopek</td><td>not showing up</td><td>23.07.16</td></tr>
<tr><td>franiu</td><td>leaving itmog.</td><td>23.07.16</td></tr>
<tr><td>D4sh</td><td>calling a sub to add to another gather</td><td>23.07.16</td></tr>
<tr><td>shizo</td><td>inappropriate behaviour</td><td>04.08.16</td></tr>
<tr><td>StrAziS</td><td>leaving itmog.</td><td>23.07.16</td></tr>
<tr><td>shizo</td><td>not showing up</td><td>23.07.16</td></tr>
<tr><td>LegacyCL</td><td>inappropriate behaviour</td><td>01.08.16</td></tr>
<tr><td>Fame</td><td>inappropriate behaviour</td><td>31.07.16</td></tr>
<tr><td>LegacyCL</td><td>inappropriate behaviour</td><td>20.07.16</td></tr>
<tr><td>overkill</td><td>not showing up</td><td>18.07.16</td></tr>
<tr><td>tommyj</td><td>inappropriate behaviour</td><td>20.07.16</td></tr>
<tr><td>Atomic</td><td>leaving itmog.</td><td>17.07.16</td></tr>
<tr><td>DutchFlame</td><td>not showing up</td><td>17.07.16</td></tr>
<tr><td>RBK</td><td>trolling & throwing gather</td><td>17.07.16</td></tr>
<tr><td>FuckIt</td><td>leaving itmog.</td><td>16.07.16</td></tr>
<tr><td>tommyj</td><td>inappropriate behaviour</td><td>16.07.16</td></tr>
<tr><td>Fame</td><td>leaving itmog.</td><td>19.07.16</td></tr>
<tr><td>Chuckcha</td><td>leaving itmog.</td><td>16.07.16</td></tr>
<tr><td>dsll</td><td>inappropriate behaviour</td><td>15.07.16</td></tr>
<tr><td>Ezpir</td><td>leaving itmog.</td><td>15.07.16</td></tr>
<tr><td>Farruko</td><td>leaving itmog.</td><td>15.07.16</td></tr>
<tr><td>Snejok</td><td>inappropriate behaviour</td><td>14.07.16</td></tr>
<tr><td>Wanted</td><td>not showing up</td><td>14.07.16</td></tr>
<tr><td>Fame</td><td>leaving itmog.</td><td>14.07.16</td></tr>
<tr><td>Faster</td><td>leaving itmog.</td><td>11.07.16</td></tr>
<tr><td>Nijo</td><td>not showing up</td><td>10.07.16</td></tr>
<tr><td>Wanted</td><td>Excessive pausing</td><td>10.07.16</td></tr>
<?php # echo '<tr><td>Dire</td><td>trolling & throwing gather</td><td>12.07.16</td></tr>';?>
<tr><td>Zapy`</td><td>inappropriate behaviour</td><td>09.07.16</td></tr>
<tr><td>fageragera</td><td>not showing up</td><td>09.07.16</td></tr>
<tr><td>Skipzor</td><td>not showing up</td><td>08.07.16</td></tr>
<tr><td>MaaxiscL</td><td>not showing up</td><td>07.07.16</td></tr>
<tr><td>Fame</td><td>inappropriate behaviour</td><td>08.07.16</td></tr>
<tr><td>Chap</td><td>ban-evading</td><td>16.11.16</td></tr>
<tr><td>Raged</td><td>inappropriate behaviour</td><td>19.07.16</td></tr>
<tr><td>Zapy</td><td>not showing up</td><td>05.07.16</td></tr>
<tr><td>cortez</td><td>leaving itmog.</td><td>04.07.16</td></tr>
<tr><td>SimoTheHedgehog</td><td>trolling / throwing gather</td><td>04.07.16</td></tr>
<tr><td>LegacyCL</td><td>leaving itmog.</td><td>03.07.16</td></tr>
<tr><td>Dire</td><td>leaving itmog.</td><td>03.07.16</td></tr>
<tr><td>Creaturey</td><td>leaving itmog.</td><td>03.07.16</td></tr>
<tr><td>Skipzor</td><td>leaving itmog.</td><td>03.07.16</td></tr>
<tr><td>Chap</td><td>inappropriate behaviour</td><td>01.08.16</td></tr>
<tr><td>kryptonite</td><td>showing up too late / inappropriate behaviour</td><td>01.08.16</td></tr>
<tr><td>Fame</td><td>leaving itmog.</td><td>01.07.16</td></tr>
<tr><td>Timmeeh </td><td>inappropriate behaviour</td><td>08.07.16</td></tr>
<tr><td>Exta</td><td>not showing up</td><td>30.06.16</td></tr>
<tr><td>Usso</td><td>trolling & throwing gather</td><td>29.06.16</td></tr>
<tr><td>Petter</td><td>inappropriate behaviour</td><td>01.07.16</td></tr>
<tr><td>Morvan</td><td>inappropriate behaviour</td><td>01.07.16</td></tr>
<tr><td>stachura</td><td>inappropriate behaviour</td><td>01.07.16</td></tr>
<tr><td>Verbeia</td><td>inappropriate behaviour</td><td>01.07.16</td></tr>
<tr><td>Nijo</td><td>inappropriate behaviour</td><td>28.06.16</td></tr>
<tr><td>Fame</td><td>leaving itmog.</td><td>25.06.16</td></tr>
<tr><td>Verbeia</td><td>leaving itmog.</td><td>24.06.16</td></tr>
<tr><td>tommyj</td><td>not showing up</td><td>24.06.16</td></tr>
<tr><td>knave</td><td>leaving itmog.</td><td>24.06.16</td></tr>
<tr><td>Petter</td><td>not showing up</td><td>24.06.16</td></tr>
<tr><td>Raged</td><td>inappropriate behaviour</td><td>23.06.16</td></tr>
<tr><td>Verbeia</td><td>inappropriate behaviour</td><td>23.06.16</td></tr>
<tr><td>Mand3s</td><td>leaving itmog.</td><td>22.06.16</td></tr>
<tr><td>extrakt0</td><td>not showing up</td><td>21.06.16</td></tr>
<tr><td>Karel</td><td>not showing up</td><td>27.06.16</td></tr>
<tr><td>Dizen</td><td>leaving itmog.</td><td>18.06.16</td></tr>
<tr><td>StrAziS</td><td>not showing up</td><td>17.06.16</td></tr>
<tr><td>Karel</td><td>not showing up</td><td>20.06.16</td></tr>
<tr><td>LegacyCL</td><td>inappropriate behaviour / throwing gather</td><td>23.06.16</td></tr>
<tr><td>Faster</td><td>leaving itmog.</td><td>17.06.16</td></tr>
<tr><td>Scroow</td><td>leaving itmog.</td><td>16.06.16</td></tr>
<tr><td>JHart</td><td>leaving itmog.</td><td>16.06.16</td></tr>
<tr><td>Chronos</td><td>leaving itmog.</td><td>16.06.16</td></tr>
<tr><td>Rakkety</td><td>inappropriate behaviour</td><td>17.06.16</td></tr>
<tr><td>Cortez</td><td>not showing up</td><td>13.06.16</td></tr>
<tr><td>LegacyCl</td><td>inappropriate behaviour</td><td>14.06.16</td></tr>
<tr><td>tarrega</td><td>leaving itmog.</td><td>12.06.16</td></tr>
<tr><td>Verbeia</td><td>leaving itmog.</td><td>12.06.16</td></tr>
<tr><td>Kaan`</td><td>not showing up</td><td>11.06.16</td></tr>
<tr><td>Chronos</td><td>not showing up</td><td>09.06.16</td></tr>
<tr><td>Verbeia</td><td>leaving itmog.</td><td>08.06.16</td></tr>
<tr><td>Stormek</td><td>leaving itmog.</td><td>08.06.16</td></tr>
<tr><td>Kaan`</td><td>leaving itmog.</td><td>08.06.16</td></tr>
<tr><td>sgm</td><td>not showing up</td><td>07.06.16</td></tr>
<tr><td>FuckIt</td><td>playing while banned</td><td>11.06.16</td></tr>
<tr><td>ff</td><td>adding for someone else</td><td>08.06.16</td></tr>
<tr><td>E7wood</td><td>playing while banned</td><td>11.06.16</td></tr>
<tr><td>FuckIt</td><td>adding for someone else</td><td>08.06.16</td></tr>
<tr><td>E7wood</td><td>leaving itmog.</td><td>06.06.16</td></tr>
<tr><td>Exorzischt</td><td>leaving itmog.</td><td>04.06.16</td></tr>
<tr><td>Fulya</td><td>cheating</td><td>never</td></tr>
<tr><td>tolate</td><td>cheating</td><td>never</td></tr>
<tr><td>Wanted</td><td>leaving itmog.</td><td>04.06.16</td></tr>
<tr><td>MrBungle</td><td>excessive use of minigun & throwing gather</td><td>03.06.16</td></tr>
<tr><td>Hellsik</td><td>bad sportmanship</td><td>03.06.16</td></tr>
<tr><td>LegacyCl</td><td>not showing up</td><td>06.06.16</td></tr>
<tr><td>Karel</td><td>not showing up</td><td>06.06.16</td></tr>
<tr><td>LegacyCl</td><td>bad latency & afk mid game</td><td>30.05.16</td></tr>
<tr><td>Kryptonite</td><td>not showing up</td><td>31.05.16</td></tr>
<tr><td>AtomiC</td><td>leaving itmog.</td><td>30.05.16</td></tr>
<tr><td>Karel</td><td>not showing up</td><td>28.05.16</td></tr>
<tr><td>E7wood</td><td>trolling & throwing game</td><td>25.05.16</td></tr>
<tr><td>Fulya</td><td>bad latency & leaving itmog.</td><td>25.05.16</td></tr>
<tr><td>smookee</td><td>leaving itmog.</td><td>25.05.16</td></tr>
<tr><td>LoQ</td><td>not showing up</td><td>24.05.16</td></tr>
<tr><td>haze</td><td>racism</td><td>23.05.16</td></tr>
<tr><td>Popo</td><td>ban-evading</td><td>25.06.16</td></tr>
<tr><td>sgm</td><td>not showing up</td><td>22.05.16</td></tr>
<tr><td>Karel</td><td>not showing up</td><td>24.05.16</td></tr>
<tr><td>Sarev</td><td>playing while banned</td><td>27.05.16</td></tr>
<tr><td>Popo</td><td>trolling & toxic behaviour</td><td>22.05.16</td></tr>
<tr><td>Reebook</td><td>trolling & toxic behaviour</td><td>22.05.16</td></tr>
<tr><td>Sarev</td><td>trolling & toxic behaviour</td><td>22.05.16</td></tr>
<tr><td>Gonxta</td><td>trolling & toxic behaviour</td><td>22.05.16</td></tr>
<tr><td>Nijo</td><td>trolling & toxic behaviour</td><td>22.05.16</td></tr>
<tr><td>LegacyCl</td><td>afk mid game</td><td>23.05.16</td></tr>
<tr><td>tommyj</td><td>inappropriate behaviour</td><td>21.05.16</td></tr>
<tr><td>gonxta</td><td>inappropriate behaviour</td><td>18.05.16</td></tr>
<tr><td>sgm</td><td>not showing up</td><td>17.05.16</td></tr>
<tr><td>stachura</td><td>not showing up</td><td>18.05.16</td></tr>
<tr><td>Rakkety</td><td>leaving itmog.</td><td>16.05.16</td></tr>
<tr><td>gin-bombay</td><td>leaving itmog.</td><td>16.05.16</td></tr>
<tr><td>BoredAsFuck</td><td>leaving itmog. & mass pausing /bad latency</td><td>18.05.16</td></tr>
<tr><td>stachura</td><td>leaving itmog.</td><td>15.05.16</td></tr>
<tr><td>extrakt0</td><td>leaving itmog.</td><td>14.05.16</td></tr>
<tr><td>Mahoone</td><td>command abuse</td><td>14.05.16</td></tr>
<tr><td>mtk</td><td>leaving itmog.</td><td>16.05.16</td></tr>
<tr><td>Reebook</td><td>trolling</td><td>11.05.16</td></tr>
<tr><td>Gonxta</td><td>trolling</td><td>11.05.16</td></tr>
<tr><td>Rakkety</td><td>trolling</td><td>11.05.16</td></tr>
<tr><td>vitaminkas/peace</td><td>ban-evading</td><td>13.06.16</td></tr>
<tr><td>mtk</td><td>leaving itmog.</td><td>09.05.16</td></tr>
<tr><td>Verbeia</td><td>inappropriate behaviour</td><td>08.05.16</td></tr>
<tr><td>Yngwie</td><td>leaving itmog.</td><td>08.05.16</td></tr>
<tr><td>vitaminkas</td><td>playing while banned</td><td>12.05.16</td></tr>
<tr><td>vitaminkas</td><td>leaving itmog.</td><td>07.05.16</td></tr>
<tr><td>Cursed Child</td><td>not showing up</td><td>06.05.16</td></tr>
<tr><td>Mexikano</td><td>playing while banned</td><td>03.05.16</td></tr>
<tr><td>Reebook</td><td>adding for someoene else</td><td>03.05.16</td></tr>
<tr><td>Mexikano</td><td>not showing up</td><td>03.05.16</td></tr>
<tr><td>slaydon</td><td>not showing up</td><td>03.05.16</td></tr>
<tr><td>snejke</td><td>inappropriate behaviour</td><td>04.05.16</td></tr>
<tr><td>tommyj</td><td>inappropriate behaviour & spam</td><td>06.05.16</td></tr>
<tr><td>Mexikano</td><td>leaving itmog.</td><td>02.05.16</td></tr>
<tr><td>tommyj</td><td>inappropriate behaviour</td><td>01.05.16</td></tr>
<tr><td>Method Man.at</td><td>cheating</td><td>never</td></tr>
<tr><td>gin-bombay</td><td>inappropriate behaviour</td><td>28.04.16</td></tr>
<tr><td>Foley</td><td>inappropriate behaviour</td><td>28.04.16</td></tr>
<tr><td>DelintiQ</td><td>ban evading</td><td>18.05.16</td></tr>
<tr><td>DelintiQ</td><td>inappropriate behaviour</td><td>26.05.16</td></tr>
<tr><td>Chap</td><td>trolling</td><td>30.04.16</td></tr>
<tr><td>lestath</td><td>inappropriate behaviour</td><td>28.04.16</td></tr>
<tr><td>Gonxta</td><td>leaving itmog.</td><td>28.04.16</td></tr>
<tr><td>Rakkety</td><td>leaving itmog.</td><td>27.04.16</td></tr>
<tr><td>glk</td><td>leaving itmog.</td><td>26.04.16</td></tr>
<tr><td>Leprosy</td><td>not showing up</td><td>26.04.16</td></tr>
<tr><td>DelintiQ</td><td>mass highlight</td><td>26.04.16</td></tr>
<tr><td>Hellsik</td><td>sharing malicious link</td><td>29.04.16</td></tr>
<tr><td>Maniak</td><td>casting votekick</td><td>24.04.16</td></tr>
<tr><td>skrillex</td><td>cheating</td><td>never</td></tr>
<tr><td>DelintiQ</td><td>showing up too late</td><td>18.04.16</td></tr>
<tr><td>Rakkety</td><td>leaving itmog.</td><td>17.04.16</td></tr>
<tr><td>Rakkety</td><td>trolling</td><td>15.04.16</td></tr>
<tr><td>Snip</td><td>leaving itmog.</td><td>17.04.16</td></tr>
<tr><td>DDSSTINY</td><td>leaving itmog.</td><td>17.04.16</td></tr>
<tr><td>DelintiQ</td><td>spamming commands</td><td>12.04.16</td></tr>
<tr><td>shizo</td><td>excessive trolling</td><td>18.05.16</td></tr>
<tr><td>Punsha</td><td>excessive trolling</td><td>18.05.16</td></tr>
<tr><td>Con</td><td>cheating</td><td>never</td></tr>
<?php /*echo $list;*/ ?>
</table>
</div> <!-- /content -->
