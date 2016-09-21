<?php



/**

 * @file novel-add.php

 * @author Alan Garcia

 * @copyright 2014

*/



require 'header.php';

if(!isAdmin()) die;

if(!empty($_GET['id']) && ctype_digit($_GET['id'])){

    if(mysql_num_rows($ed = mysql_query('SELECT * FROM novelas_titulos WHERE id = \''.$_GET['id'].'\''))){

        $ed = mysql_fetch_assoc($ed);

    }

}

if(!empty($_POST)){

    if((empty($_FILES['image']) && empty($_POST['imagen'])) && !isset($ed)) die('La imagen es requerida');

    if(empty($_POST['nombre']) || empty($_POST['contenido'])) die('El nombre y el contenido son requeridos');

    if($_FILES['image']['error'] !== 4){

        $allowed = array('jpg', 'jpeg', 'gif', 'png', 'bmp');

        $cosa = pathinfo($_FILES['image']['name']);

        $file = rtrim($_SERVER['DOCUMENT_ROOT'] . '/uploads/', '/') . '/' . $_FILES['image']['name'];

    if(in_array($cosa['extension'], $allowed)) {

        move_uploaded_file($_FILES['image']['tmp_name'], $file) or die('esa');

    } else {

        die('Hubo un error al subir la imagen; debe ser jpg, jpeg, gif, png o bmp');

      }

    }

    $_FILES['image']['name'] = 'http://'.$_SERVER['HTTP_HOST'].'/uploads/'.$_FILES['image']['name'];

    $_POST['letra'] = ucwords(substr(trim($_POST['nombre']), 0, 1));

    if(isset($ed)){

        $i = 0;

        foreach($_POST as $f => $val){

            mysql_query('UPDATE novelas_titulos SET '.$f.' = \''.mysql_real_escape_string($val).'\' WHERE id = \''.$ed['id'].'\'');

            ++$i;

        }

        if($_FILES['image']['error'] !== 4 || (isset($_POST['imagen']) && $_POST['imagen'] != $ed['imagen'])){

            mysql_query('UPDATE novelas_titulos SET imagen = \''.$_FILES['image']['error'] !== 4 ? $_FILES['image']['name'] : $_POST['imagen'].'\' WHERE id = \''.$ed['id'].'\'');

        }

    } else {

            mysql_query('INSERT INTO novelas_titulos (nombre, imagen, contenido, url, clasif, genres, letra, fecha, visitas, category, country, online, emision, original) VALUES (\''.mysql_real_escape_string($_POST['nombre']).'\', \''.($_FILES['image']['error'] !== 4 ? $_FILES['image']['name'] : $_POST['imagen']).'\', \''.mysql_real_escape_string($_POST['contenido']).'\', \''.mysql_real_escape_string($_POST['url']).'\', \''.mysql_real_escape_string($_POST['clasif']).'\', \''.mysql_real_escape_string($_POST['genres']).'\', \''.mysql_real_escape_string($_POST['letra']).'\',\''.$_POST['fecha'].'\', \''.$_POST['visitas'].'\', \''.$_POST['category'].'\', \''.$_POST['country'].'\', \''.$_POST['online'].'\', \''.$_POST['emision'].'\', \''.mysql_real_escape_string($_POST['original']).'\')');

    }

}

?>

<div class="span9">

            <h1 class="page-title"><?=(isset($ed) ? 'Editar' : 'Añadir')?> dorama</h1>

            <?

            if(!empty($_POST)) echo '<div class="alert alert-success"><button data-dismiss="alert" class="close" type="button">Ã—</button>Dorama '.(!empty($ed) ? 'editada, se actualizaron '.$i.' datos' : 'añadida').'</div>';

            ?>

<form id="tab" method="post" enctype='multipart/form-data' action="">

<div class="btn-toolbar">

    <button class="btn btn-primary" type="submit"><i class="icon-<?=(isset($ed) ? 'save' : 'plus')?>"></i> <?=(isset($ed) ? 'Editar' : 'Añadir')?></button>

  <div class="btn-group">

  </div>

</div>

