<?php

class City {

  protected $name;
  protected $dep;

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

  public function setName($name) {
    $this->name = $name;
  }

  public function getName() {
    return $this->name;
  }

  public function setDep($dep) {
    $this->dep = $dep;
  }

  public function getDep() {
    return $this->dep;
  }

  public function showLocation() {
    echo "la ville de " . $this->name . " est dans le département " . $this->dep;
  }
}

?>
