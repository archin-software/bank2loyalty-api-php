<?php

namespace Bank2Loyalty\Security;

use Exception;


class HashValidator
{
    /**
     * Validate the hash of the request based on the body
     *
     * @param ?string $body
     * @return bool
     * @throws Exception
     */
    public static function validate(?string $body)
    {
        // Sent hash
        if (!isset($_SERVER['HTTP_HASH'])) {
            return false;
        }

        $hash = $_SERVER['HTTP_HASH'];

        $hashPassword = getenv('HASH_PASSWORD');
        if (!$hashPassword) {
            throw new Exception('Please setup your hash password');
        }

        // Calculate own hash
        $ownHash = hash('sha512', $hashPassword . $body);

        // Validate
        return $ownHash === $hash;
    }
}
