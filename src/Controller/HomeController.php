<?php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    #[Route('/')]
    public function number() : Response
    {
	return new Response(rand(0,100));
     }
}