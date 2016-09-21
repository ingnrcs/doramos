<?
$ver = $_GET['ver'];
session_start();
require_once('Includes/config.inc.php');
require_once('Includes/Funciones.php');
require 'class/doramas.class.php';

if ($ver) {
$datos = mysql_fetch_array(mysql_query("SELECT * FROM novelas_titulos WHERE id='".$ver."' LIMIT 1"));


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
   <title>ver dorama <? echo $datos[nombre]; ?> capitulos completos online gratis</title>
<meta name="description" content="dorama <? echo $datos[nombre]; ?> online, <? echo $datos[nombre]; ?> sub español, ver dorama <? echo $datos[nombre]; ?> audio latino gratis, descargar <? echo $datos[nombre]; ?> episodios capitulos completos English sub.">
<meta name="keywords" content="dorama <? echo $datos[nombre]; ?> capitulos online, <? echo $datos[nombre]; ?> english sub, ver dorama <? echo $datos[nombre]; ?> capitulos completos, descargar capitulos de dorama <? echo $datos[nombre]; ?>" />
<meta http-equiv="content-language" content="es"/>
<meta name="robots" content="index,follow"/>
<meta content='1 days' name='Revisit-After'/>
<meta name='googlebot' content='index, follow'/>
<meta content='all' name='robots'/>
<meta content='all, index, follow' name='robots'/>
<meta content='all' name='googlebot'/>
<meta content='all, index, follow' name='googlebot'/>
<meta content='all' name='yahoo-slurp'/>
<meta content='all, index, follow' name='yahoo-slurp'/>
<meta property="fb:app_id" content="234304923326283"/>
<meta content='index, follow' name='msnbot'/>
<meta content='all' name='googlebot-image'/>
<meta property="og:type" content="video" />
<meta name='revisit' content='1 days' />
<meta property="og:title" content="<? echo ucwords($datos[nombre]); ?>" />
<meta property="og:description" content="Ver todos los capitulos online gratis en http://www.cloudingnrcs.com.ve/"/>
<link rel="image_src" href="<?=Doramas::getCover($datos['id'])?>" />
<meta property="og:image" content="<?=Doramas::getCover($datos['id'])?>" />
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
 <base />

   
  <link rel="stylesheet" type="text/css" href="http://www.doramasonline.net/wp-content/themes/sebastian/css/reset.css"/>
  <link rel="stylesheet" type="text/css" href="http://www.doramasonline.net/wp-content/themes/sebastian/mt.min.css"/>
<link href="http://www.doramasonline.net/css/estiloge.css?v=5" rel="stylesheet" type="text/css" />

  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="http://www.doramasonline.net/wp-content/themes/sebastian/css/responsive.css"/>
  <link rel="stylesheet" type="text/css" href="http://www.doramasonline.net/wp-content/themes/sebastian/css/icons.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://www.doramasonline.net/wp-content/themes/sebastian/js/paginador.js" type="text/javascript"></script>
    <script src="http://www.doramasonline.net/wp-content/themes/sebastian/js/js.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="alternate" type="application/rss+xml" title="sebastian &raquo; <? echo $datos[nombre]; ?> RSS de los comentarios" href="http://www.doramasonline.net/los-otros/feed/" />
	
<script type="text/javascript" src="//platform.twitter.com/widgets.js"></script>
<script type="text/javascript" src="https://apis.google.com/js/plusone.js">
{lang: 'es'}
</script>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v2.7";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>	<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/72x72\/","ext":".png","source":{"concatemoji":"http:\/\/demo.mundothemes.com\/sebastian\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.4.3"}};
			!function(a,b,c){function d(a){var c,d,e,f=b.createElement("canvas"),g=f.getContext&&f.getContext("2d"),h=String.fromCharCode;return g&&g.fillText?(g.textBaseline="top",g.font="600 32px Arial","flag"===a?(g.fillText(h(55356,56806,55356,56826),0,0),f.toDataURL().length>3e3):"diversity"===a?(g.fillText(h(55356,57221),0,0),c=g.getImageData(16,16,1,1).data,g.fillText(h(55356,57221,55356,57343),0,0),c=g.getImageData(16,16,1,1).data,e=c[0]+","+c[1]+","+c[2]+","+c[3],d!==e):("simple"===a?g.fillText(h(55357,56835),0,0):g.fillText(h(55356,57135),0,0),0!==g.getImageData(16,16,1,1).data[0])):!1}function e(a){var c=b.createElement("script");c.src=a,c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var f,g;c.supports={simple:d("simple"),flag:d("flag"),unicode8:d("unicode8"),diversity:d("diversity")},c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.simple&&c.supports.flag&&c.supports.unicode8&&c.supports.diversity||(g=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",g,!1),a.addEventListener("load",g,!1)):(a.attachEvent("onload",g),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),f=c.source||{},f.concatemoji?e(f.concatemoji):f.wpemoji&&f.twemoji&&(e(f.twemoji),e(f.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='font-awesome-css'  href='http://www.doramasonline.net/wp-content/plugins/wp-mega-menu/css/font-awesome.min.css' type='text/css' media='all' />
<link rel='stylesheet' id='wpmm-css'  href='http://www.doramasonline.net/wp-content/plugins/wp-mega-menu/css/wpmm.css?ver=1.1.2' type='text/css' media='all' />
 
   <script>
    $(function() {
        var btn_movil = $('#nav-mobile'),
        menu = $('#menu-resp').find('ul');
        btn_movil.on('click', function (e) {
            e.preventDefault();
            var el = $(this);
            el.toggleClass('nav-active');
            menu.toggleClass('abrir');
        })
    });
</script>
<script>
$(function()
{
$('.scrolling').jScrollPane();
});
</script>


<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '234304923326283', // App ID
      channelUrl : 'http://www.doramasgratis.com/ver-dorama/<? echo $datos['url'] ?>', // Channel File
      status     : true, // check login status
      cookie     : true, // enable cookies to allow the server to access the session
      xfbml      : true  // parse XFBML
    });

    // Additional initialization code here
  };

  // Load the SDK Asynchronously
  (function(d){
     var js, id = 'facebook-jssdk', ref = d.getElementsByTagName('script')[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement('script'); js.id = id; js.async = true;
     js.src = "//connect.facebook.net/es_ES/all.js";
     ref.parentNode.insertBefore(js, ref);
   }(document));
</script>
<style>
#largo .contenido {
background: #343C48;
}
#largo .contenido .bajon {
background: #343C48;
}
#largo .contenido .header .data ul li.activo, li.most_rated, li.views {
border-left: 4px solid #13a9ff!important;
}
#largo .contenido .header .data ul li.main:hover {
border-left: 4px solid #13a9ff;
}
#largo .contenido .header .data ul.generos li.current-cat:before {
color: #13a9ff;
}
ul.leftmenu li.current-menu-item a i {
color: #13a9ff;
}
a.agregar-movie:hover {
background: #13a9ff;
}
#largo .contenido .header input[type='text']:focus {
border: 1px solid #13a9ff;
}
#contenedor .items .it_header .buscador input[type='text']:focus {
border: 1px solid #13a9ff;
}
.post_nuevo form.posting fieldset .caja:focus {
border: 1px solid #13a9ff;
}
.post_nuevo form.posting fieldset .resumen:focus {
border: 1px solid #13a9ff;
}
.post_nuevo form.posting fieldset .postform:focus {
border: 1px solid #13a9ff;
}
</style>

