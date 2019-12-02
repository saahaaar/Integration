<?php
class personne
{
public static $nom;
private $prénom;
private $adresse;
//Constructeur
public function __construct($nom,$prénom,$adresse)
{
self::nom = $nom;
$this->prénom=$prénom;
$this->adresse=$adresse;
}
//Destructeur
public function __destruct()
{
echo "La personne nommée $this->prénom self::$nom est supprimée de vos contactsn. </br>";
}
//
public function getpersonne()
{
$texte=" $this->prénom  self::$nom <br /> $this->adresse <br />";
return $texte;
}
//
public function setadresse($adresse)
{
$this->adresse=$adresse;
}
}
//Création d'objets
$client = new personne("Geelsen","Jan"," 145 Rue du Maine Nantes");
echo $client->getpersonne();
//Modification de l'adresse
$client->setadresse("23 Avenue Foch Lyon");
echo self::$nom ;
//Suppression explicite du client, donc appel du destructeur
unset($client);