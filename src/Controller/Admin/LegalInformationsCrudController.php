<?php

namespace App\Controller\Admin;

use App\Entity\LegalInformations;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class LegalInformationsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return LegalInformations::class;
    }

    /*
    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id'),
            TextField::new('title'),
            TextEditorField::new('description'),
        ];
    }
    */

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Mentions légales')
            ->setPageTitle('new', 'Ajouter des mentions légales')
            ->setPageTitle('edit', 'Modifier des mentions légales')
            ->setPageTitle('detail', 'Détails des mentions légales');
    }
}
