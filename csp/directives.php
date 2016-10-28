<?php

/*
 * Content-Security-Policy
 *
 * https://content-security-policy.com/
 */

$directives = array(
    'default-src' => array(
        "'self'",
        "googleads.g.doubleclick.net"
    ),
    'script-src' => array(
        "'self'",
        "'unsafe-inline'",
        "https://*.googleapis.com",
        "http://html5shiv.googlecode.com",
        "data: ",
        "pagead2.googlesyndication.com",
        "storage.googleapis.com",
        "googleads.g.doubleclick.net",
        "ajax.googleapis.com"
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
        "https://upload.wikimedia.org",
        "storage.googleapis.com",
        "pagead2.googlesyndication.com"
    ),
    'frame-src' => array(
        "'self'"
    ),
    'font-src' => array(
        "'self'",
        "fonts.googleapis.com"
    ),
    'frame-ancestors' => array(
        "'self'"
    ),
    'object-src' => array(
        "'self'"
    )
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