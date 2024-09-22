<?php

namespace devices;

class TV
{
    private $diagonal;
    private $model;
    private $brand;

    public const TV_DIAGONAL_SMALL = 16;
    public const TV_DIAGONAL_MEDIUM = 41;
    public const TV_DIAGONAL_BIG = 65;

    public function __construct($diagonal, $model, $brand)
    {
        $this->diagonal = $diagonal;
        $this->model = $model;
        $this->brand = $brand;
    }

    public function getDiagonal() {
        return $this->diagonal;
    }

    public function getModel() {
        return $this->model;
    }

    public function getBrand() {
        return $this->brand;
    }
}