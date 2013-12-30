<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of HandlerClass
 *
 * @author yamisaaf
 */
class HandlerClass {

    //put your code here
    public $_class = array();

    public function __construct() {
        require BASE . 'core' . DS . 'ParserClass' . EXT;
        require BASE . 'configuration' . DS . 'ConfigHandler' . EXT;
        require BASE . 'core' . DS . 'Database' . EXT;
        require BASE . 'core' . DS . 'Loader' . EXT;
        $this->Handler('Database');
        $this->Handler('ParserClass');
        $this->Handler('ConfigHandler');
        $this->Handler('Loader');

        $file = require BASE . 'configuration' . DS . 'require' . EXT;
        $this->_class['ConfigHandler']->loadFileConfig($file);
        $this->_class['ParserClass']->index = $this->_class['ConfigHandler']->getPage('Acceuil');
        $this->_class['ParserClass']->erreur = $this->_class['ConfigHandler']->getPage('Erreur');
        $this->_class['Database']->host = $this->ConfigHandler->getConnexion('host');
        $this->_class['Database']->database = $this->ConfigHandler->getConnexion('database');
        $this->_class['Database']->username = $this->ConfigHandler->getConnexion('username');
        $this->_class['Database']->password = $this->ConfigHandler->getConnexion('password');
    }

    public function Handler($class) {
        $ucfirst = ucfirst($class);
        if (isset($this->_class[$class])) {
            return false;
        }
        $class = new $class;

        $this->_class[$ucfirst] = $class;
    }

//public function ExecuteConnexion()
    public function __get($nameClass) {
        if (isset($this->_class[$nameClass])) {
            return $this->_class[$nameClass];
        } else {

            throw new Exception("la class n'est pas instancier ou n'existe pas", 1);
        }
    }

}
