<?php

use Model\Person;

require_once($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php");
$id = $_REQUEST["id"];
echo Person::findById($id);
