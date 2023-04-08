<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{
    public function greetings(): Response
    {
        $pageTitle = 'Greetings!';
        $content = 'Hi, Kokocikys!';

        return $this->render('/main.html.twig', [
            'pageTitle' => $pageTitle,
            'content'   => $content,
        ]);
    }
}