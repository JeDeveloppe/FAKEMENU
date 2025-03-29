<?php

namespace App\Components;

use App\Repository\CategoryRepository;
use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('all_categories')]
class AllCategoriesComponent
{
    public function __construct(
        private CategoryRepository $categoryRepository
    ) {
    }

    public function getAllCategories(): array
    {
        return $this->categoryRepository->findAll();
    }
    
}