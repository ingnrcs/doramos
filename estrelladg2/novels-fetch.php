<?php
if(empty($_COOKIE['doramasAdminPanel2014']) || $_COOKIE['doramasAdminPanel2014'] != 'LiVeWHiLeWeArEYounG') die;
require $_SERVER['DOCUMENT_ROOT'].'/Includes/config.inc.php';
if(empty($_GET['id']) || !ctype_digit($_GET['id'])) die(json_encode(array('status' => 0, 'data' => 'Error provocado')));
$g = mysql_query('SELECT id, capitulo, url FROM novelas_capitulos WHERE asociado = \''.$_GET['id'].'\'');
$tmpl = '';
while($row = mysql_fetch_row($g)){
  $tmpl .= sprintf('<tr><td>%u</td><td>%u</td><td>%s</td><td><a href="/estrelladg2/chapter-add/?id=%u"><i class="icon-pencil"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a onclick="if(!confirm(\'Esta seguro que desea borrar esto?\')) return false;" href="/estrelladg2/del/?id=%u&amp;obj=cap"><i class="icon-remove"></i></a></td></tr>', (int)$row[0], (int)$row[1], $row[2], (int)$row[0], (int)$row[0]);
}
echo json_encode(array('status' => 1, 'data' => $tmpl));
?>