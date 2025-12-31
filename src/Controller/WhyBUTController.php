<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class WhyBUTController extends AbstractController
{
    #[Route('/pourquoi-but', name: 'app_why_but', methods: ['GET'])]
    public function index(): Response
    {
        return $this->render('why_but/index.html.twig');
    }
}
