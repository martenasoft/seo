<?php

namespace MartenaSoft\Seo\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use MartenaSoft\Seo\Repository\SeoRepository;

/**
 * @ORM\Entity(repositoryClass=SeoRepository::class)
 * @UniqueEntity(
 *     fields={"name"}
 * )
 */
class Seo
{

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private ?int $id = null;
    
    /** 
     * @Assert\NotBlank()
     * @@ORM\Column() 
     */
    private ?string $name;
}

