<div id="car_top">
<i class="a"></i>
<i class="b"></i>
<div id="carrutop">
<ul>
<?php
$s = Doramas::getCarrousel();
foreach($s as $f){
?>
<li>
<a href="/<?=Doramas::getCat($f[2])?>/<?=$f[0]?>" title="ver dorama <?=$f[3]?>">
<i></i>
<div class="img">
<div class="emision">En Emisión</div>
<img height="177px" src="<?=Doramas::getCover($f[1])?>"></div>
</a>
</li>
<?php } ?>
</ul>
</div>
</div>