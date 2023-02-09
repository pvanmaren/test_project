<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class luckyController extends AbstractController
{
    /**
     * @throws \Exception
     */
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);
        return $this->render('bezoeker/lucky.html.twig',['number'=>$number]);


    }
}