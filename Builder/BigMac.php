<?php

class BigMac
{
    private array $ingredients = [];
    public function setIngredient(string $ingredient): self
    {
        $this->ingredients[] = $ingredient;

        return $this;
    }

    public function getIngredients(): array
    {
        return $this->ingredients;
    }
}