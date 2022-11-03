<?php

class  Ingreso {
    
    private $usuario;
    private $db;

    public function __construct() {
        $this->usuario = array();
        $this->db = new PDO('mysql:host=localhost;dbname=ingreso', "root", "");
    }

    private function setNames() {
        return $this->db->query("SET NAMES 'utf8'");
    }

    public function getIngreso() {

        self::setNames();
        $sql = "SELECT id, usuario, pass FROM usuario";
        foreach ($this->db->query($sql) as $res) {
            $this->usuario[] = $res;
        }
        return $this->usuario;
    }

    public function setIngreso($usuario, $pass) {

        self::setNames();
        $sql = "INSERT INTO usuario(usuario, pass) VALUES ('" . $usuario . "', '" . $pass . "')";
        $result = $this->db->query($sql);

        if ($result) {
            return true;
        } else {
            return false;
        }
    }
}
?>