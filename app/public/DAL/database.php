<?php

define ( 'DB_HOST', 'mysql' );
define ( 'DB_USER', 'root' );
define ( 'DB_PASSWORD', 'secret123' );
define ( 'DB_DB', 'developmentdb' );

class database extends PDO {
    private $conn;
    private static $database; //The single instance



    public static function getInstance() {

        if(!self::$database) {

            self::$database = new database();

        }

        return self::$database;

    }

    // Constructor
    private function __construct() {








        $this->conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD)  or die ("<br/>Could not connect to MySQL server");
        mysqli_select_db($this->conn, DB_DB) or die ("<br/>Could not select the indicated database");

    }

    //Get mySqli connection
    public function getConnection() {

        return $this->conn;

    }
}

// $root = realpath($_SERVER["DOCUMENT_ROOT"]);

// require_once ($root . "/config/mysqliConfig.php");

// class database {
//     private mysqli $conn;
//     private static $database;

//     private function __construct(){
//         $this->conn = $this->dbConnect();
//     }


//     //creates an object instance once and it will resue it for all other requests
//     public static function getInstance() : database
//     {
//         if(is_null(self::$database)){
//             self::$database = new database();
//         }

//         return self::$database;
//     }

//     // Get connection to the database
//     public function getConnection() : mysqli {
//         return $this->conn;
//     }

//     // Close connection
//     public function closeConnection() : void {
//         $this->conn->close();
//     }

    

//     // Create connection to the database, throw error if connection cannot be made
//     private function dbConnect() : mysqli {
//         $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_DB);
        
//         if(!$conn){
//             throw new Exception("Could not make a connection to the database");
//         }

//         return $conn;
//     }
// }