</head>
<body>
<?
@include_once"CodigosHTML/izquierda2.php";
?>

<div class="notes" style="background: #F71863;">
<p><? echo $datos[nombre]; ?> capitulos completos en sub español </p>
</div>
<div class="post">
<!-- meta-datos -->	
<div class="headingder">
<div class="cover" style="background-image: url(<?=Doramas::getCover($datos['id'])?>);" ></div>
<div class="datos" style="background: transparent;margin-bottom: 0;">
<div class="imgs tsll"><a href="#dato-2"><img src="<?=Doramas::getCover($datos['id'])?>" alt="<? echo $datos[nombre]; ?>" /></a></div><!-- imgs -->
<div class="dataplus">
<h1><? echo $datos[nombre]; ?></h1>
<span class="original"><?php if(!empty($datos['original'])): ?>  <?php echo utf8_encode($datos['original']),'<br />'; endif; ?></span><div id="dato-1" class="data-content">
<p>
<span class="N/A">N/A</span><span>
<a href="#" >2001</a> 
</span><span><b class="icon-query-builder"></b> 104 min</span>  
<?php
if(!empty($datos['genres'])){
  echo '<span class="clms"><b>Genero: </b></span>';
  $ex = explode(',', $datos['genres']);
  $c = count($ex);
  for($i=0;$i<=$c;++$i){
    echo '<a href="/doramos/?genero=',trim($ex[$i]),'" class="lc">',trim($ex[$i]),'</a>';
    if(($i+1) != $c) { echo ', '; }
  }
  echo '<br />';
}

