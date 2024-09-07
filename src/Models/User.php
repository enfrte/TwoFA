<?php

namespace TwoFa\Models;

class User {
    private $username;
    private $company;
    private $is2FAEnabled;
    private $totpSecret = '';

    public function __construct($username) {
        $this->username = $username;
        $this->company = new Company(); // Placeholder for company retrieval logic
    }

    public function getCompany() {
        return $this->company;
    }

    public function is2FAEnabled() {
        $this->is2FAEnabled = (bool) rand(0, 1);
        return $this->is2FAEnabled;
    }

    public function getTOTPSecret() {
        return $this->totpSecret;
    }
}