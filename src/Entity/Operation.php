<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\OperationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=OperationRepository::class)
 */
class Operation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $compte_id;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $montant;

    /**
     * @ORM\Column(type="string", length=25)
     */
    private $date_operation;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompteId(): ?int
    {
        return $this->compte_id;
    }

    public function setCompteId(int $compte_id): self
    {
        $this->compte_id = $compte_id;

        return $this;
    }

    public function getMontant(): ?string
    {
        return $this->montant;
    }

    public function setMontant(string $montant): self
    {
        $this->montant = $montant;

        return $this;
    }

    public function getDateOperation(): ?string
    {
        return $this->date_operation;
    }

    public function setDateOperation(string $date_operation): self
    {
        $this->date_operation = $date_operation;

        return $this;
    }
}
