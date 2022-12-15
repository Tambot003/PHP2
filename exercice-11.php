<h1 style="color: #00FF00;  ">
    Exercice 11
</h1>
<h3 style="color: #229954; ">Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.</h3>
<hr>

<?php

$now = new DateTime();
// echo $now->format("l d F Y");

$fmt = new IntlDateFormatter(
    'fr_FR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::MEDIUM,
    'Europe/Paris',
    IntlDateFormatter::GREGORIAN
);

echo $fmt->format($now);