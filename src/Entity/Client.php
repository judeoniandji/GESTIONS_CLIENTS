<?php
// src/Entity/Client.php
namespace App\Entity;

use App\Repository\ClientRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientRepository::class)
 */
class Client
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nom;  // Changement ici

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=20)
     */
    private $telephone;  // Changement ici

    // Getters and Setters

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string  // Changement ici
    {
        return $this->nom;
    }

    public function setNom(string $nom): self  // Changement ici
    {
        $this->nom = $nom;
        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;
        return $this;
    }

    public function getTelephone(): ?string  // Changement ici
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self  // Changement ici
    {
        $this->telephone = $telephone;
        return $this;
    }
}
