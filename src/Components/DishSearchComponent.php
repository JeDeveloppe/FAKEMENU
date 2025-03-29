<?php

namespace App\Components;

use App\Repository\DishRepository;
use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\DefaultActionTrait;
use Symfony\UX\LiveComponent\Attribute\LiveProp;

#[AsLiveComponent('dish_search')]
class DishSearchComponent
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public string $query = '';

    public function __construct(
        private DishRepository $dishRepository
    ) {
    }

    public function getDishes(): array
    {
        return $this->dishRepository->findByQuery($this->query);
    }
}