<?php
require 'class/doramas.class.php';
include_once "Includes/config.inc.php";
require_once('Includes/Funciones.php');
$capitulo = strip_tags(Seguridad($_GET['capitulo']));
$novela = strip_tags(Seguridad($_GET['categoria']));
if ($capitulo) {
$datos = mysql_fetch_array(mysql_query("SELECT * FROM novelas_capitulos WHERE id='".$capitulo."'"));

$gui = mysql_fetch_array(mysql_query("SELECT * FROM novelas_titulos WHERE id='".$novela."'"));

if(!isset($_SESSION["tn_".$novela.""])){@mysql_query("UPDATE novelas_titulos SET visitas = visitas + 1 WHERE id='$novela'"); $_SESSION["tn_".$novela.""]="activo";}
if(!isset($_SESSION["tc_".$capitulo.""])){@mysql_query("UPDATE novelas_capitulos SET visitas = visitas + 1 WHERE url='$capitulo'"); $_SESSION["tc_".$capitulo.""]="activo";}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" /> 
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>ver dorama <? echo $datos[novela]; ?> capitulo <? echo $datos[capitulo]; ?> sub español</title>
<meta name="description" content="descargar dorama <? echo $datos[novela]; ?> capitulo <? echo $datos[capitulo]; ?> audio latino, <? echo $datos[novela]; ?> capitulo <? echo $datos[capitulo]; ?> subtitulado, <? echo $datos[novela]; ?> capitulo <? echo $datos[capitulo]; ?> subtitulo español online">
<meta name="keywords" content="<? echo $datos[novela]; ?> Episode <? echo $datos[capitulo]; ?> Eng sub, descargar <? echo $datos[novela]; ?> capitulos <? echo $datos[capitulo]; ?>, ver <? echo $datos[novela]; ?> capitulo <? echo $datos[capitulo]; ?> sub español, download <? echo $datos[novela]; ?> episode <? echo $datos[capitulo]; ?>,
<? echo $datos[novela]; ?> capitulo <? echo $datos[capitulo]; ?> en español latino subtitulado, dorama <? echo $datos[novela]; ?> online gratis">
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
<meta content='index, follow' name='msnbot'/>
<meta content='all' name='googlebot-image'/>

<link href="http://www.doramasonline.net/css/repro.css" rel="stylesheet" type="text/css" />
<meta property="og:url" content="http://www.doramasonline.net/ver/<? echo $datos[url]; ?>" />
<meta property="og:title" content="<? echo ucwords($datos[novela]); ?>" />
<meta property="og:description" content="<? echo $datos[novela]; ?> capitulo <? echo $datos[capitulo]; ?> | WWWW.DORAMASONLINE.NET"/>
 <meta property="og:image" content="<?=Doramas::getCover($gui['id'])?>" />
    <base />


  <link rel="stylesheet" type="text/css" href="http://www.doramasonline.net/wp-content/themes/sebastian/css/reset.css"/>
  <link rel="stylesheet" type="text/css" href="http://www.doramasonline.net/wp-content/themes/sebastian/mt.min.css"/>
  <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="http://www.doramasonline.net/wp-content/themes/sebastian/css/responsive.css"/>
  <link rel="stylesheet" type="text/css" href="http://www.doramasonline.net/wp-content/themes/sebastian/css/icons.css"/>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="http://www.doramasonline.net/wp-content/themes/sebastian/js/paginador.js" type="text/javascript"></script>

<script src='http://www.doramasonline.net/js/players.js' type='text/javascript'></script>
    <script src="http://www.doramasonline.net/wp-content/themes/sebastian/js/js.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <link rel="alternate" type="application/rss+xml" title="sebastian &raquo; <? echo $datos[nombre]; ?> RSS de los comentarios" href="http://www.doramasonline.net/ver/<? echo $datos[url]; ?>feed/" />
	<div id="fb-root"></div>

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
}(document, 'script', 'facebook-jssdk'));</script>


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
<script type='text/javascript' src='http://www.doramasonline.net/wp-includes/js/jquery/jquery.js?ver=1.11.3'></script>
<script type='text/javascript' src='http://www.doramasonline.net/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.2.1'></script>
<link rel='https://api.w.org/' href='http://www.doramasonline.net/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://www.doramasonline.net/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://www.doramasonline.net/wp-includes/wlwmanifest.xml" /> 
<link rel='prev' title='La huérfana' href='http://www.doramasonline.net/la-huerfana/' />
<link rel='next' title='Encuentros paranormales 2' href='http://www.doramasonline.net/encuentros-paranormales-2/' />
<meta name="generator" content="WordPress 4.4.3" />
<link rel="canonical" href="http://www.doramasonline.net/ver/<? echo $datos[url]; ?>" />
<link rel='shortlink' href='http://www.doramasonline.net/?p=357' />
<link rel="alternate" type="application/json+oembed" href="http://www.doramasonline.net/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdemo.mundothemes.com%2Fsebastian%2Flos-otros%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://www.doramasonline.net/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fdemo.mundothemes.com%2Fsebastian%2Flos-otros%2F&#038;format=xml" />
 <script type='text/javascript'> 
