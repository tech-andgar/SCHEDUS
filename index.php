<?php
/*
 * Aqui se llamaran los controladores y sus metodos que lleguen por la url
 *
 * PHP version 7
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @Script: index.php
 * @category   Index
 * @package    Index
 * @author     Andrés Garcia <afgarcia0479@misena.edu.co>
 * @copyright  (c) 2018 Andrés Garcia
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    GIT: $Id$
 * @link       https://github.com/andgar2010/SCHEDUS
 * @since      File available since Release 0.0.1
 * @Create At: 2018-10-03 09:39:03
 * @Last Modified By: Andrés García
 * @Last Modified At: 2018-10-22 13:30:02
 */
//

try {
    require_once 'core/core.php';
    $url = isset($_REQUEST['url']) ? explode('/', $_REQUEST['url']) : null;
    $c = 'Inicio';
    $m = 'Index';
    $p = [];

    // $c = isset($_REQUEST['c']) ? $_REQUEST['c'] : 'inicio';
    // $m = isset($_REQUEST['m']) ? $_REQUEST['m'] : 'index';

    if (isset($url[0])) {
        $c = $url[0];
        unset($url[0]);
    }
    if (isset($url[1])) {
        $m = $url[1];
        unset($url[1]);
    }
    $c = ucwords($c) . 'Controller';

    // if (!@include_once ('controllers/' . $c . '.php')) // @ - to suppress warnings,
    // // you can also use error_reporting function for the same purpose which may be a better option
    // {
    //     throw new Exception($c.' no existe');
    // }
    // or
    if (!file_exists('controllers/' . $c . '.php')) {
        throw new Exception($c.' no existe');
    }
    else {
        require_once 'controllers/' . $c . '.php';
        $c = new $c();
        $p = $url ? array_values($url) : [];
        call_user_func_array([$c, $m], $p);
    }

} catch (Exception $e) {
    echo "Message : " . $e->getMessage();
    echo "<br>Code : " . $e->getCode();

    // ERROR 404
    require_once 'views/all/404.php';
}