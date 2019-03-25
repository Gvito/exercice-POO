<?php

class Personne {

  protected $nom;
  protected $prénom;
  protected $adresse;

  public function __construct(array $donnees) {
    $this->hydrate($donnees);
  }

  public function hydrate(array $donnees) {
    foreach ($donnees as $key => $value) {
      $method = 'set'.ucfirst($key);
      if (method_exists($this, $method)) {
        $this->$method($value);
      }
    }
  }

  public function setNom($nom) {
    $this->nom = $nom;
  }

  public function setPrenom($prenom) {
    $this->prenom = $prenom;
  }

  public function setAdresse($adresse) {
    $this->adresse = $adresse;
  }

  public function getNom() {
    return $this->nom;
  }

  public function getPrenom() {
    return $this->prenom;
  }

  public function getAdresse() {
    return $this->adresse;
  }

  public function getCoord() {
    return $this->nom . " " . $this->prenom . " " . $this->adresse;
  }
}

?>
