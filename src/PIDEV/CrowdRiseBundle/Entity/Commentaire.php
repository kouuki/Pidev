<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="id_projet", columns={"id_projet"}), @ORM\Index(name="id_membre", columns={"id_membre"})})
 * @ORM\Entity
 */
class Commentaire
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_commentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="date_commentaire", type="string", length=50, nullable=false)
     */
    private $dateCommentaire;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id_membre")
     * })
     */
    private $idMembre;

    /**
     * @var \Projet
     *
     * @ORM\ManyToOne(targetEntity="Projet")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_projet", referencedColumnName="id_projet")
     * })
     */
    private $idProjet;
    function getIdCommentaire() {
        return $this->idCommentaire;
    }

    function getDescription() {
        return $this->description;
    }

    function getDateCommentaire() {
        return $this->dateCommentaire;
    }

    function getIdMembre() {
        return $this->idMembre;
    }

    function getIdProjet() {
        return $this->idProjet;
    }

    function setIdCommentaire($idCommentaire) {
        $this->idCommentaire = $idCommentaire;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setDateCommentaire($dateCommentaire) {
        $this->dateCommentaire = $dateCommentaire;
    }

    function setIdMembre(\Membre $idMembre) {
        $this->idMembre = $idMembre;
    }

    function setIdProjet(\Projet $idProjet) {
        $this->idProjet = $idProjet;
    }



}