$(document).ready(function() {
$(".contenido_tab").hide(); //Ocultar capas
$("ul.tabs li:first").addClass("activa").show(); //Activar primera pestaï¿½a
$(".contenido_tab:first").show(); //Mostrar contenido primera pestaï¿½a

// Sucesos al hacer click en una pestaña
$("ul.tabs li").click(function() {
$("ul.tabs li").removeClass("activa"); //Borrar todas las clases "activa"
$(this).addClass("activa"); //Añadir clase "activa" a la pestaï¿½a seleccionada
$(".contenido_tab").hide(); //Ocultar todo el contenido de la pestaña
var activatab = $(this).find("a").attr("href"); //Leer el valor de href para identificar la pestañ activa 
$(activatab).fadeIn(); //Visibilidad con efecto fade del contenido activo
return false;
});
});


</script> 
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

<!-- izquierda -->


<div class="notes" style="background: #F71863;">
<p>ver <? echo $datos[novela]; ?> capitulo <? echo $datos[capitulo]; ?> sub español</p>
</div>


<div class="post">
<!-- meta-datos -->	
<div class="headingder">
<div class="cover" style="background-image: url(<?=Doramas::getCover($gui['id'])?>);" ></div>
<div class="datos" style="background: transparent;margin-bottom: 0;">
<div class="imgs tsll"><img src="<?=Doramas::getCover($gui['id'])?>" alt="<? echo $datos[nombre]; ?>" /></div><!-- imgs -->
<div class="dataplus">
<h1><? echo $datos[nombre]; ?></h1>
<span class="original"><?php if(!empty($gui['original'])): ?>  <?php echo utf8_encode($gui['original']),'<br />'; endif; ?></span><div id="dato-1" class="data-content">
<p>
<span class="N/A">N/A</span><span>
<a href="http://www.doramasonline.net/fecha-estreno/2001/" rel="tag">2001</a> 
</span><span><b class="icon-query-builder"></b> 104 min</span>  
<?php
if(!empty($gui['genres'])){
  echo '<span class="clms"><b>Genero: </b></span>';
  $ex = explode(',', $gui['genres']);
  $c = count($ex);
  for($i=0;$i<=$c;++$i){
    echo '<a href="/genero/',trim($ex[$i]),'" class="lc">',trim($ex[$i]),'</a>';
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
<i><?php if(isset($gui['online'])): ?> <span class="clms"><b>Estado: </b></span> <? echo '<span style="color: ',($gui['online'] == 0 ? '#DF0101' : '#1DAD3A'),';"><b>',$datos['online'] == 0 ? 'Finalizado' : 'En emisi&oacute;n','</b></span><br />'; endif;?>
</i>
<i>7.6/10</i> 
<i>237,862 votes</i>
</div>
</div>
</div>

<div class="xmll"><p class="xcsd"><b class="icon-bullhorn"></b> &nbsp;<a href="/" rel="tag">Sinopsis: <?php if(!empty($gui['contenido'])): ?> <?php echo ($gui['contenido']),'<br />'; endif; ?></a></p></div>
<div class="xmll"><p class="xcsd"><b class="icon-star"></b> <a href="" rel="tag">Titulo Original: 
<?php if(!empty($gui['original'])): ?><?php echo utf8_encode($datos['original']),'<br />'; endif; ?></a></p></div>
<div class="xmll"><p class="xcsd"><b class="icon-check"></b><a href="/" rel="tag">Año: 
<?php if(!empty($gui['emision'])): ?> <? echo $gui['emision'],'<br />'; endif;?></p></div> 
<div class="xmll"><p class="xcsd"><b class="icon-trophy"></b>Pais: 
<?php if(!empty($gui['clasif'])): ?><?php echo utf8_encode($gui['clasif']),'<br />'; endif; ?></p></div> 
<div class="xmll"><p class="tsll xcsd"><b class="icon-info-circle"></b><?php if(!empty($gui['fecha'])): ?> <?php echo utf8_encode($gui['fecha']),'<br />'; endif; ?></p></div>
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


<!-- player -->
<div id="player-container">
<div class="no_link">
<p>REGALANOS UN LIKE POR NUESTRO TRABAJO</p>

<div class="fb-share-button" data-href="http://www.doramasonline.net/ver/<? echo $datos[url]; ?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://www.doramasonline.net/ver/<? echo $datos[url]; ?>&amp;src=sdkpreparse">Compartir</a></div>

<iframe src="http://www.facebook.com/plugins/like.php?href=http://www.doramasonline.net/ver/<? echo $datos[url]; ?>&amp;layout=button_count&amp;show_faces=true&amp;width=120&amp;action=like&amp;colorscheme=light&amp;height=20" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:114px; height:20px;"></iframe>
<g:plusone size="medium"></g:plusone>

<a href="https://twitter.com/share" class="twitter-share-button" data-count="horizontal">Tweet</a></div>
</div>

<!-- player -->

<div id="player-container">
<div class="no_link">
<p></p>


 <a href="http://www.doramasonline.net/noam/index.html" target="_blank"><img src="http://www.doramasonline.net/img/descargas.png" border="0" alt="staff" /></a> </div> 

</div>
<div id="player-container">
<div class="no_link">
<p></p>
<p><? echo $datos[lvideo]; ?></p>
</div>
</div>

<!-- player -->


<div id="player-container">
<div class="no_link">
<p><b class="icon-play-circle-outline play"></b></p>
<p><h3><a href="http://www.doramasonline.net/ver-dorama/<? echo $gui[url]; ?>">
  <? echo $gui[nombre]; ?> capitulos completos </a></h3></p>
<?
     $capitulos = mysql_query("SELECT * FROM novelas_capitulos WHERE asociado='".$datos[asociado]."' ORDER BY capitulo ASC",$conexion);
        while ($array=mysql_fetch_array($capitulos)){
	         if($array[capitulo]==$datos[capitulo]){

	          echo '<div id="enlaces-on"><a href="/doramos/vercapitulo.php?capitulo='.$array[id].'&categoria='.$novela.'" title="ver dorama '.$array[novela].' capitulo '.$array[capitulo].'">'.$array[novela].' | Capitulo '.$array[capitulo].' | Episodio '.$array[fecha].'</a></div>';

	         }else{

	          echo '<div id="enlaces"><a href="/doramos/vercapitulo.php?capitulo='.$array[id].'&categoria='.$novela.'" title="ver dorama '.$array[novela].' capitulo '.$array[capitulo].'">'.$array[novela].' | Capitulo '.$array[capitulo].' | Episodio '.$array[fecha].'</a></div>';

	          }
        }
?>
</div>
</div>
<!-- imagenes -->


<!-- botones sociales -->
<div class="soci">
<a class="fb" href="javascript: void(0);" onclick="window.open ('http://www.facebook.com/sharer.php?u=http://www.doramasonline.net/ver/<? echo $datos[url]; ?>', 'Facebook', 'toolbar=0, status=0, width=650, height=450');"><b class="icon-facebook3"></b> Compartir</a>
<a class="tw" href="javascript: void(0);" onclick="window.open ('https://twitter.com/intent/tweet?text=<? echo $datos[nombre]; ?>&url=http://www.doramasonline.net/ver/<? echo $datos[url]; ?>', 'Twitter', 'toolbar=0, status=0, width=650, height=450');" data-rurl="http://www.doramasonline.net/ver/<? echo $datos[url]; ?>"><b class="icon-twitter3"></b> Twittear</a>
<div class="fb-comments" data-href="http://www.doramasonline.net/ver/<? echo $datos[url]; ?>" data-num-posts="10" data-width="100%"></div>

</div>
<!-- comentarios -->
	
						
<div class="footer_c">
<span class="copy">
<A HREF="/aviso_legal.php" target="_blank"><B>AVISO LEGAL</B></A> |
<A HREF="/Terminos_y_Condiciones.php" target="_blank"><B>Terminos y Condiciones</B></A> |
<B>DoramasOnline</B> &copy; 2016 All rights reserved</span>
<span class="brand">
Impulsado por  
<A HREF="=" target="_blank"><B>Nancy</B></A> & 
<A HREF="=" target="_blank"><B>Claudio &</B></A> Sebastian</span>
</div>
</div>
</div>
</div>
<!-- sidebar -->
<div class="sidebar_right">
<div class="links"><script id="cid0020000085785259243" data-cfasync="false" async src="//st.chatango.com/js/gz/emb.js" style="width: 300px;height: 550px;">{"handle":"doramasgratiss","arch":"js","styles":{"a":"0084ef","b":100,"c":"FFFFFF","d":"FFFFFF","k":"0084ef","l":"0084ef","m":"0084ef","n":"FFFFFF","p":"10","q":"0084ef","r":100}}</script>


</div>




</div>


<div class="footer">

</div>
</div><!-- footer --></div>
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
<script type='text/javascript'>
var adParams = {p: '73290653', preventBubble: '', serverdomain: 'adsrvmedia' , numOfTimes: '4',duration: '1',period: 'hour', openNewTab: true  };
</script>
<script type='text/javascript' src='http://cdn.adsrvmedia.net/adsrvmedia/tags/xpopup/xpopup.js?ap=1303'></script>
<a href="http://www.goo.gl/k55Kie"><img src="http://www.goo.gl/k55Kie" width="1" height="1" border="0"/></a></body>
</html><?
}
else {
$pagina = "http://www.doramasonline.net";
Header("Location: $pagina"); 
	
}

?>
