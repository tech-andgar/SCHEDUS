<?php
/*
 * Path
 *
 * PHP version 7
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @Script: path.php
 * @category   Path
 * @package    Path
 * @author     Andrés Garcia <afgarcia0479@misena.edu.co>
 * @copyright  (c) 2018 Andrés Garcia
 * @license    http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version    GIT: $Id$
 * @link       https://github.com/andgar2010/SCHEDUS
 * @since      File available since Release 0.0.1
 * @Create At: 2018-10-03 09:39:03
 * @Last Modified By: Andrés García
 * @Last Modified At: 2018-11-15 13:48:41
 */

class Path
{
    /**
     * Ejectuar vista del modulo general al cliente
     *
     * @param string   $module nombre de modulo
     * @param string   $view   nombre de vista
     * @param string[] $data   Arreglo de data
     * @param string   $c      nombre de c
     *
     * @return void directamente vista de modulo
     */
    public function view($module, $view, $title = "", $data = [], $c = '')
    {
        $title = $title;
        require_once 'views/all/head.php';
        require_once 'views/'.ucwords($module).'/header.php' ;
        require_once 'views/'.ucwords($module).'/'.ucwords($view).'.php';
        require_once 'views/all/footer.php';
    }

    /**
     * Ejectuar vista del modulo especifico al cliente
     *
     * @param string   $module nombre de modulo
     * @param string   $view   nombre de vista
     * @param string[] $data   Arreglo de data
     * @param string   $c      nombre de c
     *
     * @return void directamente vista de modulo
     */
    public function viewModule($module, $view, $title = "", $data = [], $c = '')
    {
        $title = $title;
        require_once 'views/all/head.php';
        require_once 'views/all/headerModule.php';
        require_once 'views/'.ucwords($module).'/sidebar'.ucwords($module).'.php';
        require_once 'views/'.ucwords($module).'/'.ucwords($view).'.php';
        require_once 'views/all/footerModule.php';
    }

    /**
     * Crear objeto de modelo del modulo
     *
     * @param string  $m  nombre de modulo
     *
     * @return object retorna nuevo objeto del modulo
     */
    public function model($m)
    {
        $m = ucwords($m) . 'Model';
        try {
            if (file_exists('models/' . $m . '.php')) {
                require_once 'models/' . $m . '.php';
                return $m = new $m;
            }
        } catch (Exception $e) {
            die('Excepción capturada: ' . $e->getMessage() . 'No existe Modelo');
        }
    }
}
