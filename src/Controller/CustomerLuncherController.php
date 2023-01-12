<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CustomerLuncherController extends AbstractController
{
    #[Route('/', name: 'app_customer_luncher')]
    public function index(): Response
    {
        return $this->render('customer_launcher/index.html.twig');
    }
}
