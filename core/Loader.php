<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LoaderClass
 *
 * @author yamisaaf
 */
class Loader {

    //put your code here
    public function model($file) {
        require_once BASE . 'content' . DS . 'Model' . DS . ucfirst($file) . EXT;
    }

    public function libs($file) {
        require_once BASE . 'librairie' . DS . $file . EXT;
    }

}
