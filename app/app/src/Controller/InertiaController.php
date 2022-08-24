<?php

namespace App\Controller;

use Rompetomp\InertiaBundle\Service\InertiaInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class InertiaController extends AbstractController
{
    /**
     * @Route("/inertia", name="inertia")
     * @param InertiaInterface $inertia
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(InertiaInterface $inertia)
    {
        return $inertia->render('Inertia', ['pagePropety' => 'inertia']);
    }
}
