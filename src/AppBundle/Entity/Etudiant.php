<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Etudiant
 *
 * @ORM\Table(name="etudiant")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EtudiantRepository")
 */
class Etudiant
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
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom", type="string", length=255)
     */
    private $prenom;

    /**
     * @var string
     *
     * @ORM\Column(name="genre", type="string", length=10)
     */
    private $genre;


    /**
     * @var \DateTime
     *
     * @ORM\Column(name="datenaissance", type="date", nullable=true)
     */
    private $datenaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="lieunaissance", type="string", length=255, nullable=true)
     */
    private $lieunaissance;

    /**
     * @var string
     *
     * @ORM\Column(name="option_etud", type="string", length=255)
     */
    private $optionEtud;

    /**
     * @var string
     *
     * @ORM\Column(name="specialite", type="string", length=255)
     */
    private $specialite;

    /**
     * @var string
     *
     * @ORM\Column(name="mention", type="string", length=255)
     */
    private $mention;

    /**
     * @var string
     *
     * @ORM\Column(name="date_examen", type="string", length=255)
     */
    private $dateExamen;

    /**
     * @ORM\OneToMany(targetEntity="Demande", mappedBy="etudiant")
     */
    private $demandes;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Etudiant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Etudiant
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set datenaissance
     *
     * @param \DateTime $datenaissance
     *
     * @return Etudiant
     */
    public function setDatenaissance($datenaissance)
    {
        $this->datenaissance = $datenaissance;

        return $this;
    }

    /**
     * Get datenaissance
     *
     * @return \DateTime
     */
    public function getDatenaissance()
    {
        return $this->datenaissance;
    }

    /**
     * Set lieunaissance
     *
     * @param string $lieunaissance
     *
     * @return Etudiant
     */
    public function setLieunaissance($lieunaissance)
    {
        $this->lieunaissance = $lieunaissance;

        return $this;
    }

    /**
     * Get lieunaissance
     *
     * @return string
     */
    public function getLieunaissance()
    {
        return $this->lieunaissance;
    }

    /**
     * Set optionEtud
     *
     * @param string $optionEtud
     *
     * @return Etudiant
     */
    public function setOptionEtud($optionEtud)
    {
        $this->optionEtud = $optionEtud;

        return $this;
    }

    /**
     * Get optionEtud
     *
     * @return string
     */
    public function getOptionEtud()
    {
        return $this->optionEtud;
    }

    /**
     * Set specialite
     *
     * @param string $specialite
     *
     * @return Etudiant
     */
    public function setSpecialite($specialite)
    {
        $this->specialite = $specialite;

        return $this;
    }

    /**
     * Get specialite
     *
     * @return string
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Set mention
     *
     * @param string $mention
     *
     * @return Etudiant
     */
    public function setMention($mention)
    {
        $this->mention = $mention;

        return $this;
    }

    /**
     * Get mention
     *
     * @return string
     */
    public function getMention()
    {
        return $this->mention;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->demandes = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add demande
     *
     * @param \AppBundle\Entity\Demande $demande
     *
     * @return Etudiant
     */
    public function addDemande(\AppBundle\Entity\Demande $demande)
    {
        $this->demandes[] = $demande;

        return $this;
    }

    /**
     * Remove demande
     *
     * @param \AppBundle\Entity\Demande $demande
     */
    public function removeDemande(\AppBundle\Entity\Demande $demande)
    {
        $this->demandes->removeElement($demande);
    }

    /**
     * Get demandes
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDemandes()
    {
        return $this->demandes;
    }

    /**
     * Set dateExamen
     *
     * @param string $dateExamen
     *
     * @return Etudiant
     */
    public function setDateExamen($dateExamen)
    {
        $this->dateExamen = $dateExamen;

        return $this;
    }

    /**
     * Get dateExamen
     *
     * @return string
     */
    public function getDateExamen()
    {
        return $this->dateExamen;
    }

    /**
     * Set genre
     *
     * @param string $genre
     *
     * @return Etudiant
     */
    public function setGenre($genre)
    {
        $this->genre = $genre;

        return $this;
    }

    /**
     * Get genre
     *
     * @return string
     */
    public function getGenre()
    {
        return $this->genre;
    }
}
