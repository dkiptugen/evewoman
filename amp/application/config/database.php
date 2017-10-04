<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'default';
$active_record = TRUE;

$db['default']['hostname'] = 'localhost';
$db['default']['username'] ='db_live_2';
$db['default']['password'] ='d3f9cf1290666e5s';
$db['default']['database'] = 'standard_digital_world';
$db['default']['dbdriver'] = 'mysql';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = FALSE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;

//third db search

$db['seconddb']['hostname'] = 'localhost';
$db['seconddb']['username'] = 'db_live_2';
$db['seconddb']['password'] = 'd3f9cf1290666e5s';
$db['seconddb']['database'] = 'standard_digital_world_archives';
$db['seconddb']['dbdriver'] = 'mysql';
$db['seconddb']['dbprefix'] = '';
$db['seconddb']['pconnect'] = FALSE;
$db['seconddb']['db_debug'] = FALSE;
$db['seconddb']['cache_on'] = FALSE;
$db['seconddb']['cachedir'] = '';
$db['seconddb']['char_set'] = 'utf8';
$db['seconddb']['dbcollat'] = 'utf8_general_ci';
$db['seconddb']['swap_pre'] = '';
$db['seconddb']['autoinit'] = TRUE;
$db['seconddb']['stricton'] = FALSE;

//second db search

$db['thirddb']['hostname'] = 'localhost';
$db['thirddb']['username'] = 'db_live_2';
$db['thirddb']['password'] = 'd3f9cf1290666e5s';
$db['thirddb']['database'] = 'standard_digital_world_archives_1';
$db['thirddb']['dbdriver'] = 'mysql';
$db['thirddb']['dbprefix'] = '';
$db['thirddb']['pconnect'] = FALSE;
$db['thirddb']['db_debug'] = FALSE;
$db['thirddb']['cache_on'] = FALSE;
$db['thirddb']['cachedir'] = '';
$db['thirddb']['char_set'] = 'utf8';
$db['thirddb']['dbcollat'] = 'utf8_general_ci';
$db['thirddb']['swap_pre'] = '';
$db['thirddb']['autoinit'] = TRUE;
$db['thirddb']['stricton'] = FALSE;

$db['SDE']['hostname'] = 'localhost';
$db['SDE']['username'] = 'db_live_2';
$db['SDE']['password'] = 'd3f9cf1290666e5s';
$db['SDE']['database'] = 'sde_new';
$db['SDE']['dbdriver'] = 'mysql';
$db['SDE']['dbprefix'] = '';
$db['SDE']['pconnect'] = FALSE;
$db['SDE']['db_debug'] = FALSE;
$db['SDE']['cache_on'] = FALSE;
$db['SDE']['cachedir'] = '';
$db['SDE']['char_set'] = 'utf8';
$db['SDE']['dbcollat'] = 'utf8_general_ci';
$db['SDE']['swap_pre'] = '';
$db['SDE']['autoinit'] = FALSE;
$db['SDE']['stricton'] = FALSE;

//classifieds
$db['CLASSIFIEDS']['hostname'] = 'localhost';
$db['CLASSIFIEDS']['username'] = 'db_live_2';
$db['CLASSIFIEDS']['password'] = 'd3f9cf1290666e5s';
$db['CLASSIFIEDS']['database'] = 'classifieds';
$db['CLASSIFIEDS']['dbdriver'] = 'mysql';
$db['CLASSIFIEDS']['dbprefix'] = '';
$db['CLASSIFIEDS']['pconnect'] = FALSE;
$db['CLASSIFIEDS']['db_debug'] = FALSE;
$db['CLASSIFIEDS']['cache_on'] = FALSE;
$db['CLASSIFIEDS']['cachedir'] = '';
$db['CLASSIFIEDS']['char_set'] = 'utf8';
$db['CLASSIFIEDS']['dbcollat'] = 'utf8_general_ci';
$db['CLASSIFIEDS']['swap_pre'] = '';
$db['CLASSIFIEDS']['autoinit'] = FALSE;
$db['CLASSIFIEDS']['stricton'] = FALSE;
/* End of file database.php */
/* Location: ./application/config/database.php */