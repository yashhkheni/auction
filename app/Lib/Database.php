<?php
namespace App\Lib;

use PDO;
use PDOException;
use ReflectionClass;
use ReflectionException;

    class Database{
        private static $databaseObj;

        private $connection;

        public static function getConnection(): Database {
            if(!self::$databaseObj)
                self::$databaseObj = new self();
            return self::$databaseObj;


        private function __construct(){
            try{
                $this->connection = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME, DB_USER, DB_PASSWORD);
            } catch(PDOException $e){
                die();
            }
            }
        }
        public function sqlQuery(string $sql, $bindVal = null, bool $retStmt = false)
    }

