<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CategorieController extends AbstractController
{
    /**
     * @Route("/categorie/show/{sms?}", name="categorie_show",methods={"POST","GET"})
     */
    public function index($sms): Response
    {
        $x=10;
        return $this->render('categorie/index.html.twig', [
            'x1' => $x,
            'sms'=>$sms
        ]);
    }
}
