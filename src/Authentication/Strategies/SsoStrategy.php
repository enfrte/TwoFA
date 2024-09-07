<?php 

namespace TwoFa\Authentication\Strategies;

class SsoStrategy implements AuthenticationStrategy {
    public function authenticate($user) {
        // Implement SSO authentication logic
        echo "SSO login not implemented yet.";
        return true; // Placeholder for SSO login
    }
}
