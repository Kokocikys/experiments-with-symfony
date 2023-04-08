<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AboutController extends AbstractController
{
    #[Route('/about')]
    public function about(): Response
    {
        $pageTitle = 'About';
        $content = 'The author of this page is Kokocikys.';

        return $this->render('/about/about.html.twig', [
            'pageTitle' => $pageTitle,
            'content'   => $content,
        ]);
    }
}