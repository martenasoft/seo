<?php

namespace MartenaSoft\Seo\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SeoController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('@MartenaSoftSeo/seo/index.html.twig');
    }
}