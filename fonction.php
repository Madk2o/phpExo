<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//exo 11

$a = 2;
$b = 7;
$c = 6;

function delta($a,$b,$c){

    $x = ($b*$b) - (4*$a*$c);

    if($x < 0){
        echo '<p> il n\'y a pas de solution</p>';
    } 
    elseif($x ==0){
        echo '<p> il y a une de solution c\'est x= '.-$b / (2*$a). '</p>';
    }   else {
        echo '<p> il y a une de solution c\'est x= '.(-$b - sqrt($x)) / (2*$a). ' et x2 =' .(-$b + sqrt($x)) / (2 * $a) .'</p>';
    }
}

delta($a,$b,$c);


echo '<p>**********************************************</p>';
//12
$guy = [
    'nom' => 'Guy',
    'Age' => '42',
    'Sexe' => 'Homme'

];

$delphine = [
    'nom' => 'Delphine',
    'Age' => '39',
    'Sexe' => 'Femme'

];

function afficher($x){
    echo '<p> Nom : '.$x['nom'].'</p>';
    echo '<p> Age : '.$x['Age'].'</p>';
    echo '<p> Sexe : '.$x['Sexe'].'</p>';
}

afficher($guy);
afficher($delphine);

echo '<p>**********************************************</p>';

//exo13



//exo14
?>

    
</body>
</html>