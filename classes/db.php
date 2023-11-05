<?php
    // require_once('../config/serverconfig.php');
    class DBAccess {
        public $conn;
        public function __construct($host,$user,$password,$name){
            $this ->conn = new mysqli($host,$user,$password,$name);
            if ($this ->conn -> connect_error) die($this ->conn -> connect_error);
        }
        
        public function execQuery($query){
            $res = $this ->conn -> query($query);
            if (!$res) {
                return $this ->conn ->error;
            } else {
                return $res;
            }
            
        }
    }

    $liveDb = new DBAccess($dbhost,$dbuser,$dbpassword2,$dbname);
    // $liveDb ->execQuery('CREATE TABLE users (id INT NOT NULL AUTO_INCREMENT PRIMARY KEY, email VARCHAR(128) NOT NULL, f_name VARCHAR(300) NOT NULL, password VARCHAR(128) NOT NULL) ENGINE myISAM');
?>