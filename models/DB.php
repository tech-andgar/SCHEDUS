<?php
/**
* Database
 *
 * PHP version 7
 *
 * LICENSE: This source file is subject to version 3.01 of the PHP license
 * that is available through the world-wide-web at the following URI:
 * http://www.php.net/license/3_01.txt.  If you did not receive a copy of
 * the PHP License and are unable to obtain it through the web, please
 * send a note to license@php.net so we can mail you a copy immediately.
 *
 * @Script: db.php
 * @category:  Database
 * @package:   Database
 * @author:    Andrés Garcia <afgarcia0479@misena.edu.co>
 * @copyright: (c) 2018 Andrés Garcia
 * @license:   http://www.php.net/license/3_01.txt  PHP License 3.01
 * @version:   GIT: $Id$
 * @link:      https://github.com/andgar2010/SCHEDUS
 * @since:     File available since Release 0.0.1
 * @Create At: 2018-10-03 09:39:03
 * @Last Modified By: Andrés Garcia
 * @Last Modified At: 2018-10-03 10:45:03
 * @access public
 * @author Afgarcia0479
 */
class DB {

	/**
	 * @access public
	 * @static
	 * Este metodo de conectar al base de datos
     *
     * @return object objeto de conexion del base de datos
	 */
	public static function conectar() {
		try {
            $pdo = new PDO('mysql:host=localhost:3307;dbname=db_schedus;charset=utf8', 'root', '');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch (Exception $e) {
            die($e->getMessage());
        }
	}
}