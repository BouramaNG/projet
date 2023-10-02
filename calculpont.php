<?php
declare (strict_types=1);
//cree une fonction qui calcule l surface dun pont
class pont
{
    public $longeur;
    public  $largeur;

    public function calculSurface (){
        return $this->longeur * $this->largeur;
    }
}
$pont1 = new pont;
$pont1->longeur=150;
$pont1->largeur=50;

$pont2 = new pont;
$pont2->longeur=70;
$pont2->largeur=10;


$surface = $pont1->calculSurface();
echo 'la surface du pont1 est : '.$surface; 

$surface = $pont2->calculSurface();
echo '<br>la surface du pont2 est : '.$surface;
?>