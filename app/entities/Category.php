<?php
class Category {
    private int $id;
    private string $nom;

      public function __construct( int $id ,string $nom){
        $this->id = $id;
        $this->nom=$nom;
      }

      public function getId(): int {  
        return $this->id;
    }
    public function setId(int $id): void {
        $this->id = $id;
    }
      public function getnom(): string {  
        return $this->nom;
    }
    public function setnom(string $nom): void {
        $this->nom = $nom;
    }

}
?>