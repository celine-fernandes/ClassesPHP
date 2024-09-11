<?php
class Voiture {
    public $modele;
    public $year;

    public function __construct($modele, $year) {
        $this->modele = $modele;
        $this->year = $year;
    }

    public function afficherInfos() {
        echo "Modele : {$this->modele}, Year : {$this->year}";
    }
}

class VoitureAutomatique extends Voiture {
    public $vitesse;
    public $couleur;

    public function __construct($modele, $year, $vitesse, $couleur) {
        parent::__construct($modele, $year);
        $this->vitesse = $vitesse;
        $this->couleur = $couleur;
    }

    public function fonctionnementAutomatique() {
        echo "Cette voiture de vitesse {$this->vitesse} de couleur {$this->couleur} fonctionne automatiquement.";
    }
}

class VoitureFamiliale extends Voiture {
    public $nombreDePlaces;
    public $capaciteDeCoffre;

    public function __construct($modele, $year, $nombreDePlaces, $capaciteDeCoffre) {
        parent::__construct($modele, $year); 
        $this->nombreDePlaces = $nombreDePlaces;
        $this->capaciteDeCoffre = $capaciteDeCoffre;
    }

    public function afficherInfosFamiliale() {
        echo "Modèle : {$this->modele}, Année : {$this->year}, Nombre de places : {$this->nombreDePlaces}, Capacité de coffre : {$this->capaciteDeCoffre}";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
$voiture_auto = new VoitureAutomatique("Automatique", "Noir", "280km/h", "noir");
echo $voiture_auto->fonctionnementAutomatique() . "<br>";

$voitureFamiliale = new VoitureFamiliale("Modèle Familial", 2024, 5, "600 litres");
$voitureFamiliale->afficherInfosFamiliale();
?>

</body>
</html>




























