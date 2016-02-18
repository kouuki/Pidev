<?php

namespace PIDEV\CrowdRiseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Solution
 *
 * @ORM\Table(name="solution", indexes={@ORM\Index(name="id_membre", columns={"id_membre"}), @ORM\Index(name="id_probleme", columns={"id_probleme"})})
 * @ORM\Entity
 */
class Solution
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_solution", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idSolution;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="text", nullable=false)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="fichier_solution", type="string", length=1000, nullable=false)
     */
    private $fichierSolution;

    /**
     * @var string
     *
     * @ORM\Column(name="etat", type="string", length=50, nullable=false)
     */
    private $etat;

    /**
     * @var \Probleme
     *
     * @ORM\ManyToOne(targetEntity="Probleme")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_probleme", referencedColumnName="id_probleme")
     * })
     */
    private $idProbleme;

    /**
     * @var \Membre
     *
     * @ORM\ManyToOne(targetEntity="Membre")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_membre", referencedColumnName="id_membre")
     * })
     */
    private $idMembre;
    function getIdSolution() {
        return $this->idSolution;
    }

    function getDescription() {
        return $this->description;
    }

    function getFichierSolution() {
        return $this->fichierSolution;
    }

    function getEtat() {
        return $this->etat;
    }

    function getIdProbleme() {
        return $this->idProbleme;
    }

    function getIdMembre() {
        return $this->idMembre;
    }

    function setIdSolution($idSolution) {
        $this->idSolution = $idSolution;
    }

    function setDescription($description) {
        $this->description = $description;
    }

    function setFichierSolution($fichierSolution) {
        $this->fichierSolution = $fichierSolution;
    }

    function setEtat($etat) {
        $this->etat = $etat;
    }

    function setIdProbleme(\Probleme $idProbleme) {
        $this->idProbleme = $idProbleme;
    }

    function setIdMembre(\Membre $idMembre) {
        $this->idMembre = $idMembre;
    }



}