?></p>
<div class="score">
<div class="rank">7.6</div>
<div class="stars">
<span class="abc-c" style="width:174px;">
<span class="abc-r" style="width: 76%;"></span>
</span>
<div class="imdbdatos">
<i><?php if(isset($datos['online'])): ?> <span class="clms"><b>Estado: </b></span> <? echo '<span style="color: ',($datos['online'] == 0 ? '#DF0101' : '#1DAD3A'),';"><b>',$datos['online'] == 0 ? 'Finalizado' : 'En emisi&oacute;n','</b></span><br />'; endif;?>
</i>
<i>7.6/10</i> 
<i>237,862 votes</i>
</div>
</div>
</div>

<div class="xmll"><p class="xcsd"><b class="icon-bullhorn"></b> &nbsp;<a href="#" rel="tag">Sinopsis: <?php if(!empty($datos['contenido'])): ?> <?php echo ($datos['contenido']),'<br />'; endif; ?></a></p></div>
<div class="xmll"><p class="xcsd"><b class="icon-star"></b> <a href="#" rel="tag">Titulo Original: 
<?php if(!empty($datos['original'])): ?><?php echo utf8_encode($datos['original']),'<br />'; endif; ?></a></p></div>
<div class="xmll"><p class="xcsd"><b class="icon-check"></b><a href="#" rel="tag">Año: 
<?php if(!empty($datos['emision'])): ?> <? echo $datos['emision'],'<br />'; endif;?></p></div> 
<div class="xmll"><p class="xcsd"><b class="icon-trophy"></b>Pais: 
<?php if(!empty($datos['clasif'])): ?><?php echo utf8_encode($datos['clasif']),'<br />'; endif; ?></p></div> 
<div class="xmll"><p class="tsll xcsd"><b class="icon-info-circle"></b><a href="#"><?php if(!empty($datos['fecha'])): ?> <?php echo utf8_encode($datos['fecha']),'<br />'; endif; ?></a></p></div>
</div>
<div id="dato-2" class="data-content tsll">
<h2>Sinopsis</h2>

<p>
</p>
<div class="tsll">
<a class="regresar" href="#dato-1"><b class="icon-chevron-left2"></b> Regresar</a>
</div>
</div>
</div><!-- dataplus -->
</div>
</div><!-- headingder -->

<div id="player-container">
<div class="no_link">
<p></p>

<div class="fb-share-button" data-href="web/<? echo $datos[url]; ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.cloudingnrcs.com.ve/cine/ver.php?ver=<? echo $datos[id]; ?>&amp;src=sdkpreparse">Compartir</a></div>

