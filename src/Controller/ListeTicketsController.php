<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ListeTicketsController extends AbstractController
{
    #[Route('/liste/tickets', name: 'app_liste_tickets')]
    public function index(): Response
    {
        return $this->render('liste_tickets/tickets.html.twig', [
            'controller_name' => 'ListeTicketsController',
        ]);
    }
}
