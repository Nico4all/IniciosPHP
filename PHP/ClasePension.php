<?php
class Pension
{
    private $nombre;
    private $ingresoBase;
    private $montoCotizacion;
    private $cuentaAhorroPensional;
    private $seguroInvalidezMuerte;
    private $comisionAdministracion;
    private $garantiaPensionMinima;

    public function __construct($nombre, $ingresoBase)
    {
        $this->nombre = $nombre;
        $this->ingresoBase = $ingresoBase;
        $this->montoCotizacion = 0;
        $this->cuentaAhorroPensional = 0;
        $this->seguroInvalidezMuerte = 0;
        $this->comisionAdministracion = 0;
        $this->garantiaPensionMinima = 0;
    }

    public function calcularPension()
    {
        $this->montoCotizacion = $this->ingresoBase * 0.15;
        $this->cuentaAhorroPensional = $this->montoCotizacion * 0.70;
        $this->seguroInvalidezMuerte = $this->montoCotizacion * 0.1067;
        $this->comisionAdministracion = $this->montoCotizacion * 0.0933;
        $this->garantiaPensionMinima = $this->montoCotizacion * 0.10;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function getIngresoBase()
    {
        return $this->ingresoBase;
    }

    public function getMontoCotizacion()
    {
        return $this->montoCotizacion;
    }

    public function getCuentaAhorroPensional()
    {
        return $this->cuentaAhorroPensional;
    }

    public function getSeguroInvalidezMuerte()
    {
        return $this->seguroInvalidezMuerte;
    }

    public function getComisionAdministracion()
    {
        return $this->comisionAdministracion;
    }

    public function getGarantiaPensionMinima()
    {
        return $this->garantiaPensionMinima;
    }
}
?>