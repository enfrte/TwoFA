<?php

namespace TwoFa;

use TwoFa\Authenticator;

require __DIR__ . '../vendor/autoload.php';

$authenticator = new Authenticator();
$authenticator->login('user1', 'password123');

