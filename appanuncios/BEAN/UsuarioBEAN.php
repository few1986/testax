<?php


class UsuarioBEAN {
public $idUsuario; 
public $nombre;
public $apellido;
public $correo;
public $cuenta;
public $password;
public $estado;

function getIdUsuario() {
    return $this->idUsuario;
}

function getNombre() {
    return $this->nombre;
}

function getApellido() {
    return $this->apellido;
}

function getCorreo() {
    return $this->correo;
}

function getCuenta() {
    return $this->cuenta;
}

function getPassword() {
    return $this->password;
}

function getEstado() {
    return $this->estado;
}

function setIdUsuario($idUsuario) {
    $this->idUsuario = $idUsuario;
}

function setNombre($nombre) {
    $this->nombre = $nombre;
}

function setApellido($apellido) {
    $this->apellido = $apellido;
}

function setCorreo($correo) {
    $this->correo = $correo;
}

function setCuenta($cuenta) {
    $this->cuenta = $cuenta;
}

function setPassword($password) {
    $this->password = $password;
}

function setEstado($estado) {
    $this->estado = $estado;
}



    
}
?>
