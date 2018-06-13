<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Impression
 *
 * @ORM\Table(name="impression")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ImpressionRepository")
 */
class Impression
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_impression", type="datetime")
     */
    private $dateImpression;

    /**
     * @var string
     *
     * @ORM\Column(name="imprime_par", type="string", length=255)
     */
    private $imprimePar;

    /**
     * @ORM\ManyToOne(targetEntity="Demande", inversedBy="impressions")
     * @ORM\JoinColumn(name="demande_id", referencedColumnName="id", nullable=true)
     */
    private $demande;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set dateImpression
     *
     * @param \DateTime $dateImpression
     *
     * @return Impression
     */
    public function setDateImpression($dateImpression)
    {
        $this->dateImpression = $dateImpression;

        return $this;
    }

    /**
     * Get dateImpression
     *
     * @return \DateTime
     */
    public function getDateImpression()
    {
        return $this->dateImpression;
    }

    /**
     * Set imprimePar
     *
     * @param string $imprimePar
     *
     * @return Impression
     */
    public function setImprimePar($imprimePar)
    {
        $this->imprimePar = $imprimePar;

        return $this;
    }

    /**
     * Get imprimePar
     *
     * @return string
     */
    public function getImprimePar()
    {
        return $this->imprimePar;
    }



    /**
     * Set demande
     *
     * @param \AppBundle\Entity\Demande $demande
     *
     * @return Impression
     */
    public function setDemande(\AppBundle\Entity\Demande $demande = null)
    {
        $this->demande = $demande;

        return $this;
    }

    /**
     * Get demande
     *
     * @return \AppBundle\Entity\Demande
     */
    public function getDemande()
    {
        return $this->demande;
    }
}
