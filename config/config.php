<?PHP
$db_host	    = 'localhost';        //variables that connect to the database
$db_user        = 'bouzouki_public';
$db_password	= 'zaq12wsx@#12345';
$db_name	    = 'bouzouki_main';

define('APP_URL', 'http://www.bouzoukiquest.com/'); 

require('idiorm.php');                                         //the use of idiorm makes it a lot more simple
ORM::configure("mysql:host=$db_host;dbname=$db_name");
ORM::configure('username', $db_user);
ORM::configure('password', $db_password);
ORM::configure('driver_options', array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8', PDO::MYSQL_ATTR_LOCAL_INFILE => TRUE ));
ORM::configure('return_result_sets', true);  
ORM::configure('logging', true);

?>