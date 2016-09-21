<?
require_once "Includes/config.inc.php";
require 'class/doramas.class.php';
$_REQUEST['q'] = $_GET['q'] = str_replace('-', ' ', $_REQUEST['q']);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />


<title>dorama <?=htmlspecialchars($_GET['q'])?> capitulos completos online</title>

<meta name="description" content="<?=(empty($_GET['q']) ? 'Buscar doramas gratis completas online' : 'ver dorama '.htmlspecialchars($_GET['q']).' capitulos completos online')?>">
<meta name="keywords" content="ver dorama '.htmlspecialchars($_GET['q']).' gratis, doramas en español online gratis, ver doramas audio latino gratis,dorama <?=htmlspecialchars($_GET['q'])?> gratis completa online" />
<meta http-equiv="content-language" content="es"/>
<meta property="og:description" content="<?=(empty($_GET['q']) ? 'Buscar doramas gratis completas online' : 'Buscar dorama '.htmlspecialchars($_GET['q']).' gratis completa online')?>" />
<meta property="og:title" content="Busca Doramas, Series y Novelas 100% gratis!!" />
<meta property="og:image" content="http://www.doramasgratis.com/img/tusnovelas.jpg" />
<link rel="image_src" href="http://www.doramasgratis.com/img/tusnovelas.jpg" />
<meta name="robots" content="index,follow"/>
<meta content='1 days' name='Revisit-After'/>
<meta name='googlebot' content='index, follow'/>
<meta content='all' name='robots'/>
<meta content='all, index, follow' name='robots'/>
<meta content='all' name='googlebot'/>
<meta content='all, index, follow' name='googlebot'/>
<meta content='all' name='yahoo-slurp'/>
<meta content='all, index, follow' name='yahoo-slurp'/>
<meta content='index, follow' name='msnbot'/>
<meta content='all' name='googlebot-image'/>
<meta name='author' content='doramasgratis.com' />
<meta name='copyright' content='Doramas Online' />
<meta name='revisit' content='1 days' />
 <script language="JavaScript"> if(top.frames.length > 0) top.location.href=self.location; </script>
<link href="http://o1.t26.net/img/build.min.css?90" rel="stylesheet">
<link href="http://www.doramasgratis.com/css/web-estilo.css?doramitas=creonoc" rel="stylesheet" type="text/css" />
 <script src='http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js' type='text/javascript'></script>

<style>
#search-big {
display: block;
float: left;
padding: 8px;
margin-bottom: 15px;
width: 528px;
border: 1px solid #999;
font-weight: normal;
font-size: 15px;
}
#contenedor-iz {
float: right;
width: 100px;
height: auto;
}
#main-col {
float: left;
overflow: hidden;
width: 735px;
}
#main-col #full-col {
overflow: hidden;
width: 637px;
_width: 660px;
padding: 10px;
}
</style>

<script type"text/javascript">
$(document).ready(function(){
  $('.drop').mouseover(function(){
    $(this).children('ul').show();
  }).mouseout(function(){
    $(this).children('ul').hide();
  });
});
function g(){
  location.href='http://doramasonline.com.ve/' + $('input[name=q]').val().replace(/\s/g, '-');
}
</script>
</head>


<body>


<div id="centrador">
<div id="cabezera"><a href="http://www.doramasonline.com.ve"><img src="/img/logo.png" alt="Doramas online" width="230" height="170" border="0"/></a>
<!--Copy and paste the code below into the location on your website where the ad will appear.-->
<div class="cc fleft"><div class="ctit">Doramas por Género:</div><div class="ccon">
<div id="genuno">
<ul class="alfa" style="margin-top:6px; margin-left: 31px;"><li><a href="/genero/accion" class="let">Acción</a></li><li><a href="/genero/amistad" class="let">Amistad</a></li><li><a href="/genero/comedia" class="let">Comedia</a></li><li><a href="/genero/crimen" class="let">Crimen</a></li><li><a href="/genero/drama" class="let">Drama</a></li></ul>
<ul class="alfa" style="margin-left: 30px;"><li><a href="/genero/drama-humano" class="let">Drama humano</a></li><li><a href="/genero/drama-medico" class="let">Drama médico</a></li><li><a href="/genero/escolar" class="let">Escolar</a></li><li><a href="/genero/familiar" class="let">Familiar</a></li><li>
<a href="/genero/fantasia" class="let">Fantasía</a>


