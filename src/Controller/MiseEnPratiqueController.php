<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class MiseEnPratiqueController extends AbstractController
{
    #[Route('/miseenpratique', name: 'app_mise_en_pratique')]
    public function index(): Response
    {
        return $this->render('mise_en_pratique/index.html.twig', [
            'controller_name' => 'MiseEnPratiqueController',
        ]);
    }
}
