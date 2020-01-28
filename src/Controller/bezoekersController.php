<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class bezoekersController extends AbstractController
{
    /**
     * @Route("/home", name="homepage")
     */
    public function homepage()
    {
        return $this->render('bezoeker/home.html.twig');
    }

    /**
     * @Route("/contact", name="contact")
     */
    public function contact()
    {
        return $this->render('bezoeker/contact.html.twig');
    }

    /**
     * @Route ("/inschrijven", name="inschrijven")
     */
    public function inschrijven()
    {
        return $this->render('bezoeker/inschrijven.html.twig', [
            ]
        );
    }

}