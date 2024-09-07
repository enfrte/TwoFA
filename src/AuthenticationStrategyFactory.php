<?php 

namespace TwoFa;

use TwoFa\Authentication\Strategies\Enforce2FAStrategy;
use TwoFa\Authentication\Strategies\SsoStrategy;
use TwoFa\Authentication\Strategies\No2FAStrategy;

class AuthenticationStrategyFactory {
    public static function createStrategy($company) {
        if ($company->is2FAEnforced()) {
            return new Enforce2FAStrategy();
        } elseif ($company->usesSso()) {
            return new SsoStrategy();
        } else {
            return new No2FAStrategy();
        }
    }
}
