<?php

namespace MartenaSoft\Seo\Repository;

use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;
use MartenaSoft\Content\Repository\AbstractContentRepository;
use MartenaSoft\Seo\Entity\Seo;

class SeoRepository extends AbstractContentRepository
{
    public static function getAlias(): string
    {
        return 'seo';
    }


    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Seo::class);
    }
}
