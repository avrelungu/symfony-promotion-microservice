<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProductController extends AbstractController
{
    #[Route(path: '/products/{id}/lowest-price', name: 'lowest-price', methods: ['POST'])]
    public function lowestPrice(int $id): Response
    {
        dd($id);
    }

    #[Route(path: '/products/{id}/promotions', name: 'promotions' , methods: ['GET'])]
    public function promotions(): Response
    {

    }
}