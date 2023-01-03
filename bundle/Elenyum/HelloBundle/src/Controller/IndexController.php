<?php

namespace Elenyum\HelloBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/elenyum/hello/index', name: 'elenyum_hello_index')]
class IndexController extends AbstractController
{
    public function __invoke(): Response
    {
        return $this->json([
            'success' => true,
            'message' => 'Bundle Elenyum hello is working'
        ]);
    }
}