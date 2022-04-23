<?php
namespace src\Data\configration;


use mysqli;

class DataBsaeConnect 
{
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password_dataBase = '';
    protected $database_name = 'nti_ecommerce_task';
    protected $port_number = 3306;

    public function __construct() {
        $connect = new mysqli($this->host , $this->user, $this->password_dataBase , $this->database_name , $this->port_number);
        // Check connection
        if ($connect->connect_error) {
            die("Connection failed: " . $connect->connect_error);
        }
        echo "Connected successfully";
}


}

$test=new DataBsaeConnect;