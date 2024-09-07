<?php

namespace TwoFa\Authentication\Strategies;

class No2FAStrategy implements AuthenticationStrategy {
    public function authenticate($user) {
        // No 2FA required, just allow login
        return true; // or redirect to the application
    }
}
