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
Lyra\Client::setDefaultPassword("prodpassword_H7VXFqq7pd3RAvCbWB1XNVIW6Zt0iHUVKx06hbdRAh4UI");
Lyra\Client::setDefaultEndpoint("https://api.micuentaweb.pe");


/* publicKey and used by the javascript client */
Lyra\Client::setDefaultPublicKey("95116566:publickey_00v2O23GAhZYUNHy7oJMpa4E8zxVVoXujhSUysuZjaG0L");

/* SHA256 key */
Lyra\Client::setDefaultSHA256Key("ct0ls5EpKX8i3LwSHj2vPEBL66920waY0cYwOGqQwoHfI");
