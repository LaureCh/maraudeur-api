<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass="App\Repository\InternshipRepository")
 */
class Internship
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Student", inversedBy="internship", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $student;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $companyName;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $contactDate;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contactWay;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contactName;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $jobName;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $secondContactDate;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $response;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $internshipProposed;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $internshipAccepted;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStudent(): ?Student
    {
        return $this->student;
    }

    public function setStudent(Student $student): self
    {
        $this->student = $student;

        return $this;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function setCompanyName(string $companyName): self
    {
        $this->companyName = $companyName;

        return $this;
    }

    public function getContactDate(): ?\DateTimeInterface
    {
        return $this->contactDate;
    }

    public function setContactDate(?\DateTimeInterface $contactDate): self
    {
        $this->contactDate = $contactDate;

        return $this;
    }

    public function getContactWay(): ?string
    {
        return $this->contactWay;
    }

    public function setContactWay(?string $contactWay): self
    {
        $this->contactWay = $contactWay;

        return $this;
    }

    public function getContactName(): ?string
    {
        return $this->contactName;
    }

    public function setContactName(?string $contactName): self
    {
        $this->contactName = $contactName;

        return $this;
    }

    public function getJobName(): ?string
    {
        return $this->jobName;
    }

    public function setJobName(?string $jobName): self
    {
        $this->jobName = $jobName;

        return $this;
    }

    public function getSecondContactDate(): ?\DateTimeInterface
    {
        return $this->secondContactDate;
    }

    public function setSecondContactDate(?\DateTimeInterface $secondContactDate): self
    {
        $this->secondContactDate = $secondContactDate;

        return $this;
    }

    public function getResponse(): ?bool
    {
        return $this->response;
    }

    public function setResponse(?bool $response): self
    {
        $this->response = $response;

        return $this;
    }

    public function getInternshipProposed(): ?bool
    {
        return $this->internshipProposed;
    }

    public function setInternshipProposed(?bool $internshipProposed): self
    {
        $this->internshipProposed = $internshipProposed;

        return $this;
    }

    public function getInternshipAccepted(): ?bool
    {
        return $this->internshipAccepted;
    }

    public function setInternshipAccepted(?bool $internshipAccepted): self
    {
        $this->internshipAccepted = $internshipAccepted;

        return $this;
    }
}
