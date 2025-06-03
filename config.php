<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();
$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'auth-db1682.hstgr.io';
$CFG->dbname    = 'u703666197_lmsdb';
$CFG->dbuser    = 'u703666197_lmsdb';
$CFG->dbpass    = 'F_UW@:%^98UsPc/';
$CFG->prefix    = 'mdl_';
// $CFG->dbtype    = 'mysqli';
// $CFG->dblibrary = 'native';
// $CFG->dbhost    = 'localhost';
// $CFG->dbname    = 'lms_db';
// $CFG->dbuser    = 'root';
// $CFG->dbpass    = '';
// $CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 3306,
  'dbsocket' => '',
  'dbcollation' => 'utf8mb4_unicode_ci',
);

$CFG->wwwroot   = 'https://srv1682-files.hstgr.io/3591f70322edd1e2/files/public_html/lms/';
$CFG->dataroot  = 'https://srv1682-files.hstgr.io/3591f70322edd1e2/files/public_html/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
