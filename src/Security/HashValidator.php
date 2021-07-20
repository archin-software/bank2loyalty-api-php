<?php

namespace Bank2Loyalty\Security;

class HashValidator
{
    /**
     * Validate the hash of the request based on the body
     *
     * @param ?string $body
     * @param ?string $hashPassword
     *
     * @return bool
     */
    public static function validate(?string $body, ?string $hashPassword)
    {
        // Sent hash
        if (!isset($_SERVER['HTTP_HASH'])) {
            return false;
        }

        $hash = $_SERVER['HTTP_HASH'];

        // Calculate own hash
        $ownHash = hash('sha512', $hashPassword . $body);

        // Validate
        return $ownHash === $hash;
    }
}