</li>
<li>
<a href="/genero/intriga" class="let">Intriga</a>


</li><li>
<a href="/genero/investigacion" class="let">Investigación</a>


</li><li>
<a href="/genero/musical" class="let">Musical</a>


</li>

<li>
<a href="/genero/policiaca" class="let">Policiaca</a>


</li>
<li>
<a href="/genero/psicologica" class="let">Psicológica</a>


</li>
<li>
<a href="/genero/romance" class="let">Romance</a>


</li><li>
<a href="/genero/shonen-ai" class="let">Shonen Ai</a>


</li>
<li>
<a href="/genero/terror" class="let">Terror</a>


</li>
<li>
<a href="/genero/thriller" class="let">Thriller</a>


</li></ul>
</div>
</div></div>
</div>


<div id="contenedor">
<?php
$num = 0;
if(empty($_GET['filter'])) $_GET['filter'] = 'name';
if(empty($_GET['order'])) $_GET['order'] = 'desc';
if(!empty($_REQUEST['q'])){
  $filter = 'd.nombre';
  if(!empty($_GET['filter'])){
    if($_GET['filter'] === 'letter') $filter = 'd.letra';
    if($_GET['filter'] === 'date') $filter = 'd.fecha';
  }
  $q = 'SELECT d.url, d.contenido, d.nombre, COUNT(c.id), d.category, d.id FROM novelas_titulos AS d LEFT JOIN novelas_capitulos AS c ON d.id = c.asociado WHERE (d.nombre LIKE \'%'.mysql_real_escape_string($_REQUEST['q']).'%\' || d.original LIKE \'%'.mysql_real_escape_string($_REQUEST['q']).'%\') GROUP BY d.id ORDER BY '.$filter.(!empty($_GET['order']) && $_GET['order'] === 'asc' ? ' ASC' : ' DESC');
  $num = (int)mysql_num_rows(mysql_query($q));
  $per = 10;
  $total = ceil($num / $per);
  $gq = (!empty($_GET['page']) && ctype_digit($_GET['page']) ? $_GET['page'] : 1);
  $limit = ($gq-1)*$per;
  if($gq > $total && $num) die;
  $q = mysql_query($q.' LIMIT '.$limit.', '.$per);
}
?>
<div id="main-col">
	<div id="full-col">
	  <div class="search-in-search clearfix">
<form onsubmit="g(); return false;">
  <input id="search-big" class="real-shadow rounded searchq" name="q" type="text" value="<?=htmlspecialchars($_REQUEST['q'])?>">
			<input type="submit" class="btn_search ui-btn ui-button-positive ui-button ui-widget ui-state-default ui-corner-all ui-button-text-only" value="Buscar" role="button">
  </form>
		</div>
						<div class="box">
			<div class="title clearfix">
				<h2>Resultados <span style="font-weight: normal;font-size:14px;color:#C1C1C1;">(<?=$num?>)</span></h2>
				<div class="action text drop time-tops-filter">
					<span>
						<?=(!empty($_GET['order']) && $_GET['order'] === 'asc' ? 'Ascendente' : 'Descendente')?>					</span>
					<ul class="min-dropdown time-box" style="display: none;">
                        <li><a href="/search/<?=htmlspecialchars($_REQUEST['q'])?>/<?=htmlspecialchars($_GET['filter'])?>/<?=(!empty($_GET['order']) && $_GET['order'] === 'asc' ? 'desc' : 'asc')?>"><?=(!empty($_GET['order']) && $_GET['order'] === 'asc' ? 'Descendente' : 'Ascendente')?></a></li>
                        </ul>
				</div>
			</div>
			<div id="ad-top"></div>
			<div class="clearfix">
             <?php
             while($row = @mysql_fetch_row($q)){
             ?>
								<div class="result-post clearfix">
					<img src="<?=Doramas::getCover($row[5])?>">
					<h3><a href="http://doramasonline.com.ve/<?=Doramas::getCat($row[4])?>/<?=$row[0]?>"><?=str_replace($_REQUEST['q'], '<span>'.htmlspecialchars($_REQUEST['q']).'</span>', $row[2])?></a></h3>
					<p>
						<?=(strlen($row[1]) > 97 ? substr($row[1], 0, 97).'...' : $row[1])?>				</p>
					<div class="points">
						<span><?=$row[3]?></span>
						Cap&iacute;tulos					</div>
				</div>
             <?php } ?>

							</div>
		</div><!-- box -->
				<div id="ad-bottom"></div>
