<?php

/**
 * @file chapters.php
 * @author Alan98
 * @copyright 2014
 */

require 'header.php';
if(!isAdmin()) die;
?>

<div class="span9">
            <h1 class="page-title">Listado de capitulos</h1>
<div class="btn-toolbar">
    <button class="btn btn-primary" onclick="location.href='/<?=$route?>/chapter-add.php'"><i class="icon-plus"></i> Añadir capitulo</button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <table class="table">
      <thead>
        <tr>
          <th>ID</th>
          <th>Dorama</th>
          <th>Capitulo</th>
          <th>Descripcion</th>
          <th style="width: 26px;"></th>
        </tr>
      </thead>
      <tbody>
      	<?php
      	$novels = 'SELECT c.id, c.capitulo, c.fecha, n.nombre, c.url, n.category FROM novelas_titulos AS n INNER JOIN novelas_capitulos AS c ON n.id = c.asociado ORDER BY c.id ASC';
        $num = mysql_num_rows(mysql_query($novels));
      	$per = 50;
      	$paginas = ceil($num / $per);
        $p = isset($_GET['p']) && ctype_digit($_GET['p']) && $_GET['p'] <= $paginas ? $_GET['p'] : 1;
        $limit = ($p-1)*$per;
      	if(!ctype_digit($limit)) $limit = 0;
      	$query = mysql_query($novels.' LIMIT '.$limit.', '.$per);
      	while($row = mysql_fetch_row($query)){
      	?>
        <tr>
          <td><a href=""><?=$row[0]?></a></td>
          <td><?=$row[3]?></td>
          <td><?=$row[1]?></td>
          <td><?=$row[2]?></td>
          <td>
              <a href="/<?=$route?>/chapter-add.php?id=<?=$row[0]?>"><i class="icon-pencil"></i></a>
              <a onclick="if(!confirm('Esta seguro que desea borrar esto?')) return false;" href="/<?=$route?>/del/?id=<?=$row[0]?>&amp;obj=cap"><i class="icon-remove"></i></a>
          </td>
        </tr>
        <? } ?>
      </tbody>
    </table>
</div>
<div class="pagination">
    <ul>
        <li><a href="/<?=$route?>/chapters.php?p=<?=($p-1)?>">Anterior</a></li>
        <?php
        for($i=1;$i<=$paginas;++$i) {
        ?>
        <li<?=($p == $i ? ' class="active"' : '')?>><a href="/<?=$route?>/chapters.php?p=<?=$i?>"><?=$i?></a></li>
        <? } ?>
        <li><a href="/<?=$route?>/chapters.php?p=<?=($p+1)?>">Siguiente</a></li>
    </ul>
</div>

<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal small hide fade">
    <div class="modal-header">
        <button aria-hidden="true" data-dismiss="modal" class="close" type="button">Ã—</button>
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