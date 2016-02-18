<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Probleme
 *
 * @ORM\Table(name="probleme", indexes={@ORM\Index(name="id_membre", columns={"id_membre"})})
 * @ORM\Entity
 */
class Probleme
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_probleme", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProbleme;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=50, nullable=false)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="date_probleme", type="string", length=50, nullable=false)
     */
    private $dateProbleme;

    /**
     * @var string
     *
     * @ORM\Column(name="deadline_probleme", type="string", length=50, nullable=false)
     */
    private $deadlineProbleme;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier_probleme", type="string", length=1000, nullable=false)
     */
    private $fichierProbleme;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id_membre")
     * })
     */
    private $idMembre;

    function getIdProbleme() {
        return $this->idProbleme;
    }

    function getTitre() {
        return $this->titre;
    }

    function getDescription() {
        return $this->description;
    }

    function getDateProbleme() {
        return $this->dateProbleme;
    }

    function getDeadlineProbleme() {
        return $this->deadlineProbleme;
    }

    function getFichierProbleme() {
        return $this->fichierProbleme;
    }

    function getIdMembre() {
        return $this->idMembre;
    }

    function setIdProbleme($idProbleme) {
        $this->idProbleme = $idProbleme;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setDateProbleme($dateProbleme) {
        $this->dateProbleme = $dateProbleme;
    }

    function setDeadlineProbleme($deadlineProbleme) {
        $this->deadlineProbleme = $deadlineProbleme;
    }

    function setFichierProbleme($fichierProbleme) {
        $this->fichierProbleme = $fichierProbleme;
    }

    function setIdMembre(\Membre $idMembre) {
        $this->idMembre = $idMembre;
    }


}
