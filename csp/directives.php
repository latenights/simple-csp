<?php

/*
 * Content-Security-Policy
 *
 * https://content-security-policy.com/
 */

$directives = array(
    'default-src' => array(
        "'self'",
        //"googleads.g.doubleclick.net" -->google adsense
    ),
    'script-src' => array(
        "'self'",
        "'unsafe-inline'",
        "https://*.googleapis.com",
        "http://html5shiv.googlecode.com",
        "data: ",
        //"pagead2.googlesyndication.com", -->google adsense
        //"storage.googleapis.com", -->google adsense
        //"googleads.g.doubleclick.net", -->google adsense
        //"ajax.googleapis.com" -->google adsense
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
        //"storage.googleapis.com",  -->google adsense
        //"pagead2.googlesyndication.com"  -->google adsense
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