<?php

class Nomina
{
    private $nombre;
    private $horasNormales;
    private $horasExtrasDiurnas;
    private $horasExtrasNocturnas;
    private $valorHora;
    private $sueldoBruto;
    private $sueldoNeto;

    public function __construct($nombre, $horasNormales, $horasExtrasDiurnas, $horasExtrasNocturnas, $valorHora)
    {
        $this->nombre = $nombre;
        $this->horasNormales = $horasNormales;
        $this->horasExtrasDiurnas = $horasExtrasDiurnas;
        $this->horasExtrasNocturnas = $horasExtrasNocturnas;
        $this->valorHora = $valorHora;
        $this->sueldoBruto = 0;
        $this->sueldoNeto = 0;
    }

    public function calcularSueldo()
    {
        $valorHoraExtraDiurna = $this->valorHora * 1.25;
        $valorHoraExtraNocturna = $this->valorHora * 1.75;

        $valorHorasNormales = $this->horasNormales * $this->valorHora;
        $valorHorasExtrasDiurnas = $this->horasExtrasDiurnas * $valorHoraExtraDiurna;
        $valorHorasExtrasNocturnas = $this->horasExtrasNocturnas * $valorHoraExtraNocturna;

        $this->sueldoBruto = $valorHorasNormales + $valorHorasExtrasDiurnas + $valorHorasExtrasNocturnas;
        $descuentoHonorarios = $this->sueldoBruto * 0.10;
        $this->sueldoNeto = $this->sueldoBruto - $descuentoHonorarios;
    }

    public function getSueldoBruto()
    {
        return $this->sueldoBruto;
    }

    public function getSueldoNeto()
    {
        return $this->sueldoNeto;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getValorHora()
    {
        return $this->valorHora;
    }

    public function getHorasNormales()
    {
        return $this->horasNormales;
    }

    public function getHorasExtrasDiurnas()
    {
        return $this->horasExtrasDiurnas;
    }

    public function getHorasExtrasNocturnas()
    {
        return $this->horasExtrasNocturnas;
    }
}