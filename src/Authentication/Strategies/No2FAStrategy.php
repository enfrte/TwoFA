<?php

namespace TwoFa\Authentication\Strategies;

use TwoFa\Models\User;

class No2FAStrategy implements AuthenticationStrategy {
    public function authenticate(User $user) {
        echo 'No 2FA login';
        // No 2FA required, just allow login
        return true; // or redirect to the application
    }
}
