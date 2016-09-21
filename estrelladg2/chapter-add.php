<?php

/**
 * @file chapter-add.php
 * @author Alan Garcia
 * @copyright 2014
*/


require 'header.php';
if(!isAdmin()) die;
if(!empty($_GET['id']) && ctype_digit($_GET['id'])){
	if(mysql_num_rows($ed = mysql_query('SELECT * FROM novelas_capitulos WHERE id = \''.$_GET['id'].'\''))){
		$ed = mysql_fetch_assoc($ed);
	}
}
if(!empty($_POST)){
    $_POST['url'] = strtolower(str_replace(" ","-",str_replace("&#39;","",$_POST['novela'])).'-capitulo-'.$_POST['capitulo']);
	if(isset($ed)){
        $i = 0;
        mysql_query('INSERT INTO activities (drama, chapter, time, url) VALUES (\''.(int)$_POST['asociado'].'\', \''.(int)$_POST['capitulo'].'\', \''.time().'\', \''.$_POST['url'].'\')');
        foreach($_POST as $f => $val){
            mysql_query('UPDATE novelas_capitulos SET '.$f.' = \''.mysql_real_escape_string($val).'\' WHERE id = \''.$ed['id'].'\'');
            $i = ++$i;
        }
    } else {
        if(empty($_POST['novela'])){
          $s = mysql_fetch_row(mysql_query('SELECT nombre FROM novelas_titulos WHERE id = \''.$_POST['asociado'].'\''));
          $_POST['novela'] = $s[0];
        }
        $_POST['url'] = strtolower(str_replace(" ","-",str_replace("&#39;","",$_POST['novela'])).'-capitulo-'.$_POST['capitulo']);
    	mysql_query('INSERT INTO novelas_capitulos (asociado, capitulo, lvideo, fecha, novela, visitas, url) VALUES (\''.mysql_real_escape_string($_POST['asociado']).'\', \''.mysql_real_escape_string($_POST['capitulo']).'\', \''.mysql_real_escape_string($_POST['lvideo']).'\', \''.mysql_real_escape_string($_POST['fecha']).'\', \''.$_POST['novela'].'\', \''.mysql_real_escape_string($_POST['visitas']).'\', \''.$_POST['url'].'\')');
        mysql_query('INSERT INTO activities (drama, chapter, time, url) VALUES (\''.(int)$_POST['asociado'].'\', \''.(int)$_POST['capitulo'].'\', \''.time().'\', \''.$_POST['url'].'\')');
    }
}
?>

<div class="span9">
            <h1 class="page-title"><?=(isset($ed) ? 'Editar' : 'Añadir')?> capitulo</h1>
            <?
            if(!empty($_POST)) echo '<div class="alert alert-success"><button data-dismiss="alert" class="close" type="button">Ã—</button>Capitulo '.(!empty($ed) ? 'editado, se actualizaron '.$i.' datos' : 'añadido').'</div>';
            ?>
<form id="tab" method="post" action="">
<div class="btn-toolbar">
    <button class="btn btn-primary" type="submit"><i class="icon-<?=(isset($ed) ? 'save' : 'plus')?>"></i> <?=(isset($ed) ? 'Editar' : 'Añadir')?></button>
  <div class="btn-group">
  </div>
</div>
<div class="well">
    <ul class="nav nav-tabs">
      <li><a href="/<?=$route?>/novel-add.php">Añadir dorama</a></li>
      <li class="active"><a href="#home" data-toggle="tab">Añadir capitulo</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
        <label>Fecha de subida/HD</label>
        <input type="text" value="<?=(isset($ed) ? $ed['fecha'] : '')?>" name="fecha" class="input-xlarge">
        <label>NÃºmero de capitulo (valor numÃ©rico)</label>
        <input type="text" value="<?=(isset($ed) ? $ed['capitulo'] : '')?>" name="capitulo" class="input-xlarge">
        <label>Dorama</label>
        <select name="asociado" id="novel" class="input-xlarge">
        <option value="" />Seleccionar dorama</option>
          <?php
          $query = mysql_query('SELECT id, nombre FROM novelas_titulos ORDER BY nombre ASC');
          while($row = mysql_fetch_row($query)){
          ?>
          <option value="<?=$row[0]?>"<?=((isset($ed) && $row[0] === $ed['asociado']) || ((isset($_GET['dorama']) && $_GET['dorama'] == $row[0])) ? ' selected' : '')?>><?=$row[1]?></option>
          <?php
          }
          ?>
    </select>
     <input type="hidden" name="novela" value="<?=isset($ed) ? $ed['novela'] : ''?>" />
     <label>Link del video</label>
        <textarea name="lvideo" rows="5" class="input-xlarge"><?=(isset($ed) ? $ed['lvideo'] : '')?></textarea>
        <label>Visitas</label>
        <input type="text" name="visitas" class="input-xlarge" value="<?=(isset($ed) ? $ed['visitas'] : '')?>">
      </div>
  </div>

</div>


</form>

        </div>