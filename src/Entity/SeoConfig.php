<?php

namespace MartenaSoft\Seo\Entity;

use  Doctrine\ORM\Mapping as ORM;
use MartenaSoft\Common\Library\CommonValues;
use Symfony\Component\Validator\Constraint as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use MartenaSoft\Seo\Repository\SeoConfigRepository;

/**
 * @ORM\Entity(repositoryClass="SeoConfigRepository")
 * @UniqueEntity (
 *     fields={"name"}
 * )
 */
class SeoConfig
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */

    private ?int $id = null;

}