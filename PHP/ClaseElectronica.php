<?php
class Electronica
{
    private $resistencias;
    private $voltaje;
    private $resistenciaTotal;
    private $corriente;
    private $potencia;

    public function __construct($resistencias, $voltaje)
    {
        $this->resistencias = $resistencias;
        $this->voltaje = $voltaje;
        $this->resistenciaTotal = 0;
        $this->corriente = 0;
        $this->potencia = 0;
    }

    public function calcularResistenciaTotal()
    {
        $inversoRt = 0;
        foreach ($this->resistencias as $resistencia) {
            $inversoRt += 1 / $resistencia;
        }
        $this->resistenciaTotal = 1 / $inversoRt;
    }

    public function calcularCorriente()
    {
        $this->corriente = $this->voltaje / $this->resistenciaTotal;
    }

    public function calcularPotencia()
    {
        $this->potencia = ($this->voltaje * $this->voltaje) / $this->resistenciaTotal;
    }

    public function getResistenciaTotal()
    {
        return $this->resistenciaTotal;
    }

    public function getCorriente()
    {
        return $this->corriente;
    }

    public function getPotencia()
    {
        return $this->potencia;
    }
}
?>