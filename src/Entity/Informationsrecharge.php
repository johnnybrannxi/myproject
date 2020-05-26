<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use DateTimeInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InformationsrechargeRepository")
 */
class Informationsrecharge
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typerecharge;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Positive;
     * @Assert\Length(
     *      min = 2,
     *      max = 3
     * )
     */
    private $montantrecharge;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 16,
     *      max = 16
     * )
     */
    private $numerocarte;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 50
     * )
     */
    private $titulairecarte;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Positive;
     * @Assert\Length(
     *      min = 3,
     *      max = 3
     * )
     */
    private $cvv;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateexpiration;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 50
     * )
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 8,
     *      max = 14
     * )
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 5,
     *      max = 7
     * )
     */
    private $expirationcarte;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTyperecharge(): ?string
    {
        return $this->typerecharge;
    }

    public function setTyperecharge(string $typerecharge): self
    {
        $this->typerecharge = $typerecharge;

        return $this;
    }

    public function getMontantrecharge(): ?int
    {
        return $this->montantrecharge;
    }

    public function setMontantrecharge(int $montantrecharge): self
    {
        $this->montantrecharge = $montantrecharge;

        return $this;
    }

    public function getNumerocarte(): ?string
    {
        return $this->numerocarte;
    }

    public function setNumerocarte(string $numerocarte): self
    {
        $this->numerocarte = $numerocarte;

        return $this;
    }

    public function getTitulairecarte(): ?string
    {
        return $this->titulairecarte;
    }

    public function setTitulairecarte(string $titulairecarte): self
    {
        $this->titulairecarte = $titulairecarte;

        return $this;
    }

    public function getCvv(): ?int
    {
        return $this->cvv;
    }

    public function setCvv(int $cvv): self
    {
        $this->cvv = $cvv;

        return $this;
    }

    public function getDateexpiration(): ?\DateTimeInterface
    {
        return $this->dateexpiration;
    }

    public function setDateexpiration(\DateTimeInterface $dateexpiration): self
    {
        $this->dateexpiration = $dateexpiration;

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

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getExpirationcarte(): ?string
    {
        return $this->expirationcarte;
    }

    public function setExpirationcarte(string $expirationcarte): self
    {
        $this->expirationcarte = $expirationcarte;

        return $this;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }
}
