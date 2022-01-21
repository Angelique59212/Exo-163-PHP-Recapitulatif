<?php

/*****************************************/
/********** Les boucles : For ************/
/*****************************************/
echo '1.Nombre de mouton : <br>';
for ($i = 0; $i <= 10; ++$i) {
    echo $i.' mouton(s)<br>';
}
echo '<br><br>';
//----------------------------------------
//for : particulièrement utile pour pacourir un tableau
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
//count est une fonction proposée par php qui sert à compter le nombre d'éléments d'un tableau
echo '2.Les couleurs : <br>';

$num = count($couleurs); // J'effectue le count en dehors de la boucle for pour éviter que php ne doive recalculer à chaque itération le nombre d'éléments du tableau
for ($i = 0; $i < $num; ++$i) {
    echo $couleurs[$i].'<br>';
}
echo '<br><br>';

//----------------------------------------
//Parcourir un tableau depuis la fin
echo '3.Les couleurs depuis la fin: <br>';
//n'oubliez pas qu'un tableau commence à l'index 0. C'est pour ça qu'on commence notre $i à la taille du tableau moins 1

$num = count($couleurs);
for ($i = $num - 1; $i >= 0; --$i) {
    echo $couleurs[$i].'<br>';
}
echo '<br><br>';
//----------------------------------------
//Parcourir un tableau multidimensionnel à 2 dimensions
$couleurs = array(
  array('rouge clair', 'rouge', 'rouge fonce'),
  array('bleu clair', 'bleu', 'bleu fonce'),
  array('vert clair', 'vert', 'vert fonce'),
  array('orange clair', 'orange', 'orange fonce'),
  array('marron clair', 'marron', 'marron fonce'),
);

echo '4.Les nuances de couleurs : <br>';
$num = count($couleurs);
for ($i = 0; $i < $num; ++$i) {
    for ($j = 0; $j < count($couleurs[$i]); ++$j) {
        echo $couleurs[$i][$j].'<br>';
    }
}

echo '<br><br>';

