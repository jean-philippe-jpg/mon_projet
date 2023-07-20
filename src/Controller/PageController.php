<?php

namespace App\Controller;

use App\Entity\Vehicule;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController
{
    #[Route('/contact', name: 'page_contact')]
    public function contact(): Response
    {
        return $this->render('page/index.html.twig', [
            'controller_name' => 'PageController',

            'title' => 'contact'
        ]);
    }
}
