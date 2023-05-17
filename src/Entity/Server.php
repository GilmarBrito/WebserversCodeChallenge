<?php

namespace App\Entity;

use App\Repository\ServerRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ServerRepository::class)]
class Server
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $model = null;

    #[ORM\Column(length: 5)]
    private ?string $ram = null;

    #[ORM\Column(length: 5)]
    private ?string $ram_type = null;

    #[ORM\Column]
    private ?int $hdd_qty = null;

    #[ORM\Column(length: 5)]
    private ?string $hdd_type = null;

    #[ORM\Column(length: 255)]
    private ?string $location = null;

    #[ORM\Column(length: 10)]
    private ?string $price = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModel(): ?string
    {
        return $this->model;
    }

    public function setModel(string $model): self
    {
        $this->model = $model;

        return $this;
    }

    public function getRam(): ?string
    {
        return $this->ram;
    }

    public function setRam(string $ram): self
    {
        $this->ram = $ram;

        return $this;
    }

    public function getRamType(): ?string
    {
        return $this->ram_type;
    }

    public function setRamType(string $ram_type): self
    {
        $this->ram_type = $ram_type;

        return $this;
    }

    public function getHddQty(): ?int
    {
        return $this->hdd_qty;
    }

    public function setHddQty(int $hdd_qty): self
    {
        $this->hdd_qty = $hdd_qty;

        return $this;
    }

    public function getHddType(): ?string
    {
        return $this->hdd_type;
    }

    public function setHddType(string $hdd_type): self
    {
        $this->hdd_type = $hdd_type;

        return $this;
    }

    public function getLocation(): ?string
    {
        return $this->location;
    }

    public function setLocation(string $location): self
    {
        $this->location = $location;

        return $this;
    }

    public function getPrice(): ?string
    {
        return $this->price;
    }

    public function setPrice(string $price): self
    {
        $this->price = $price;

        return $this;
    }
}
