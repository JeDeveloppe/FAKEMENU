<?php

namespace App\Entity;

use App\Repository\LegalInformationsRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: LegalInformationsRepository::class)]
class LegalInformations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $companyName = null;

    #[ORM\Column(length: 255)]
    private ?string $companyStreet = null;

    #[ORM\Column]
    private ?int $companyPostalCode = null;

    #[ORM\Column(length: 255)]
    private ?string $companyCity = null;

    #[ORM\Column(length: 255)]
    private ?string $companyEmail = null;

    #[ORM\Column(length: 255)]
    private ?string $companySiret = null;

    #[ORM\Column(length: 255)]
    private ?string $companyWebsiteUrl = null;

    #[ORM\Column(length: 255)]
    private ?string $webmasterCompanyName = null;

    #[ORM\Column(length: 255)]
    private ?string $webmasterFirstName = null;

    #[ORM\Column(length: 255)]
    private ?string $webmasterLastName = null;

    #[ORM\Column(length: 255)]
    private ?string $hostName = null;

    #[ORM\Column(length: 255)]
    private ?string $hostStreet = null;

    #[ORM\Column]
    private ?int $hostPostalCode = null;

    #[ORM\Column(length: 255)]
    private ?string $hostCity = null;

    #[ORM\Column(length: 255)]
    private ?string $hostPhone = null;

    #[ORM\Column(length: 255)]
    private ?string $companyPhone = null;

    #[ORM\Column(length: 255)]
    private ?string $webdesignerCompanyName = null;

    #[ORM\Column(length: 255)]
    private ?string $webdesignerFirstName = null;

    #[ORM\Column(length: 255)]
    private ?string $webdesignerLastName = null;

    #[ORM\Column(length: 255)]
    private ?string $webdesignerCompanyUrl = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $updatedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): static
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getCompanyStreet(): ?string
    {
        return $this->companyStreet;
    }

    public function setCompanyStreet(string $companyStreet): static
    {
        $this->companyStreet = $companyStreet;

        return $this;
    }

    public function getCompanyPostalCode(): ?int
    {
        return $this->companyPostalCode;
    }

    public function setCompanyPostalCode(int $companyPostalCode): static
    {
        $this->companyPostalCode = $companyPostalCode;

        return $this;
    }

    public function getCompanyCity(): ?string
    {
        return $this->companyCity;
    }

    public function setCompanyCity(string $companyCity): static
    {
        $this->companyCity = $companyCity;

        return $this;
    }

    public function getCompanyEmail(): ?string
    {
        return $this->companyEmail;
    }

    public function setCompanyEmail(string $companyEmail): static
    {
        $this->companyEmail = $companyEmail;

        return $this;
    }

    public function getCompanySiret(): ?string
    {
        return $this->companySiret;
    }

    public function setCompanySiret(string $companySiret): static
    {
        $this->companySiret = $companySiret;

        return $this;
    }

    public function getCompanyWebsiteUrl(): ?string
    {
        return $this->companyWebsiteUrl;
    }

    public function setCompanyWebsiteUrl(string $companyWebsiteUrl): static
    {
        $this->companyWebsiteUrl = $companyWebsiteUrl;

        return $this;
    }

    public function getWebmasterCompanyName(): ?string
    {
        return $this->webmasterCompanyName;
    }

    public function setWebmasterCompanyName(string $webmasterCompanyName): static
    {
        $this->webmasterCompanyName = $webmasterCompanyName;

        return $this;
    }

    public function getWebmasterFirstName(): ?string
    {
        return $this->webmasterFirstName;
    }

    public function setWebmasterFirstName(string $webmasterFirstName): static
    {
        $this->webmasterFirstName = $webmasterFirstName;

        return $this;
    }

    public function getWebmasterLastName(): ?string
    {
        return $this->webmasterLastName;
    }

    public function setWebmasterLastName(string $webmasterLastName): static
    {
        $this->webmasterLastName = $webmasterLastName;

        return $this;
    }

    public function getHostName(): ?string
    {
        return $this->hostName;
    }

    public function setHostName(string $hostName): static
    {
        $this->hostName = $hostName;

        return $this;
    }

    public function getHostStreet(): ?string
    {
        return $this->hostStreet;
    }

    public function setHostStreet(string $hostStreet): static
    {
        $this->hostStreet = $hostStreet;

        return $this;
    }

    public function getHostPostalCode(): ?int
    {
        return $this->hostPostalCode;
    }

    public function setHostPostalCode(int $hostPostalCode): static
    {
        $this->hostPostalCode = $hostPostalCode;

        return $this;
    }

    public function getHostCity(): ?string
    {
        return $this->hostCity;
    }

    public function setHostCity(string $hostCity): static
    {
        $this->hostCity = $hostCity;

        return $this;
    }

    public function getHostPhone(): ?string
    {
        return $this->hostPhone;
    }

    public function setHostPhone(string $hostPhone): static
    {
        $this->hostPhone = $hostPhone;

        return $this;
    }

    public function getCompanyPhone(): ?string
    {
        return $this->companyPhone;
    }

    public function setCompanyPhone(string $companyPhone): static
    {
        $this->companyPhone = $companyPhone;

        return $this;
    }

    public function getWebdesignerCompanyName(): ?string
    {
        return $this->webdesignerCompanyName;
    }

    public function setWebdesignerCompanyName(string $webdesignerCompanyName): static
    {
        $this->webdesignerCompanyName = $webdesignerCompanyName;

        return $this;
    }

    public function getWebdesignerFirstName(): ?string
    {
        return $this->webdesignerFirstName;
    }

    public function setWebdesignerFirstName(string $webdesignerFirstName): static
    {
        $this->webdesignerFirstName = $webdesignerFirstName;

        return $this;
    }

    public function getWebdesignerLastName(): ?string
    {
        return $this->webdesignerLastName;
    }

    public function setWebdesignerLastName(string $webdesignerLastName): static
    {
        $this->webdesignerLastName = $webdesignerLastName;

        return $this;
    }

    public function getWebdesignerCompanyUrl(): ?string
    {
        return $this->webdesignerCompanyUrl;
    }

    public function setWebdesignerCompanyUrl(string $webdesignerCompanyUrl): static
    {
        $this->webdesignerCompanyUrl = $webdesignerCompanyUrl;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeImmutable $updatedAt): static
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCompanyPhoneWithoutSpecialCharacters(): ?string{

        return str_replace([' ', '-', '.'], '', $this->getCompanyPhone());
    }
}
