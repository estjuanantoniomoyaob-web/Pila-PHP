<?php
class Estudiante {
    public $codigo;
    public $nombres;
    public $apellidos;
    public $email;
    public $fechaNacimiento;
    public $genero;

    public function __construct($codigo, $nombres, $apellidos, $email, $fechaNacimiento, $genero) {
        $this->codigo = $codigo;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
        $this->email = $email;
        $this->fechaNacimiento = $fechaNacimiento;
        $this->genero = $genero;
    }
}
?>