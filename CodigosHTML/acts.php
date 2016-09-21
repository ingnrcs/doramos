
<?php
$p = Doramas::getLastActivities();
$e = count($p);
foreach($p as $g):

echo "7777777777777777777777777777";
echo "<br>";
echo $g[8];
echo "<br>";
echo $g[9];
echo "<br>";
echo $g[10];
echo "<br>";
echo $g[11];
echo "<br>";
echo $g[12];
echo "<br>";
echo $g[13];
echo "<br>";
echo $g[14];
?>
<center><div class="dia" style="background-color:#E2E2E2">
<div><center><img src="<?=Doramas::getCover($g[4])?>" width="70px" height="105px"></center></div>
<div class="dia-titulo"><a class="tts" href="/doramos/ver.php?ver=<? echo "jaja	";?>" title="Ver dorama <?=$g[0]?> capitulo <?=$g[6]?>"><?=$g[0]?> capitulo <?=$g[6]?></a></div>
<div class="dia-lista"><a href="http://www.doramasonline.net/ver/<?=$g[2]?>" title="Ver dorama <?=$g[0]?> capitulo <?=$g[6]?>"><?=Doramas::getTimeFrom($g[3])?></a></div>
<center><div class="fb-like" data-href="http://doramasonline.net/<?=(substr(Doramas::getCat($g[5]), 5))?>/<?=$g[2]?>" data-width="55" data-layout="button_count" data-action="like" data-show-faces="false" data-share="false"></div></center>
</div></center><br/>
<?php
endforeach;
if($e == 1 || $e == 5){
?>
<!-- UNIQUE TIME WRAPPER FIX -->
<br /><br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<br />
<!-- UNIQUE TIME WRAPPER FIX -->
<?php } ?>