<?php

require 'application\core\Validators\FormValidator.php';

class TestFormValidator extends FormValidation { 

    public function CustomFormValidation() {
        $this->setRule('fullName', 'isNotEmpty');
    }
}