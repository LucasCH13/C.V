<?php

namespace App\Controller\Admin;

use App\Entity\Projet;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProjetCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Projet::class;
    }

    
    public function configureFields(string $pageName): iterable
    {
       yield TextField::new('nom');
       yield ChoiceField::new('competence')
       ->allowMultipleChoices()
       ->setChoices([
        'Symfony' => 'Symfony',
        'E-Commerce' => 'E-Commerce',
        'Espace d\'administration EasyAdminBundle' => 'Easyadmin',
        'Création et Intégration de maquette Figma' => 'Maquette Figma',
        'Mise à jour et intégration de contenu' => 'Intégration de contenu',
        'Résolution de bug' => 'Résolution de bug',
        'Wordpress' => 'Wordpress',
        'Référencement Web' => 'Référencement web',
        'Test de site (Lighthouse, W3C)' => 'Test de site',
       ]);
    }
   
}
