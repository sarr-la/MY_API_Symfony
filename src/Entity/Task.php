<?php

namespace App\Entity;

use App\Repository\TaskRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TaskRepository::class)
 */
class Task
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
    private $Compte;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $solde;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $Operation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompte(): ?string
    {
        return $this->Compte;
    }

    public function setCompte(string $Compte): self
    {
        $this->Compte = $Compte;

        return $this;
    }

    public function getSolde(): ?string
    {
        return $this->solde;
    }

    public function setSolde(string $solde): self
    {
        $this->solde = $solde;

        return $this;
    }

    public function getOperation(): ?string
    {
        return $this->Operation;
    }

    public function setOperation(?string $Operation): self
    {
        $this->Operation = $Operation;

        return $this;
    }
}
