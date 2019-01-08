<?php
$personnes=[
       'personne_1'=> [
        'nom'=>'abed',
        'prenom'=>'amel',
        'age'=>27
         ],
        'personne_2'=>[
        'nom'=>'delabrousse',
        'prenom'=>'françois',
        'age'=>30
            ],
        'personne_2'=>[
        'nom'=>'hellio',
        'prenom'=>'lily',
        'age'=>30,
        ],

];
foreach ($personnes as  $personne)
{
         if ($personne['age']>18)
            {
                  echo $personne['key']."\n";
            }
}