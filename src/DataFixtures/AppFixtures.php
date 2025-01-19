<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Dish;
use App\Entity\Ingredient;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;
use Symfony\Component\String\Slugger\SluggerInterface;

class AppFixtures extends Fixture
{
    public function __construct(
        private SluggerInterface $slugger
    )
    {
        
    }
    public function load(ObjectManager $manager): void
    {
        $faker = Factory::create('fr_FR');
        $faker->addProvider(new \FakerRestaurant\Provider\fr_FR\Restaurant($faker)); 

        //?on cré 10 catégories
        $categories = ['Entrées', 'Viandes', 'Poissons', 'Desserts','Fromages', 'Boissons'];
        foreach ($categories as $category) {
            $cat = new Category();
            $cat->setName($category);
            $slug = strtolower($this->slugger->slug($cat->getName()));
            $cat->setSlug($slug);
            $manager->persist($cat);
        }
        $manager->flush();

        //?on cré 5 plats par categorie
        $categories = $manager->getRepository(Category::class)->findAll();
        foreach ($categories as $category) {
            for ($i = 0; $i < 5; $i++) {
                $dish = new Dish();
                $dish->setName($faker->foodName());
                $dish->setPriceExcludingTax($faker->numberBetween(200,2000));
                $dish->setNumberOfPeople($faker->randomDigitNot(0));
                $dish->setSpecialInformation($faker->sentence());
                $dish->setDescription($faker->sentence());
                $dish->setCategory($category);
                $manager->persist($dish);
            }
        }
        $manager->flush();

        //?pour chaque plat on cré une liste d'ingREDIENT
        $dishes = $manager->getRepository(Dish::class)->findAll();
        foreach ($dishes as $dish) {
            for ($i = 0; $i < 5; $i++) {
                $ingredient = new Ingredient();
                $ingredient->setName($faker->vegetableName());
                $ingredient->addDish($dish);
                $manager->persist($ingredient);
            }
        }
        $manager->flush();
    }
}
