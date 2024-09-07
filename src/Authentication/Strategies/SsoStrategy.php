<?php 

namespace TwoFa\Authentication\Strategies;

use TwoFa\Models\User;

class SsoStrategy implements AuthenticationStrategy {
    public function authenticate(User $user) {
        // Implement SSO authentication logic
        echo "SSO login not implemented yet.";
        return true; // Placeholder for SSO login
    }
}
