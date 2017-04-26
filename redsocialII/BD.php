<?php
class BD {

    private $localhost;
    private $user;
    private $pass;
    private $database;
    private $conexion = false;

    public function BD($direccion, $usuario, $contrasenia, $basedatos) {
        $this->localhost = $direccion;
        $this->user = $usuario;
        $this->pass = $contrasenia;
        $this->database = $basedatos;
    }

    public function GetMyConnection() {
        if ($this->conexion)
            return $this->conexion;
        $this->conexion = mysqli_connect($this->localhost, $this->user, $this->pass) or die('Could not connect to server.');
        mysqli_select_db($this->conexion, $this->database) or die('Could not select database.');
        return $this->conexion;
    }

    public function Close() {
        if ($this->conexion != false)
            mysqli_close($this->conexion);
        $this->conexion = false;
    }

    public function Query($cadena) {
        return $res = mysqli_query($this->GetMyConnection(), $cadena);
    }

}?>