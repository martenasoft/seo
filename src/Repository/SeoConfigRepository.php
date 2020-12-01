<?php

namespace MartenaSoft\Seo\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use MartenaSoft\Seo\Entity\SeoConfig;

class SeoConfigRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, SeoConfig::class);
    }

}