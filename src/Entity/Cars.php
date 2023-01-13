<?php

namespace App\Entity;

use App\Repository\CarsRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CarsRepository::class)]
class Cars
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $idCar = null;

    #[ORM\Column(length: 30)]
    private ?string $model = null;

    #[ORM\Column(length: 30)]
    private ?string $mark = null;

    #[ORM\Column(length: 20)]
    private ?string $type = null;

    #[ORM\Column(type: Types::SMALLINT)]
    private ?int $places = null;

    #[ORM\Column(length: 20)]
    private ?string $tranction = null;

    #[ORM\Column(length: 20)]
    private ?string $transmition = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCar(): ?int
    {
        return $this->idCar;
    }

    public function setIdCar(int $idCar): self
    {
        $this->idCar = $idCar;

        return $this;
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

    public function getMark(): ?string
    {
        return $this->mark;
    }

    public function setMark(string $mark): self
    {
        $this->mark = $mark;

        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getPlaces(): ?int
    {
        return $this->places;
    }

    public function setPlaces(int $places): self
    {
        $this->places = $places;

        return $this;
    }

    public function getTranction(): ?string
    {
        return $this->tranction;
    }

    public function setTranction(string $tranction): self
    {
        $this->tranction = $tranction;

        return $this;
    }

    public function getTransmition(): ?string
    {
        return $this->transmition;
    }

    public function setTransmition(string $transmition): self
    {
        $this->transmition = $transmition;

        return $this;
    }
}