<div class="well">

    <ul class="nav nav-tabs">

      <li class="active"><a href="/<?=$route?>/novel-add.php" data-toggle="tab"><?=(isset($ed) ? 'Editar' : 'Añadir')?> dorama</a></li>

      <li><a href="/<?=$route?>/chapter-add.php">Añadir capitulo</a></li>

    </ul>

    <div id="myTabContent" class="tab-content">

      <div class="tab-pane active in" id="home">

        <label>Nombre</label>

        <input type="text" value="<?=(isset($ed) ? $ed['nombre'] : '')?>" name="nombre" class="input-xlarge">

        <label>Titulos alternativos (separar con /)</label>

        <input type="text" value="<?=(isset($ed) ? utf8_encode($ed['original']) : '')?>" name="original" class="input-xlarge">

        <label>Imagen (si estÃ¡s editando no es necesario que la vuelvas a subir)</label>

        <div class="imageOptions">

        <button class="btn btn-primary" onclick="$('.imageOptions').fadeOut(400); $('input[class=input_file]').show(400); return false;"><i class="icon-upload-alt"></i> Subir una imagen</button>

        <button class="btn btn-primary" onclick="$('.imageOptions').fadeOut(400); $('input[name=imagen]').show(400); return false;"><i class="icon-upload"></i> URL de imagen</button>

        </div>

        <input style="display:none;" type="file" class="input_file" size="20" title="Selecciona una imagen" name="image"/>

        <input style="display:none;" type="text" name="imagen" class="input-xlarge" value="<?=(isset($ed) ? $ed['imagen'] : '')?>" placeholder="Ingresa aqui la URL completa de la imagen" />

        <label>URL SEO</label>

        <input type="text" value="<?=(isset($ed) ? $ed['url'] : '')?>" name="url" class="input-xlarge">

        <label>ClasificaciÃ³n/Pais</label>

        <input type="text" value="<?=(isset($ed) ? $ed['clasif'] : '')?>" name="clasif" class="input-xlarge">

        <label>Horarios</label>

        <input type="text" value="<?=(isset($ed) ? $ed['fecha'] : '')?>" name="fecha" class="input-xlarge">

        <label>Visitas</label>

        <input type="text" value="<?=(isset($ed) ? $ed['visitas'] : '')?>" name="visitas" class="input-xlarge">

        <label>Periodo de emisiÃ³n</label>

        <input type="text" value="<?=(isset($ed) ? $ed['emision'] : '')?>" name="emision" value="<?=date('d-m-Y')?>" class="input-xlarge">

        <label>Categoria</label>

        <select name="category" id="status" class="input-xlarge">

          <option<?=(isset($ed) && $ed['category'] == 1 ? ' selected' : '')?> value="1">Dorama</option>

          <option<?=(isset($ed) && $ed['category'] == 2 ? ' selected' : '')?> value="2">Pelicula</option>

        </select>

       <label>Estado</label>

        <select name="online" id="status" class="input-xlarge">

          <option<?=(isset($ed) && $ed['online'] == 0 ? ' selected' : '')?> value="0">Finalizado</option>

          <option<?=(isset($ed) && $ed['online'] == 1 ? ' selected' : '')?> value="1">En emisiÃ³n</option>

       </select>

       <label>Pais</label>

        <select name="country" id="status" class="input-xlarge">

          <option<?=(isset($ed) && $ed['country'] == 1 ? ' selected' : '')?> value="1">Corea</option>

          <option<?=(isset($ed) && $ed['country'] == 2 ? ' selected' : '')?> value="2">Japon</option>

          <option<?=(isset($ed) && $ed['country'] == 3 ? ' selected' : '')?> value="3">Taiwan</option>

          <option<?=(isset($ed) && $ed['country'] == 4 ? ' selected' : '')?> value="4">Pelicula</option>

        </select>

        <label>Contenido (SINOPSIS DEBE ESTAR LIMPIO DE TILDES)</label>

        <textarea name="contenido" rows="5" class="input-xlarge"><?=(isset($ed) ? $ed['contenido'] : '')?></textarea>

        <label>GÃ©neros (separados por comas; ej: drama, romance, comedia)</label>

        <input name="genres" type="text" class="input-xlarge" value="<?=(isset($ed) ? $ed['genres'] : '')?>">

      </div>

  </div>



</div>





</form>



        </div>