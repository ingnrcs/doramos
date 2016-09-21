<?php



/**

 * @file del.php

 * @author Alan98

 * @copyright 2014

 */





require $_SERVER['DOCUMENT_ROOT'].'/Includes/config.inc.php';

if(empty($_COOKIE['doramasAdminPanel2014']) || $_COOKIE['doramasAdminPanel2014'] != 'LiVeWHiLeWeArEYounG') die;

if(isset($_GET['obj']) && isset($_GET['id']) && ctype_digit($_GET['id'])) {

	if($_GET['obj'] == 'nov'){

		mysql_query('DELETE FROM novelas_titulos WHERE id = \''.$_GET['id'].'\'');

		mysql_query('DELETE FROM novelas_capitulos WHERE asociado = \''.$_GET['id'].'\'');

	} else {

		mysql_query('DELETE FROM novelas_capitulos WHERE id = \''.$_GET['id'].'\'');

	}

}

header('Location: /estrelladg2/?'.(!empty($_GET['obj']) && $_GET['obj'] == 'nov' ? 'nov=true' : 'cap=true'));

?>