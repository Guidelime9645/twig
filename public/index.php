<?php

require_once '../vendor/autoload.php';
$loader = new Twig\Loader\FilesystemLoader('../src/view/');
$twig = new Twig\Environment($loader);
$jeux = ['jeu1', 'jeux2', 'jeu3', 'jeu4', 'jeu5'];
echo $twig->render('index.html.twig', ['jeux' => $jeux]);