/*****************************************/
/********** Les boucles : Foreach ********/
/*****************************************/
//parcourir un tableau simple
$couleurs = ['rouge', 'bleu', 'vert', 'orange', 'marron', 'noir', 'blanc'];
echo '5.Les couleurs : <br>';
foreach ($couleurs as $couleur) {
    echo $couleur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif
$vehicule = array(
  //clé => valeur
  'nom' => 'Aventador LP 700-4',
  'marque' => 'Lamborghini',
  'puissance' => 700,
  'prix' => 200000,
);

echo '6.Specificite de ma voiture : <br>';
//syntax : foreach($tableau as $cle => $valeur )
foreach ($vehicule as $propriete => $valeur) {
    echo $propriete.':'.$valeur.'<br>';
}
echo '<br><br>';

//----------------------------------------
//parcourir un tableau associatif multidimensionnel
$vehiculeConcession = array(
  'Bas de gamme' => array(
    'nom' => 'C1',
       'marque' => 'Citroen',
       'puissance' => 70,
       'prix' => 10000,
  ),
  'Milieu de gamme' => array(
    'nom' => 'Golf',
       'marque' => 'VW',
       'puissance' => 140,
       'prix' => 270000,
  ),
  'Haut de gamme' => array(
    'nom' => 'Aventador LP 700-4',
       'marque' => 'Lamborghini',
       'puissance' => 700,
       'prix' => 200000,
  ),
);

echo '7.Les voitures dans la concession :';
foreach ($vehiculeConcession as $gamme => $vehicule) {
    echo '<br>'.$gamme;
    foreach ($vehicule as $propriete => $valeur) {
        echo $propriete.' : '.$valeur.'<br>';
    }
}
echo '<br><br>';

/*###############################################*/
/*################# ACTIVITÉS ###################*/
/*###############################################*/

//----------------------------------------
//Créer un tableau pour les mois de l'année et affiché tous les mois de Janvier à Décembre
//modifier et/ou remplacer les éléments ci-dessous
echo "8.Les mois depuis le debut de l'annee : <br>";
$month = [
    "janvier",
    "février",
    "mars",
    "avril",
    "mai",
    "juin",
    "juillet",
    "août",
    "septembre",
    "octobre",
    "novembre",
    "décembre",
];
for ($i = 0; $i < count($month); $i++) {
    echo $month[$i] ."<br>";
}
echo '<br><br>';

//Afficher les mois de la fin de l'année jusqu'au début de l'année
//modifier et/ou remplacer les éléments ci-dessous
echo "9.Les mois depuis la fin de l'annee : <br>";
for ($i = count($month)-1; $i >= 0; $i--) {
    echo $month[$i] ."<br>";
}
echo '<br><br>';


//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
$college = array(
  'Sixieme' => array(
    array('Nom' => 'Payet', 'Prenom' => 'Mickael'),
    array('Nom' => 'Hoareau', 'Prenom' => 'Christine'),
    array('Nom' => 'Maillot', 'Prenom' => 'Laure'),
  ),
  'Cinquieme' => array(
    array('Nom' => 'Bourdon', 'Prenom' => 'Didier'),
    array('Nom' => 'Legitimus', 'Prenom' => 'Pascal'),
    array('Nom' => 'Campan', 'Prenom' => 'Bernard'),
    array('Nom' => 'Fois', 'Prenom' => 'Marina'),
    array('Nom' => 'Floresti', 'Prenom' => 'Florence'),
  ),
  'Quatrieme' => array(
    array('Nom' => 'Willis', 'Prenom' => 'Bruce'),
    array('Nom' => 'Lawrence', 'Prenom' => 'Laurence'),
    array('Nom' => 'Johannson', 'Prenom' => 'Scarlett'),
    array('Nom' => 'Jackson', 'Prenom' => 'Samuel'),
  ),
);

echo '10.Les eleves du college : <br>';
//ajoutez votre code ici
foreach ($college as $level => $student) {
    echo '<br>'.$level . "<br>";
    echo "<br><br>";
    foreach ($student as $name => $username) {
        echo implode(" ", $username).'<br>';
    }
}
echo '<br><br>';

//----------------------------------------
//Afficher le nom et prénoms des élèves de ce collège
//reprenez le tableau ci-dessus, ajoutez des éléves pour la classe de troisième et réaffichez tout
echo '11.Les eleves du college (avec les nouveaux arrivants): <br>';
//ajoutez votre code ici
$college = array(
    'Sixieme' => array(
        array('Nom' => 'Payet', 'Prenom' => 'Mickael'),
        array('Nom' => 'Hoareau', 'Prenom' => 'Christine'),
        array('Nom' => 'Maillot', 'Prenom' => 'Laure'),
    ),
    'Cinquieme' => array(
        array('Nom' => 'Bourdon', 'Prenom' => 'Didier'),
        array('Nom' => 'Legitimus', 'Prenom' => 'Pascal'),
        array('Nom' => 'Campan', 'Prenom' => 'Bernard'),
        array('Nom' => 'Fois', 'Prenom' => 'Marina'),
        array('Nom' => 'Floresti', 'Prenom' => 'Florence'),
    ),
    'Quatrieme' => array(
        array('Nom' => 'Willis', 'Prenom' => 'Bruce'),
        array('Nom' => 'Lawrence', 'Prenom' => 'Laurence'),
        array('Nom' => 'Johannson', 'Prenom' => 'Scarlett'),
        array('Nom' => 'Jackson', 'Prenom' => 'Samuel'),
    ),
    'Troisième' => array(
        array('Nom' => "Louane", 'Prenom' => 'Laurent'),
        array('Nom' => "Luka", 'Prenom' => 'Laurent'),
        array('Nom' => "Titi", 'Prenom' => 'Laurent'),
    )
);
foreach ($college as $level => $student) {
    echo '<br>'.$level . "<br>";
    echo "<br><br>";
    foreach ($student as $name => $username) {
        echo implode(" ", $username).'<br>';
    }
}
echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = array(
  array(
    'nom' => 'Independance day',
    'date' => 1996,
    'realisateur' => 'Roland Emmerich',
    'acteurs' => array(
      'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell',
    ),
  ),
  array(
    'nom' => 'Bienvenue a Gattaca',
    'date' => 1998,
    'realisateur' => 'Andrew Niccol',
    'acteurs' => array(
      'Ethan Hawke', 'Uma Thurman', 'Jude Law',
    ),
  ),
  array(
    'nom' => 'Forrest Gump',
    'date' => 1994,
    'realisateur' => 'Robert Zemeckis',
    'acteurs' => array(
      	'Tom Hanks', 'Gary Sinise',
    ),
  ),
  array(
    'nom' => '12 hommes en colere',
    'date' => 1957,
    'realisateur' => 'Sidney Lumet',
    'acteurs' => array(
      	'Henry Fonda','Martin Balsam','John Fiedler','Lee J. Cobb','E.G. Marshall',
    ),
  ),
);

echo '12.Mes films : <br>';
foreach ($videotheque as $movies) {
    echo "<br>".$movies['nom'] . " ". $movies['date'] . " " . $movies["realisateur"] . " "  . "<br>";
    echo "<br>";
    foreach ($movies['acteurs'] as $actor) {
        echo $actor . "<br>";
    }
}
echo '<br><br>';

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//d'informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici
$videotheque = array(
    array(
        'nom' => 'La ligne verte',
        'date' => 2000,
        'realisateur' => 'Frank Darabont',
        'acteurs' => array(
            'Tom Hanks',
            'Michael Duncan',
            'David Morse',
        ),
        'synopsis' => "Paul Edgecomb, pensionnaire centenaire d'une maison de retraite, est hanté par ses souvenirs. 
         Gardien-chef du pénitencier de Cold Mountain en 1935, il était chargé de veiller au bon déroulement des
         exécutions capitales en s’efforçant d'adoucir les derniers moments des condamnés. ",
    ),
    array(
        'nom' => 'Le pari',
        'date' => 1997,
        'realisateur' => 'Didier Bourdon',
        'acteurs' => array(
            'Didier Bourdon',
            'Bernard Campan',
            'Roger Ilbanez',
        ),
        'synopsis' => "Bernard est professeur dans une banlieue et vit avec Victoria. Didier est un riche pharmacien du 
         XIXe arrondissement de Paris, marié à Murielle, la soeur de Victoria. Tout oppose les deux beaux-freres et 
         ils se détestent.",
    ),
    array(
        'nom' => 'Spider-Man',
        'date' => 2021,
        'realisateur' => 'Jon Watts',
        'acteurs' => array(
            'Tom Holland',
            'Zendaya',
        ),
        'synopsis' => "Pour la première fois dans son histoire cinématographique, Spider-Man, le héros sympa du 
         quartier est démasqué et ne peut désormais plus séparer sa vie normale de ses lourdes responsabilités de 
         super-héros. Quand il demande de l'aide à Doctor Strange, les enjeux deviennent encore plus dangereux, 
         le forçant à découvrir ce qu'être Spider-Man signifie véritablement.",
    ),
);
foreach ($videotheque as $movies) {
    echo "<br>".$movies['nom'] . " ". $movies['date'] . " " . $movies["realisateur"] . " "  . "<br>";
    echo "<br>";
    foreach ($movies['acteurs'] as $actor) {
        echo $actor . "<br>";
    }
}
echo '<br><br>';
