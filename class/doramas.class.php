<?php

/*
 *  Clase para manejar doramas
 *
 * @author Alan98 for doramasgratis.com
 * @copyright 2014
 *
 */

class Doramas {

   /*
    * obtiene el enlace
    *
    * @access public
    * @params string $cat -> categoría
    * @return string
    *
    */

   static public function getCat($cat){
        if((int)$cat === 1)
            return 'ver-dorama';
        if((int)$cat === 2)
            return 'ver-pelicula';
    }

    /*
    * obtiene el país
    *
    * @access public
    * @params string $country -> país
    * @return string
    *
    */

   static public function getCountry($country){
        if((int)$country === 1)
            return 'corea';
        if((int)$country === 2)
            return 'japon';
        if((int)$country === 3)
            return 'taiwan';
        if((int)$country === 4)
            return 'pelicula';
    }

    /*
     * obtiene la foto de la dorama
     *
     * @access public
     * @params string $id -> id de la dorama
     * @return string
     *
     */

    static public function getCover($id){
      if((int)$id <= 353){
        $gt = mysql_fetch_row(mysql_query('SELECT url FROM novelas_titulos WHERE id = \''.$id.'\' LIMIT 1'));
        $callback = 'http://www.telenovelasid.com/novelas/'.$gt[0].'.jpg';
      } else {
        $gt = mysql_fetch_row(mysql_query('SELECT imagen FROM novelas_titulos WHERE id = \''.$id.'\' LIMIT 1'));
        if(stripos($gt[0], 'http://') !== false || stripos($gt[0], 'https://') !== false){
          $callback = $gt[0];
        } else {
          $callback = 'http://doramasgratis.com/uploads/'.$gt[0];
        }
      }
      return $callback;
    }

    /*
     * obtiene las últimas 10 doramas
     *
     * @access public
     * @params -
     * @return array
     *
     */

    static public function getLastDramas(){
        $bp = mysql_query('SELECT url, nombre, country, category FROM novelas_titulos ORDER BY id DESC LIMIT 8');
        $rr = array();
        while($row = mysql_fetch_row($bp)) $rr[] = $row;
        return $rr;
    }


    /*
     * obtiene las 10 doramas más vistas
     *
     * @access public
     * @params -
     * @return array
     *
     */

    static public function getTop10(){
        $bp = mysql_query('SELECT url, nombre, country, category FROM novelas_titulos ORDER BY visitas DESC LIMIT 8');
        $rr = array();
        while($row = mysql_fetch_row($bp)) $rr[] = $row;
        return $rr;
    }


    /*
     * obtiene las doramas que están en emisión
     *
     * @access public
     * @params -
     * @return array
     *
     */

    static public function getCarrousel(){
      $bp = mysql_query('SELECT DISTINCT url, id, category, nombre FROM novelas_titulos WHERE online = \'1\' ORDER BY RAND() DESC');
      $rr = array();
      while($row = mysql_fetch_row($bp)) $rr[] = $row;
      return $rr;
    }

     /*
     * obtiene las últimas actividades en los capítulos
     *
     * @access public
     * @params -
     * @return array
     *
     */

    static public function getLastActivities(){
      $bp = mysql_query('SELECT n.nombre, n.imagen, p.url, p.time, n.id, n.category, p.chapter FROM activities AS p LEFT JOIN novelas_titulos AS n ON p.drama = n.id ORDER BY p.id DESC LIMIT 10') or die(mysql_error());
      $rr = array();
      while($row = mysql_fetch_row($bp)) $rr[] = $row;
      return $rr;
    }

    /*
     * obtiene las fecha en formato humando
     *
     * @access public
     * @params string $time -> timestamp
     * @return string
     *
     */

    static public function getTimeFrom($time){
      $d = time() - $time;
      if($d < 60)
            return 'Menos de un minuto';
        if($d < 3600){
            $t = ceil($d / 60);
            return 'Hace '.$t.' minuto'.($t == 1 ? '' : 's');
        }
        if($d < 86400){
            $t = ceil($d / 3600);
            return 'Hace '.$t.' hora'.($t == 1 ? '' : 's');
        }
        if($d < 604800){
            $t = ceil($d / 86400);
            return 'Hace '.$t.' d&iacute;a'.($t != 1 ? 's' : '');
        }
        if($d < 2419200){
            $t = ceil($d / 604800);
            return ($t == 1 ? 'La semana pasada' : 'Hace '.$t.' semanas');
        }
        if($d < 31104000){
            $t = ceil($d / 2592000);
            return ($t == 1 ? 'El mes pasado' : 'Hace '.$t.' meses');
        }
        $t = ceil($d / 31104000);
        return ($t == 1 ? 'El a&ntilde;o pasado' : 'Hace '.$t.' a&ntilde;os');
    }

}

?>