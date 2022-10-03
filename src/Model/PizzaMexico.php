<?php

namespace Hillel\Model;

class PizzaMexico implements PizzaInterface
{
    protected string $title = 'Піца Мексиканська';
    protected float $cost = 175;
    protected array $ingredients = [
        ' Вершково-сирний соус', 'куряче стегно', 'сальса з ананасу та кукурудзи', 'Гуакамолє, чіпси Начос', 'зелений перець чілі', 'сир Моцарелла', 'кінза'
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