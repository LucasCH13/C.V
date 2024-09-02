<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Repository\ProjetRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Attribute\Route;

class PublicController extends AbstractController
{

    #[Route('/', name: 'app_accueil')]
    public function accueil(Request $request, EntityManagerInterface $em, ProjetRepository $pjr): Response
    {
        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $em->persist($contact);
            $em->flush();
        }
        // dump($pjr->findAll());
        return $this->render('accueil.html.twig', [
            'form' => $form,
            'projetName' => $pjr->findbyName(),
            'projetCompetence' => $pjr->findByCompetences(),
        ]);
    }
}
