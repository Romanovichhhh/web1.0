<?php

require 'application/controllers/BaseViewController.php';
require_once 'application/views/core/View.php';
require_once 'application/core/Validators/ResultsVerification.php';

class TestViewController extends ViewController {

    function index() {
        return new View($this->route);
    }

    private $validator;

    function __construct($route)
    {
        parent::__construct($route);
        $this->validator = new ResultsVerification;
    }

    function send() {
        if(!empty($_POST)) {
            $this->validator->checkAns($_POST);
            if($this->validator->getResult() > 2) {
                return new View([
                    'controller' => 'TestViewController',
                    'action' => "success"
                ]);
            }
        }

        return new View([
            'controller' => 'TestViewController',
            'action' => "index"
        ]);
    }
}