<iframe src="http://www.facebook.com/plugins/like.php?href=http://www.doramasonline.net/ver-dorama/<? echo $datos[url]; ?>&amp;layout=button_count&amp;show_faces=true&amp;width=120&amp;action=like&amp;colorscheme=light&amp;height=20" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:114px; height:20px;"></iframe>
<g:plusone size="medium"></g:plusone>

<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a></div>
</div>
<!-- player -->
<div id="player-container">
<div class="no_link"><b class="icon-play-circle-outline play"></b>
<p><h3><a href="#">
  dorama <? echo $datos[nombre]; ?> capitulos completos sub español</a></h3></p> <?
$capitulos = mysql_query("SELECT * FROM novelas_capitulos WHERE asociado='$datos[id]' ORDER BY capitulo ASC",$conexion);
while ($array=mysql_fetch_array($capitulos)){
	echo '<div id="enlaces"><a href="/doramos/vercapitulo.php?capitulo='.$array[id].'&categoria='.$datos[id].'" title="ver dorama '.$array[novela].' Capitulo '.$array[capitulo].'">'.$array[novela].' | Capitulo '.$array[capitulo].' | capitulo '.$array[fecha].'</a></div>';
}
?> </div>
</div>
<div id="player-container">
<div class="no_link"> <iframe src="http://www.facebook.com/plugins/likebox.php?id=doramascompletas&amp;width=300&amp;connections=50&amp;stream=false&amp;header=true&amp;height=250" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:250px;" allowTransparency="true"></iframe>
</div>
</div>

<!-- imagenes -->

<!-- enlaces -->
<div class="datos">
<div class="responsive">
<div class="alerta"><b class="icon-screen-rotation"></b></div>
<div class="contenido">

<div class="no_link"><b class="icon-get-app"></b></div>
</div>
</div>
</div>
<!-- botones sociales -->
<div class="soci">
<a class="fb" href="javascript: void(0);" onclick="window.open ('http://www.facebook.com/sharer.php?u=http://www.doramasonline.net/<?=Doramas::getCat($datos['category'])?>/<? echo $datos['url'] ?>', 'Facebook', 'toolbar=0, status=0, width=650, height=450');"><b class="icon-facebook3"></b> Compartir</a>
<a class="tw" href="javascript: void(0);" onclick="window.open ('https://twitter.com/intent/tweet?text=<? echo $datos[nombre]; ?>&url=http://www.doramasonline.net/<?=Doramas::getCat($datos['category'])?>/<? echo $datos['url'] ?>', 'Twitter', 'toolbar=0, status=0, width=650, height=450');" data-rurl="http://www.doramasonline.net/<?=Doramas::getCat($datos['category'])?>/<? echo $datos['url'] ?>"><b class="icon-twitter3"></b> Twittear</a>

<div class="fb-comments" data-href="http://www.doramasonline.net/ver-dorama/<? echo $datos['url'] ?>" data-num-posts="10" data-width="100%"></div>
	</div>
<!-- comentarios -->
	
					
<div class="footer_c">
<a href="#" class="top" id="arriba"><b class="icon-chevron-up"></b></a>
<span class="copy">
<A HREF="aviso_legal.php" target="_blank"><B>AVISO LEGAL</B></A> |
<A HREF="Terminos_y_Condiciones.php" target="_blank"><B>Terminos y Condiciones</B></A> |
<B>CloudingNRCS</B> &copy; 2016 All rights reserved</span>
<span class="brand">
Impulsado por  
<A HREF="#" target="_blank"><B>CCRV</B></A> & 
<A HREF="#" target="_blank"><B>Americantae</span>
</div>
</div>
</div>
</div>
<!-- sidebar -->
<div class="sidebar_right">

<div class="300x250">
 
<iframe src="http://www.facebook.com/plugins/likebox.php?id=doramascompletas&amp;width=300&amp;connections=50&amp;stream=false&amp;header=true&amp;height=250" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:300px; height:250px;" allowTransparency="true"></iframe>

