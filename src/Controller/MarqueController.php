<?php

namespace App\Controller;

use App\Repository\MarqueRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MarqueController extends AbstractController
{
    #[Route('/marque', name: 'marque_index', methods: ['GET'])]
    public function index(MarqueRepository $repository): Response
    {

        return $this->render('marque/index.html.twig', [
            'controller_name' => 'MarqueController',
            'marques' => $repository -> findAll(),
        ]);
    }


     #[Route('/marque/{id}', name: 'marque_show', requirements: ['id'=>'\d+'], methods: ['GET'])]
    public function show(): Response
    {
        dd(_METHOD_);
    }

    #[Route('/marque/create', name: 'marque_create', priority: 0, methods:['GET','POST'])]
    public function create(): Response
    {
        dd(_METHOD_);
    }

    #[Route('/marque/{id}/edit', name: 'marque_edit', methods:['GET'],requirements: ['id'=>'\d+'])]
    public function update(): Response
    {
        dd(_METHOD_);
    }

    #[Route('/marque/{id}/delete', name: 'marque_delete', methods:['GET'],requirements: ['id'=>'\d+'])]
    public function delete(): Response
    {
        dd(_METHOD_);
    }


}