<?php

namespace App\Controller;
use Symfony\Component\Security\Core\Security;

use Rompetomp\InertiaBundle\Service\InertiaInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Serializer\SerializerInterface;

use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;
use Symfony\Component\HttpFoundation\JsonResponse;


class HomepageController extends AbstractController
{
    /**
     * @Route("/homepage", name="homepage")
     * @param Security $security
     * @param InertiaInterface $inertia
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function index(Security $security, InertiaInterface $inertia) {
        $encoders = [new JsonEncoder()];
        $normalizers = [ new ObjectNormalizer()];
        $serializer = new Serializer($normalizers, $encoders);

        return $inertia->render(
            'homepage',
            ['pagePropety' => 'homepage8888']
        );
    }
}