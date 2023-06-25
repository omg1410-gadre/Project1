<?php
# connection oriented
class db{
    public function connect(){
        $connectionResource=mysqli_connect("172.31.30.93","admin","rootroot");
        mysqli_select_db($connectionResource,"userdb");
        if(!$connectionResource)
        {
            die("connection failed".mysqli_connect_error());
        }
        else
        echo "Connection Successful";
        return $connectionResource;
    }
    function __constructor(){
    }
}

?>
