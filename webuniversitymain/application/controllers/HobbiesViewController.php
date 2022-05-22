<?php

require 'application/controllers/BaseViewController.php';
require_once 'application/views/core/View.php';
require 'application/config/hobbies.php';
require 'application/core/Models/DataModel.php';

class HobbiesViewController extends ViewController {

    private $hobbies = [];

    

    function index() {

        $data = new DataModel;
        
        for ($i=0; $i < 3; $i++) { 
            array_push($this->hobbies, createHobbie($data->hobbiesNames[$i],$data->hobbiesDescriptions[$i],$data->hobbiesImgPath[$i], $i));
        }

        return new View($this->route, $this->hobbies);
    }
}