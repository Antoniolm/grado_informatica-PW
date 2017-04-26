<?php
class DateBaseAccess {

    private $localhost;
    private $user;
    private $password;
    private $database;
    private $connection = false;

    public function DateBaseAccess($direction, $user, $passwrd, $dB) {
        $this->localhost = $direction;
        $this->user = $user;
        $this->password = $passwrd;
        $this->database = $dB;
    }

    public function createConnection(){
        $this->connection = mysqli_connect($this->localhost, $this->user, $this->password) or die('You can not connect in the server->'.$this->localhost);
        mysqli_select_db($this->connection, $this->database) or die('You can not access in the database ->'.$this->database);
    }


    public function CloseConnection() {
        if ($this->connection != false)
            mysqli_close($this->connection);
        $this->connection = false;
    }

    public function getConnection() {
        if ($this->connection == false){
            $this->createConnection();
        }
        return $this->connection;
    }


    public function getLocalhost() {
        return $this->localhost;
    }

    public function getUser() {
        return $this->user;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getDataBase() {
        return $this->password;
    }

    public function setLocalhost($direction) {
        $this->localhost = $direction;
    }

    public function setUser($user) {
        $this->user = $user;
    }

    public function setPassword($pass) {
        $this->password = $pass;
    }
    
    public function setDataBase($db) {    
        $this->database = $dB;
    }

    public function Query($cadena) {
        return mysqli_query($this->getConnection(), $cadena);
    }

}?>