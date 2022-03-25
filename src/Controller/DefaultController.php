<?php

namespace App\Controller;

use App\Form\Type\TestType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route]
    public function index(Request $request): Response
    {
        $form = $this->createForm(TestType::class);
        $form->handleRequest($request);

        return $this->render('index.html.twig', [
            'form' => $form,
            'view' => $form->createView(),
        ]);
    }
}
