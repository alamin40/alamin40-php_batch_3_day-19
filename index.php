<?php

require_once 'vendor/autoload.php';
use App\classes\Auth;


$home = new Auth();
$home->login();