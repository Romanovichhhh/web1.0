<?php

require 'application/core/Models/Hobbie.php';

function createHobbie($name, $description, $filepath, $tag) {

    return new Hobbie($name, $description, $filepath, $tag);
}