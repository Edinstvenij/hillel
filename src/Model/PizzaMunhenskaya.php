<?php

namespace Hillel\Model;

class PizzaMunhenskaya implements PizzaInterface
{
    protected string $title = 'Піца Мюнхенська';
    protected float $cost = 285;
    protected array $ingredients = [
        'з мюнхенськими і баварськими ковбасками', 'пепероні', 'томатами черрі', 'цибулею', 'солоними огірками', 'гострим перцем чилі', 'сиром моцарелла і емменталь та соус пілатті'
    ];


    public function getTitle(): string
    {
        return $this->title;
    }

    public function getCost(): float
    {
        return $this->cost;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }
}