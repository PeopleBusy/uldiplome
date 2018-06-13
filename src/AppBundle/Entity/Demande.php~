<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Demande
 *
 * @ORM\Table(name="demande")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\DemandeRepository")
 */
class Demande
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
     * @var string
     *
     * @ORM\Column(name="etat_demande", type="string", length=10)
     */
    private $etatDemande;

    /**
     * @var string
     *
     * @ORM\Column(name="type_demande", type="string", length=10)
     */
    private $typeDemande;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_enregistrement", type="datetime")
     */
    private $dateEnregistrement;

    /**
     * @var string
     *
     * @ORM\Column(name="annee", type="string", length=255)
     */
    private $annee;

    /**
     * @var string
     *
     * @ORM\Column(name="enregistre_par", type="string", length=255)
     */
    private $enregistrePar;

    /**
     * @ORM\ManyToOne(targetEntity="Etudiant", inversedBy="demandes")
     * @ORM\JoinColumn(name="etudiant_id", referencedColumnName="id", nullable=true)
     */
    private $etudiant;

    /**
     * @ORM\OneToMany(targetEntity="Impression", mappedBy="demande")
     */
    private $impressions;


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
     * Set etatDemande
     *
     * @param string $etatDemande
     *
     * @return Demande
     */
    public function setEtatDemande($etatDemande)
    {
        $this->etatDemande = $etatDemande;

        return $this;
    }

    /**
     * Get etatDemande
     *
     * @return string
     */
    public function getEtatDemande()
    {
        return $this->etatDemande;
    }

    /**
     * Set typeDemande
     *
     * @param string $typeDemande
     *
     * @return Demande
     */
    public function setTypeDemande($typeDemande)
    {
        $this->typeDemande = $typeDemande;

        return $this;
    }

    /**
     * Get typeDemande
     *
     * @return string
     */
    public function getTypeDemande()
    {
        return $this->typeDemande;
    }

    /**
     * Set dateEnregistrement
     *
     * @param \DateTime $dateEnregistrement
     *
     * @return Demande
     */
    public function setDateEnregistrement($dateEnregistrement)
    {
        $this->dateEnregistrement = $dateEnregistrement;

        return $this;
    }

    /**
     * Get dateEnregistrement
     *
     * @return \DateTime
     */
    public function getDateEnregistrement()
    {
        return $this->dateEnregistrement;
    }

    /**
     * Set enregistrePar
     *
     * @param string $enregistrePar
     *
     * @return Demande
     */
    public function setEnregistrePar($enregistrePar)
    {
        $this->enregistrePar = $enregistrePar;

        return $this;
    }

    /**
     * Get enregistrePar
     *
     * @return string
     */
    public function getEnregistrePar()
    {
        return $this->enregistrePar;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->impressions = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Set etudiant
     *
     * @param \AppBundle\Entity\Etudiant $etudiant
     *
     * @return Demande
     */
    public function setEtudiant(\AppBundle\Entity\Etudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \AppBundle\Entity\Etudiant
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }

    /**
     * Add impression
     *
     * @param \AppBundle\Entity\Impression $impression
     *
     * @return Demande
     */
    public function addImpression(\AppBundle\Entity\Impression $impression)
    {
        $this->impressions[] = $impression;

        return $this;
    }

    /**
     * Remove impression
     *
     * @param \AppBundle\Entity\Impression $impression
     */
    public function removeImpression(\AppBundle\Entity\Impression $impression)
    {
        $this->impressions->removeElement($impression);
    }

    /**
     * Get impressions
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getImpressions()
    {
        return $this->impressions;
    }

    /**
     * Set annee
     *
     * @param string $annee
     *
     * @return Demande
     */
    public function setAnnee($annee)
    {
        $this->annee = $annee;

        return $this;
    }

    /**
     * Get annee
     *
     * @return string
     */
    public function getAnnee()
    {
        return $this->annee;
    }
}
