<?php

/**
* @file novels.php
* @author Alan García
* @copyright 2013
*/

require 'header.php';
if(!isAdmin()) die;
?>
<script type="text/javascript">
// by Alan98
function fetchChapts(id){
    $('.panel').slideDown(400);
    $.getJSON('/estrelladg2/novels-fetch.php', 'id=' + id, function(e){
      if(e.status !== 1) { alert(e.data); return; }
      $('center').slideUp(400);
      $('.Caps').html(e.data);
    });
}
</script>
<div class="span9">
            <h1 class="page-title">Listado de doramas</h1>
<div class="form-search">
<form method="post">
<input type="text" name="d" value="">&nbsp; <input type="submit" value="Buscar" class="btn btn-primary">
</form>
</div>
<div class="panel panel-primary" style="display:none;">
        <!-- Default panel contents -->
        <div class="panel-heading">Listado de cap&iacute;tulos</div>
        <!-- Table -->
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Cap&iacute;tulo Nº</th>
              <th>URL</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody class="Caps">
          <center><img src="/img/loading.gif" alt="Cargando..." /></center>
          </tbody>
        </table>
      </div>
<div class="btn-toolbar">
    <button class="btn btn-primary" onclick="location.href='/<?=$route?>/novel-add.php'"><i class="icon-plus"></i> Añadir dorama</button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nombre</th>
          <th>Letra</th>
          <th>Clasificación</th>
          <th>Estado</th>
          <th>Fecha</th>
          <th>Categoría</th>
          <th style="width: 26px;"></th>
        </tr>
      </thead>
      <tbody>
      	<?php
      	$novels = 'SELECT id, nombre, letra, clasif, online, fecha, url, category FROM novelas_titulos '.(!empty($_POST['d']) ? 'WHERE nombre LIKE \'%'.$_POST['d'].'%\' ' : '').' ORDER BY id ASC';
      	$num = mysql_num_rows(mysql_query($novels));
      	$per = 20;
      	$paginas = ceil($num / $per);
      	$p = isset($_GET['p']) && ctype_digit($_GET['p']) && $_GET['p'] <= $paginas ? $_GET['p'] : 1;
      	$limit = ($p-1)*$per;
      	if(!ctype_digit($limit)) $limit = 0;
      	$query = mysql_query($novels.' LIMIT '.$limit.', '.$per);
      	while($row = mysql_fetch_row($query)){
      	?>
        <tr>
          <td><a href="<?=Doramas::getCat($row[7])?>/<?=$row[6]?>"><?=$row[0]?></a></td>
          <td><a href="<?=Doramas::getCat($row[7])?>/<?=$row[6]?>"><?=$row[1]?></a></td>
		  <td><a href="<?=Doramas::getCat($row[7])?>/<?=$row[2]?>"><?=$row[2]?></a></td>
          
          <td><?=($row[3] ? $row[3] : '-')?></td>
          <td><?=($row[4] == '' ? 'En emision' : 'Finalizada')?></td>
          <td><?=($row[5] ? $row[5] : '-')?></td>
          <td><?=($row[7] === '1' ? 'Dorama' : 'Pelicula')?></td>
          <td>
              <a onclick="fetchChapts(<?=$row[0]?>); return false;"><i class="icon-eye-open"></i></a>
              <a href="chapter-add.php?dorama=<?=$row[0]?>"><i class="icon-plus"></i></a>
              <a href="novel-add.php?id=<?=$row[0]?>"><i class="icon-pencil"></i></a>
              <a onclick="if(!confirm('Esta seguro que desea borrar esto?')) return false;" href="del.php?id=<?=$row[0]?>&amp;obj=nov"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <? } ?>
      </tbody>
    </table>
</div>
<div class="pagination">
    <ul>
        <li><a href="/<?=$route?>/novels/?p=<?=($p-1)?>">Anterior</a></li>
        <?php
        for($i=1;$i<=$paginas;++$i) {
        ?>
        <li<?=($p == $i ? ' class="active"' : '')?>><a href="/<?=$route?>/novels.php?p=<?=$i?>"><?=$i?></a></li>
        <? } ?>
        <li><a href="/<?=$route?>/novels/?p=<?=($p+1)?>">Siguiente</a></li>
    </ul>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal small hide fade">
    <div class="modal-header">
        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
        <h3 id="myModalLabel">Delete Confirmation</h3>
    </div>
    <div class="modal-body">
        <p class="error-text"><i class="icon-warning-sign modal-icon"></i>Are you sure you want to delete the user?</p>
    </div>
    <div class="modal-footer">
        <button aria-hidden="true" data-dismiss="modal" class="btn">Cancel</button>
        <button data-dismiss="modal" class="btn btn-danger">Delete</button>
    </div>
</div>

        </div>