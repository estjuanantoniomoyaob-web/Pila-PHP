<?php
require_once 'Estudiante.php';

class Pila {
    private $capacidad = 50;

    public function __construct() {
        if (!isset($_SESSION['pila_estudiantes'])) {
            $_SESSION['pila_estudiantes'] = array();
        }
    }

    public function apilar(Estudiante $estudiante) {
        if (count($_SESSION['pila_estudiantes']) >= $this->capacidad) {
            return "La pila está llena.";
        }
        
        array_push($_SESSION['pila_estudiantes'], $estudiante);
        return "Estudiante insertado correctamente: " . $estudiante->nombres . " " . $estudiante->apellidos;
    }

    public function desapilar() {
        if ($this->esVacia()) {
            return "La pila está vacía.";
        }
        
        $eliminado = array_pop($_SESSION['pila_estudiantes']);
        return "Estudiante eliminado: " . $eliminado->nombres . " " . $eliminado->apellidos;
    }

    public function obtenerPila() {
        
        return array_reverse($_SESSION['pila_estudiantes']);
    }

    public function obtenerTamanyo() {
        return count($_SESSION['pila_estudiantes']);
    }

    public function esVacia() {
        return empty($_SESSION['pila_estudiantes']);
    }
}
?>
