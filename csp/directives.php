<?php

/*
 * Content-Security-Policy
 *
 * https://content-security-policy.com/
 */

$directives = array(
    'default-src' => array(
        "'self'"
    ),
    'script-src' => array(
        "'self'",
        "'unsafe-inline'",
        //"'nonce-salutation'",
        "https://*.googleapis.com",
        "http://html5shiv.googlecode.com",
        "data: "
    ),
    'style-src' => array(
        "'self'",
        "'unsafe-inline'",
        "https://ajax.googleapis.com",
        "data: "
    ),
    'img-src' => array(
        "'self'",
        "https://*.fbcdn.net",
        "https://upload.wikimedia.org"
    ),
    'frame-src' => array(
        "'self'"
    ),
);
/*
 * DO NOT CHANGE BELOW THIS LINE
 *
 * ============================================================
 *
 * WORKS AS EXPECTED!!!
 *
 */
$policy = '';
foreach ($directives as $directive => $values) {
    $policy .= $directive . ' ' . implode(" ", $values) . '; ';
}

$policy .= ("report-uri csp/report.php;");

if (ENVIROMENT == 'test') {
    header("Content-Security-Policy: " . $policy);
} else {
    header("Content-Security-Policy-Report-Only: " . $policy);
}