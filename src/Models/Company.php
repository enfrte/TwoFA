<?php 

namespace TwoFa\Models;

class Company {
    public function is2FAEnforced() {
		$twoFA = (bool)rand(0, 1);
        // Return true if 2FA is enforced for this company
        return $twoFA; // Placeholder
    }

    public function usesSso() {
        // Return true if this company uses SSO
        return false; // Placeholder
    }
}
