<?php

namespace Hillel\Model;

class PizzaCalculator
{
    protected array $basket = [];


    public function getBasket(): array
    {
        return $this->basket;
    }

    public function add(PizzaInterface $pizza): void
    {
        $this->basket[] = $pizza;
    }

    public function ingredients(): string
    {
        $ingredients = [];

        foreach ($this->getBasket() as $pizza) {
            foreach ($pizza->getIngredients() as $ingredient) {
                if (!in_array($ingredient, $ingredients)) {
                    $ingredients[] = $ingredient;
                }
            }
        }
        return implode(', ', $ingredients);
    }

    public function price(): float
    {
        $price = 0;

        foreach ($this->getBasket() as $pizza) {
          $price += $pizza->getCost();
        }

        return $price;
    }
}