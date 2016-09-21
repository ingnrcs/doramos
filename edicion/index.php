
<?php

/**
* @file index.php
* @author Alan Garcia
* @copyright 2013
*/

ob_start();
require 'header.php';
if(!isAdmin()){
	if(!empty($_POST['password']) && $_POST['password'] === $pwd){
		setAdmin();
		die('<script>window.location=\'/'.$route.'/\';</script>');
	}
?>
        
		<div class="row-fluid">
    <div class="dialog span4">
        <div class="block">
            <div class="block-heading">Ingresar</div>
            <div class="block-body">
                <form method="post" action="">
                    <label>Contraseña</label>
                    <input type="password" class="span12" name="password">
                    <label class="remember"><input type="checkbox" name="remember"> Recordarme</label>
                                                            <button type="submit" style="margin-top: -25px;" class="btn btn-primary pull-right">Enviar</a>


                                        <div class="clearfix"></div>
                </form>
            </div>
        </div>
    </div>
<? die; } if(isset($_GET['logouT'])) { deleteSession(); die('<script>window.location=\'/doramos/edicion\';</script>'); }?>
        <div lass="span9">
<div class="stats">
    <p class="stat"><span class="number"><?=mysql_num_rows(mysql_query('SELECT id FROM novelas_capitulos'))?></span>Capitulos</p>
    <p class="stat"><span class="number"><?=mysql_num_rows(mysql_query('SELECT id FROM novelas_titulos'))?></span>Doramas</p>
</div>
<h1 class="page-title">Inicio</h1>
<?php
if(isset($_GET['nov']) || isset($_GET['cap'])) echo '<div class="alert alert-info"><button data-dismiss="alert" class="close" type="button">Ã—</button>',(!empty($_GET['nov']) ? 'Dorama' : 'Capitulo'),' eliminad',(!empty($_GET['nov']) ? 'a' : 'o'),' correctamente</div>';
?>
<div class="row-fluid">
    <div class="block span6">
        <div class="block-heading" data-toggle="collapse" data-target="#tablewidget">Ultimos capitulos añadidos</div>
        <div id="tablewidget" class="block-body collapse in">
            <table class="table">
              <thead>
                <tr>
                  <th>Capitulo</th>
                  <th>Dorama</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $query = mysql_query('SELECT n.nombre, c.capitulo, c.id, n.url, c.url, n.category FROM novelas_titulos AS n INNER JOIN novelas_capitulos AS c ON n.id = c.asociado ORDER BY id DESC LIMIT 7');
              while($row = mysql_fetch_row($query)){
              ?>
                <tr>
                  <td><a href="/<?=Doramas::getCat($row[5])?>/<?=$row[3]?>/<?=$row[4]?>"><?=$row[1]?></a></td>
                  <td><a href="/<?=Doramas::getCat($row[5])?>/<?=$row[3]?>"><?=$row[0]?></a></td>
                  <td><a onclick="if(!confirm('Esta seguro que desea borrar esto?')) return false;" href="del.php?id=<?=$row[2]?>&amp;obj=cap"><img src="static/close.png"></a> &nbsp; &nbsp; <a href="chapter-add.php?id=<?=$row[2]?>"><img src="static/edit.png"></a></td>
                </tr>
              <? } ?>
              </tbody>
            </table>
            <p><a href="chapters.php">Mas...</a></p>
        </div>
    </div>
    <div class="block span6">
        <div class="block-heading" data-toggle="collapse" data-target="#widget1container">Tutorial</div>
        <div id="widget1container" class="block-body collapse in">
            <h2>Tutorial de administracion</h2>
            <p>En el sidebar izquierdo se encuentra un bloque: es para administrar generalmente el sitio y aÃ±adir doramas y capitulos</p>
            <p>En el primer bloque encontraras las opciones para añadir nuevas novelas. Antes de crear capitulos se debe crear la dorama para posteriormente poder asignarle los capitulos.</p>
            <p><a class="btn btn-primary btn-large" href="chapter-add.php">Añadir capitulo &raquo;</a></p>
        </div>
    </div>
</div>

        </div>
    </div>
<?php
ob_end_flush();
?>
