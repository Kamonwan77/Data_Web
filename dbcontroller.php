<?php
class DBController {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "registration_system";
    private $co2;

    function __construct(){
        $this->co2 = $this->connectDB();
    }

    function connectDB() {
        $co2 = mysqli_connect($this->host,$this->user,$this->password,$this->database);
        return $co2;

    }
    function runQuery($query){
        $result = mysqli_queryz($this->co2,$query)){
            $resultset[] = $row;
        }
        if(!emply($resultset))
            return $result;
    }

    function numRows($query) {
        $result = mysqli_query($this->co2,$query);
        $rowcount = mysqli_num_rows($result);
        return $rowcount;
    }

}
?>