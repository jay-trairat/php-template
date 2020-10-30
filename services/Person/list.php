<?php

use Model\Person;

require_once($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php");

echo Person::findAll();
