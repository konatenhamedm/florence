<?php

namespace App\Controller;

use App\Repository\ChambreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="app_default")
     */
    public function index(ChambreRepository $repository): Response
    {

        $data = $repository->findAll();
        return $this->render('_includes/index.html.twig',[
            'data'=>$data
        ]);
    }
}
