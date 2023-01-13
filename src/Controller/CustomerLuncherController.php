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
    #[Route('/about', name: 'app_customer_luncher_about')]
    public function about(): Response
    {
        return $this->render('customer_launcher/About.html.twig');
    }
    #[Route('/services', name: 'app_customer_luncher_service')]
    public function service(): Response
    {
        return $this->render('customer_launcher/service.html.twig');
    }
    #[Route('/contact', name: 'app_customer_luncher_contact')]
    public function contact(): Response
    {
        return $this->render('customer_launcher/Contact.html.twig');
    }
}
