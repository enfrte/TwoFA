<?php

namespace TwoFa;

use TwoFa\Authenticator;

error_reporting(-1);
ini_set('display_errors', '1');

require __DIR__ . '/../vendor/autoload.php';

echo '<p>Plays out some random situations. Hit refresh to see it.</p>';

$authenticator = new Authenticator();
$authenticator->login('user1', 'password123');
