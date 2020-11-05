<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CompteRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=CompteRepository::class)
 */
class Compte
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $NumCompte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNumCompte(): ?string
    {
        return $this->NumCompte;
    }

    public function setNumCompte(string $NumCompte): self
    {
        $this->NumCompte = $NumCompte;

        return $this;
    }


 /**
     * @ORM\Column(type="string", length=25)
     */
    private $Solde;

    public function getSolde(): ?string
    {
        return $this->Solde;
    }

    public function setSolde(string $Solde): self
    {
        $this->Solde = $Solde;

        return $this;
    }
}
?>