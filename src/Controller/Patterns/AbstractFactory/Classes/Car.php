<?php

namespace App\Controller\Patterns\AbstractFactory\Classes;

use App\Controller\Patterns\AbstractFactory\AbstractFactoryPatternController;

abstract class Car
{
    private string $modelName = '';

    private int $prodYear = -1;
    private int $displacement = -1;
    private int $fuelType = -1;
    private string $positionOfSterringWheel;

    public function printSelf()
    {
        AbstractFactoryPatternController::$output.=
        "Vendor:".substr(strrchr(get_class($this), "\\"), 1).", Model name:".$this->modelName.", Production year: ".$this->prodYear.", Engine displacement:".$this->displacement.", Fuel type:".$this->getFuelTypeRepresentaion().", <b>Position of sterring wheel: ".$this->getPositionOfSterringWheel()."</b><br>";
    }

    protected function getFuelTypeRepresentaion(): string
    {
        return $this->fuelType == 0 ? 'gasoline' : 'diesel';
    }
    
    /**
     * Get the value of fuelType
     */ 
    public function getFuelType()
    {
        return $this->fuelType;
    }

    /**
     * Set the value of fuelType
     *
     * @return  self
     */ 
    public function setFuelType($fuelType)
    {
        $this->fuelType = $fuelType;

        return $this;
    }

    /**
     * Get the value of displacement
     */ 
    public function getDisplacement()
    {
        return $this->displacement;
    }

    /**
     * Set the value of displacement
     *
     * @return  self
     */ 
    public function setDisplacement($displacement)
    {
        $this->displacement = $displacement;

        return $this;
    }

    /**
     * Get the value of prodYear
     */ 
    public function getProdYear()
    {
        return $this->prodYear;
    }

    /**
     * Set the value of prodYear
     *
     * @return  self
     */ 
    public function setProdYear($prodYear)
    {
        $this->prodYear = $prodYear;

        return $this;
    }

    /**
     * Get the value of modelName
     */ 
    public function getModelName()
    {
        return $this->modelName;
    }

    /**
     * Set the value of modelName
     *
     * @return  self
     */ 
    public function setModelName($modelName)
    {
        $this->modelName = $modelName;

        return $this;
    }    

    /**
     * Get the value of positionOfSterringWheel
     */ 
    public function getPositionOfSterringWheel()
    {
        return $this->positionOfSterringWheel;
    }

    /**
     * Set the value of positionOfSterringWheel
     *
     * @return  self
     */ 
    public function setPositionOfSterringWheel($positionOfSterringWheel)
    {
        $this->positionOfSterringWheel = $positionOfSterringWheel;

        return $this;
    }
}