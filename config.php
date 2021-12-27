<?php 
$page = (isset($_GET['page']) && $_GET['page']) ? $_GET['page'] : '';


// konfigurasi untuk website

define('PATH', 'http://localhost/webscula/');
define('SITE_URL', PATH . 'index.php');
define('POSITION_URL', PATH . '?page' . $page);


define('DB_HOST', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'db_schools');



 ?>