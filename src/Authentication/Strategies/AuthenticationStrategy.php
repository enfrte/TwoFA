<?php

namespace TwoFa\Authentication\Strategies;

interface AuthenticationStrategy {
    public function authenticate($user);
}
