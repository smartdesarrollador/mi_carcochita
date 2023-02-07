<?php

/**
 * Get the client
 */
require_once __DIR__ . '/vendor/autoload.php';

/**
 * Define configuration
 */

/* Username, password and endpoint used for server to server web-service calls */
Lyra\Client::setDefaultUsername("95116566");
Lyra\Client::setDefaultPassword("testpassword_GLhLmJDB69ZCqJeD9X3IgrjViasnIZC9bmoHWZGqIoQF3");
Lyra\Client::setDefaultEndpoint("https://api.micuentaweb.pe");


/* publicKey and used by the javascript client */
Lyra\Client::setDefaultPublicKey("95116566:testpublickey_EJaEuYbjnvWufiYkxJWApRDqut03Kib04kYmd6wJkgkyb");


/* SHA256 key */
Lyra\Client::setDefaultSHA256Key("e1CsEazSKBEVF8qcuZ9BHZLFU9qXHkV6Mvkw7h4JgzuhP");
