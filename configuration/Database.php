<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

try {

    $bdd = new PDO('mysql:host=' . $HandlerClass->Database->host . ';dbname=' . $HandlerClass->Database->database . '', '' . $HandlerClass->Database->username . '', '' . $HandlerClass->Database->password . '');
    $bdd->query('SET NAMES utf8');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo 'Le probléme est sur la base de donnée veuillez revoir la configuration';
}

