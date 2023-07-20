<?php

namespace App\Controller;

use App\Repository\VehiculeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class VehiculesController extends AbstractController
{
    #[Route('/vehicules', name: 'vehicules_index', methods: ['GET'])]
    public function index(VehiculeRepository $Vehiculerepo): Response
    {
        
        return $this->render('vehicules/index.html.twig', [
            'controller_name' => 'VehiculesController',
            'vehicule' => $Vehiculerepo -> findAll(),
        ]);
    }

    #[Route('/vehicules/{id}/', name: 'vehicules_show', requirements: ['id' => '\d+'], methods: ['GET'])]
    public function show(): Response
    {
        dd(__METHOD__);
    }

    #[Route('/vehicules/create', name: 'vehicules_create', methods: ['POST','GET'])]
    public function create(): Response
    {
        dd(__METHOD__);
    }

   
    #[Route('/vehicules/{id}/edit', name: 'vehicules_update', methods: ['POST','GET'], requirements: ['id' => '\d+'])]
    public function update(): Response
    {
        dd(__METHOD__);
    }

    #[Route('/vehicules/{id}/delete', name: 'vehicules_delete', methods: ['GET'], requirements: ['id' => '\d+'])]
    public function delete(): Response
    {
        dd(__METHOD__);
    }

}
