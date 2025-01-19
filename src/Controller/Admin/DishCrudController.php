<?php

namespace App\Controller\Admin;

use App\Entity\Dish;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IntegerField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class DishCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Dish::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            AssociationField::new('category', 'Catégorie')->onlyOnForms(),
            TextField::new('name', 'Nom du plat'),
            TextEditorField::new('description', 'Description du plat')->onlyOnForms(),
            AssociationField::new('ingredients', 'Ingrédients')->onlyOnForms(),
            IntegerField::new('numberOfPeople', 'Nombre de personne(s)')->setColumns(2),
            MoneyField::new('priceExcludingTax', 'Prix hors taxe / personne')->setStoredAsCents(true)->setCurrency('EUR')->setColumns(2),
            TextField::new('specialInformation', 'Information(s) supplémentaire(s)')->onlyOnForms()->setColumns(10),
        ];
    }


    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Liste des plats')
            ->setPageTitle('new', 'Ajouter un plat')
            ->setPageTitle('edit', 'Modifier un plat')
            ->setPageTitle('detail', 'Détails du plat');
    }
}
