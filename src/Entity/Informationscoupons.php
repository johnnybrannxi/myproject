<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use DateTimeInterface;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Validator\Validator\ValidatorInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\InformationscouponsRepository")
 */
class Informationscoupons
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\Length(
     *      min = 2,
     *      max = 50
     * )
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Length(
     *      min = 2,
     *      max = 50
     * )
     */
    private $prenom;

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
     *      min = 12,
     *      max = 12
     * )
     */
    private $codecoupon1;

    /**
     * @ORM\Column(type="integer")
     * @Assert\Positive;
     * @Assert\Length(
     *      min = 2,
     *      max = 3
     * )
     */
    private $montantcoupon1;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(
     *      min = 12,
     *      max = 12
     * )
     */
    private $codecoupon2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Positive;
     * @Assert\Length(
     *      min = 2,
     *      max = 3
     * )
     */
    private $montantcoupon2;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(
     *      min = 12,
     *      max = 12
     * )
     */
    private $codecoupon3;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Positive;
     * @Assert\Length(
     *      min = 2,
     *      max = 3
     * )
     */
    private $montantcoupon3;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Length(
     *      min = 12,
     *      max = 12
     * )
     */
    private $codecoupon4;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\Positive;
     * @Assert\Length(
     *      min = 2,
     *      max = 3
     * )
     */
    private $montantcoupon4;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typerecharge;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;

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

    public function getCodecoupon1(): ?string
    {
        return $this->codecoupon1;
    }

    public function setCodecoupon1(string $codecoupon1): self
    {
        $this->codecoupon1 = $codecoupon1;

        return $this;
    }

    public function getMontantcoupon1(): ?int
    {
        return $this->montantcoupon1;
    }

    public function setMontantcoupon1(int $montantcoupon1): self
    {
        $this->montantcoupon1 = $montantcoupon1;

        return $this;
    }

    public function getCodecoupon2(): ?string
    {
        return $this->codecoupon2;
    }

    public function setCodecoupon2(?string $codecoupon2): self
    {
        $this->codecoupon2 = $codecoupon2;

        return $this;
    }

    public function getMontantcoupon2(): ?int
    {
        return $this->montantcoupon2;
    }

    public function setMontantcoupon2(?int $montantcoupon2): self
    {
        $this->montantcoupon2 = $montantcoupon2;

        return $this;
    }

    public function getCodecoupon3(): ?string
    {
        return $this->codecoupon3;
    }

    public function setCodecoupon3(?string $codecoupon3): self
    {
        $this->codecoupon3 = $codecoupon3;

        return $this;
    }

    public function getMontantcoupon3(): ?int
    {
        return $this->montantcoupon3;
    }

    public function setMontantcoupon3(?int $montantcoupon3): self
    {
        $this->montantcoupon3 = $montantcoupon3;

        return $this;
    }

    public function getCodecoupon4(): ?string
    {
        return $this->codecoupon4;
    }

    public function setCodecoupon4(?string $codecoupon4): self
    {
        $this->codecoupon4 = $codecoupon4;

        return $this;
    }

    public function getMontantcoupon4(): ?int
    {
        return $this->montantcoupon4;
    }

    public function setMontantcoupon4(?int $montantcoupon4): self
    {
        $this->montantcoupon4 = $montantcoupon4;

        return $this;
    }

    public function getTyperecharge(): ?string
    {
        return $this->typerecharge;
    }

    public function setTyperecharge(?string $typerecharge): self
    {
        $this->typerecharge = $typerecharge;

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
