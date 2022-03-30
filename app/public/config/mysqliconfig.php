<?php
// Database credentials
$useLocalhost = false;
if($useLocalhost) {
    define ( "DB_HOST", "mysql" );
    define ( "DB_USER", "root" );
    define ( "DB_PASSWORD", "secret123" );
    define ( "DB_DB", "developmentdb" );
}