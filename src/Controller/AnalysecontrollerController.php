<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AnalysecontrollerController extends AbstractController
{
    #[Route('/analyse', name: 'app_analyse')]
    public function index(): Response
    {
        return $this->render('analysecontroller/index.html.twig', [
            'controller_name' => 'AnalysecontrollerController',
        ]);
    }
}
