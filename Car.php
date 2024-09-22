<?php

class Car
{
    private string $model;
    private string $color;

    public function __construct(string $model, string $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    /**
     * Получить модель авто
     *
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * Получить цвет авто
     *
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
}