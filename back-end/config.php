<?php
/**
 * Created by IntelliJ IDEA.
 * User: galihparyanto
 * Date: 24/10/20
 * Time: 10.22
 */

define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'admin');
define('DB_PASSWORD', 'a9gp6680');
define('DB_DATABASE', 'mkm');
$db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);