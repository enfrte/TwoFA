<?php

namespace TwoFa\Authentication\Strategies;

use TwoFa\Models\User;

interface AuthenticationStrategy {
    public function authenticate(User $user);
}
