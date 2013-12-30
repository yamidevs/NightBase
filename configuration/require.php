<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$this->ConfigHandler->loadFileConfig(array(
    'config.php'
));
$this->ConfigHandler->DefaultPage(array(
    'Acceuil' => 'index',
    'Erreur' => 'erreur'
));
$this->ConfigHandler->Connexion(array(
    'host' => 'localhost',
    'username' => 'root',
    'password' => '',
    'database' => 'noukta'
));