<?php
if(empty($_REQUEST['q']) || ($_REQUEST['q'] && $num === 0)):
?>

<div class="no-results">
			<h2><?=(!empty($_REQUEST['q']) && $num === 0 ? 'Ooops! No hay resultados :(' : 'Ingresa alg&uacute;n criterio de b&uacute;squeda')?></h2>
			<p><?=(!empty($_REQUEST['q']) && $num === 0 ? 'Intenta ingresando otro criterio de b&uacute;squeda' : 'El buscador de doramasgratis.com proporciona excelentes resultados')?></p>
		</div>

<?php endif; if(!empty($_REQUEST['q'])){ ?>
<div class="nav-pages">
<ul class="clearfix">

<?
if($gp >= 1 && (($gp-1) != '0')){
?>
<li>
	<a href="/search/<?=htmlspecialchars($_REQUEST['q'])?>/<?=htmlspecialchars($_GET['filter'])?>/<?=htmlspecialchars($_GET['order'])?>/<?=($_GET['page']-1)?>">
		&laquo; Anterior	</a>
	</li>
<?
} if($gp < $total){
?>
<li>
<a href="/search/<?=htmlspecialchars($_REQUEST['q'])?>/<?=htmlspecialchars($_GET['filter'])?>/<?=htmlspecialchars($_GET['order'])?>/<?=($_GET['page']+1)?>">
	Siguiente &raquo;
</a>
</li> <? } ?>

</ul>


<script id="sid0010000040443121900">(function() {function async_load(){s.id="cid0010000040443121900";s.src='http://st.chatango.com/js/gz/emb.js';s.style.cssText="width:528px;height:400px;";s.async=true;s.text='{"handle":"doramasgratis","styles":{"a":"3366FF","b":60,"c":"FFFFFF","d":"FFFFFF","f":50,"j":"FF99FF","k":"6600FF","l":"0000FF","q":"000000","r":100,"s":1,"t":0}}';var ss = document.getElementsByTagName('script');for (var i=0, l=ss.length; i < l; i++){if (ss[i].id=='sid0010000040443121900'){ss[i].id +='_';ss[i].parentNode.insertBefore(s, ss[i]);break;}}}var s=document.createElement('script');if (s.async==undefined){if (window.addEventListener) {addEventListener('load',async_load,false);}else if (window.attachEvent) {attachEvent('onload',async_load);}}else {async_load();}})();</script>
</div> <?php } ?>


	</div>
</div>
<div id="contenedor-iz">
<div id="sidebar">
	<div id="ad-sidebar"></div>
		<form name="filters" id="filters">
		<input type="hidden" name="interval" value="">
		<input type="hidden" name="category" value="-1">
		<input type="hidden" name="country" value="-1">
		<input type="hidden" name="author" value="">
	</form>
	<div class="box filters">
		<div class="title clearfix">
			<h2>Filtros</h2>
		</div>
		<div class="clearfix">
			<h4>Por</h4>
			<ul>
				<li><a href="/search/<?=htmlspecialchars($_REQUEST['q'])?>/name">Nombre</a></li>
				<li><a href="/search/<?=htmlspecialchars($_REQUEST['q'])?>/letter">Letra</a></li>
				<li><a href="/search/<?=htmlspecialchars($_REQUEST['q'])?>/date">Fecha</a></li>
			</ul>
<script type='text/javascript'>
var adParams = {a: '13215354', size: '120x600',serverdomain: 'adk2trk.cpmrocket.com'  ,context:'c13216336' };
</script>

<script type='text/javascript' src='http://adk2cdn.cpmrocket.com/cpmrocket/scripts/smart/smart.js'></script>	</div>
			</div>
	</div> </div>
<?
@include_once"CodigosHTML/fot.php";
?>
    </div> <!--contenddor-->
    </div>
    </body>	
