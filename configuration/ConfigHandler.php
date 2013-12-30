<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ConfigHandler
 *
 * @author yamisaaf
 */
class ConfigHandler {

    //put your code here
    public $_value = array();
    public $_valeur = array();
    public $_connexion = array();

    public function loadFileConfig($fileConfig) {

        if (is_array($fileConfig)) {
            foreach ($fileConfig as $v) {

                $file = require $v;
                $this->setConfig($v, $file);
            }
        }
    }

    public function DefaultPage($page) {
        foreach ($page as $k => $v) {
            $this->addPage($k, $v);
        }
    }

    public function Connexion($value) {
        foreach ($value as $k => $v) {
            $this->addConnexion($k, $v);
        }
    }

    public function addConnexion($key, $value) {
        $this->_connexion[$key] = $value;
    }

    public function getConnexion($key) {
        return $this->_connexion[$key];
    }

    public function addPage($key, $value) {
        $this->_valeur[$key] = $value;
    }

    public function getPage($key) {
        return $this->_valeur[$key];
    }

    public function setConfig($name, $file) {
        $data = explode('.', $name);
        $nom = ucfirst($data[0]);
        return $this->_value[$nom] = $file;
    }

    public function get($file) {
        $name = ucfirst($file);
        return (object) $this->_value[$name];
    }

}
