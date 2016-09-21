<div class="dt">&Uacute;LTIMAS DORAMAS AGREGADAS</div>


<div class="dm cat">
<ul>
<?
$dramas = Doramas::getLastDramas();
foreach($dramas as $array){
?>
<li><a href="/<?=Doramas::getCat($array[3])?>/<?=$array[0]?>" title="<?=$array[1]?> capitulos completos" class="<?=Doramas::getCountry($array[2])?>"><?=$array[1]?></a></li>
<? } ?>
</ul>
</div>
<div class="clear"></div>
 <div class="db"></div>
<br />