</div>


<div class="links">
<h3>Cloudingnrcs Por Abecedario<span class="icon-eye"></span></h3>
<ul class="scrolling years">
<li class="ito"><a href="/doramos/index.php?nom=a">A</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=b">B</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=c">C</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=d">D</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=e">E</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=f">F</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=g">G</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=h">H</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=i">I</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=j">J</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=k">K</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=l">L</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=m">M</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=n">N</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=o">O</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=p">P</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=q">Q</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=r">R</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=s">S</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=t">T</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=u">U</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=v">V</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=w">W</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=x">X</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=y">Y</a></li>

      <li class="ito"><a href="/doramos/index.php?nom=z">Z</a></li>

</ul>
</div>

<div class="links">
<h3>CLOUDINGNRCS Relacionados<span class="icon-sort"></span></h3>
<ul class="scrolling lista">


<ul>
  <?
  $contador = 0;
$novelas = mysql_query("SELECT * FROM novelas_titulos ORDER BY rand() LIMIT 60",$conexion);
  if(isset($_GET['p'])) {print $_GET['p'];}
  while ($array = mysql_fetch_array($novelas)){
 $contador++;?>
<li><b><?php echo $contador ?></b><a href="/doramos/ver.php?ver=<? echo $array['id']; ?>" title="<? print $array['nombre']; ?> capitulos completos"><? print $array['nombre']; ?></a>
</li>
 <? } ?>
</ul>

</ul>
</div>
</div>

<!-- footer -->


</div>
<script type='text/javascript' src='http://www.doramasonline.net/wp-content/plugins/akismet/_inc/form.js?ver=3.1.7'></script>

<script type='text/javascript' src='http://www.doramasonline.net/wp-content/plugins/wp-mega-menu/js/wpmm.js?ver=1.1.2'></script>
<script type='text/javascript' src='http://www.doramasonline.net/wp-includes/js/wp-embed.min.js?ver=4.4.3'></script>
<script src="http://www.doramasonline.net/wp-content/themes/sebastian/js/main.js"></script>
<script>
var ias = $.ias({
    container: "#box_movies",
    item: ".movie",
    pagination: ".pages_respo",
    next: ".siguiente a"
});
/*ias.extension(new IASTriggerExtension({ offset: 0 })),*/
ias.extension(new IASSpinnerExtension), 
/*ias.extension(new IASNoneLeftExtension),*/	
$(document).ready(function() {
    $("#arriba").click(function() {
        return $("html, body").animate({
            scrollTop: 0
        }, 1250), !1
    })
});
$(document).ready(function(){var t=$("#owl-demo2");t.owlCarousel({items:7,pagination:!1,autoPlay:!1,itemsDesktop:[1336,5],itemsDesktopSmall:[900,4],itemsTablet:[600,4],itemsMobile:[384,3]}),$(".next").click(function(){t.trigger("owl.next")}),$(".prev").click(function(){t.trigger("owl.prev")}),$(".play").click(function(){t.trigger("owl.play",1e3)}),$(".stop").click(function(){t.trigger("owl.stop")})}),$(document).ready(function(){var t=$("#series");t.owlCarousel({items:7,pagination:!1,autoPlay:!1,itemsDesktop:[1336,5],itemsDesktopSmall:[900,4],itemsTablet:[600,4],itemsMobile:[384,3]}),$(".nexts").click(function(){t.trigger("owl.next")}),$(".prevs").click(function(){t.trigger("owl.prev")}),$(".play").click(function(){t.trigger("owl.play",1e3)}),$(".stop").click(function(){t.trigger("owl.stop")})}),$(document).ready(function(){$("#owl-demo").owlCarousel({autoPlay:3e3,items:4,pagination:!1,lazyLoad:!0,itemsDesktop:[1199,4],itemsDesktopSmall:[979,3],itemsMobile:[384,1]})});
</script>


</body>
</html><?
}


?>