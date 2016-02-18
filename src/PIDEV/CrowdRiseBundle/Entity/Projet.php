<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table(name="projet", indexes={@ORM\Index(name="id_membre", columns={"id_membre"}), @ORM\Index(name="id_categrorie", columns={"id_categrorie"})})
 * @ORM\Entity
 */
class Projet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_projet", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idProjet;

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
     * @ORM\Column(name="type_financement", type="string", length=50, nullable=false)
     */
    private $typeFinancement;

    /**
     * @var string
     *
     * @ORM\Column(name="date_projet", type="string", length=50, nullable=false)
     */
    private $dateProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="deadline_projet", type="string", length=50, nullable=false)
     */
    private $deadlineProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier_projet", type="string", length=1000, nullable=false)
     */
    private $fichierProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="image_projet", type="blob", nullable=false)
     */
    private $imageProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="video_projet", type="blob", nullable=false)
     */
    private $videoProjet;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_categrorie", referencedColumnName="id_categorie")
     * })
     */
    private $idCategrorie;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id_membre")
     * })
     */
    private $idMembre;

    function getIdProjet() {
        return $this->idProjet;
    }

    function getTitre() {
        return $this->titre;
    }

    function getDescription() {
        return $this->description;
    }

    function getTypeFinancement() {
        return $this->typeFinancement;
    }

    function getDateProjet() {
        return $this->dateProjet;
    }

    function getDeadlineProjet() {
        return $this->deadlineProjet;
    }

    function getFichierProjet() {
        return $this->fichierProjet;
    }

    function getImageProjet() {
        return $this->imageProjet;
    }

    function getVideoProjet() {
        return $this->videoProjet;
    }

    function getIdCategrorie() {
        return $this->idCategrorie;
    }

    function getIdMembre() {
        return $this->idMembre;
    }

    function setIdProjet($idProjet) {
        $this->idProjet = $idProjet;
    }

    function setTitre($titre) {
        $this->titre = $titre;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setTypeFinancement($typeFinancement) {
        $this->typeFinancement = $typeFinancement;
    }

    function setDateProjet($dateProjet) {
        $this->dateProjet = $dateProjet;
    }

    function setDeadlineProjet($deadlineProjet) {
        $this->deadlineProjet = $deadlineProjet;
    }

    function setFichierProjet($fichierProjet) {
        $this->fichierProjet = $fichierProjet;
    }

    function setImageProjet($imageProjet) {
        $this->imageProjet = $imageProjet;
    }

    function setVideoProjet($videoProjet) {
        $this->videoProjet = $videoProjet;
    }

    function setIdCategrorie(\Categorie $idCategrorie) {
        $this->idCategrorie = $idCategrorie;
    }

    function setIdMembre(\Membre $idMembre) {
        $this->idMembre = $idMembre;
    }


}
