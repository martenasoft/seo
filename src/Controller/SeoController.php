<?php

namespace MartenaSoft\Seo\Controller;

use MartenaSoft\Seo\Entity\Seo;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class SeoController extends AbstractController
{
    public function tags(?Seo $seo): Response
    {
        if (empty($seo)) {
            $seo = new Seo();
        }
        return $this->render('@MartenaSoftSeo/tags/tags.html.twig', [
            'entity' => $seo
        ]);
    }
}