<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class FormateurController extends AbstractController
{
    #[Route('/formateur', name: 'app_formateur')]
    public function index(): Response
    {
        return $this->render('formateur/index.html.twig', [
            'title' => 'ACCEUIL Formateur'
        ]);
    }
}
