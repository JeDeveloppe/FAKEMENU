<?php

namespace App\Components;

use App\Entity\Dish;
use App\Repository\DishRepository;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('dish')]
class DishComponent
{
    public int $id;

    public function __construct(
        private DishRepository $dishRepository
    )
    {}

    public function getDish(): Dish
    {
        return $this->dishRepository->find($this->id);
    }
}