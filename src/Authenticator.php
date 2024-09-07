<?php

namespace TwoFa;

use TwoFa\Models\User;
use TwoFa\AuthenticationStrategyFactory;

class Authenticator {
    public function login($username, $password = null) {
        // Get user by username
        $user = $this->getUserByUsername($username);

        // Assuming you already have the user, obtain their company
        $company = $user->getCompany();

        // Get the appropriate authentication strategy from the factory
        $strategy = AuthenticationStrategyFactory::createStrategy($company);

        // Perform authentication
        return $strategy->authenticate($user);
    }

    private function getUserByUsername($username) {
        // Retrieve the user from the database based on username
        // This is a placeholder for the actual retrieval logic
        return new User($username); // Placeholder
    }
}
