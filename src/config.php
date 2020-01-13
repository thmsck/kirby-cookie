<?php
/**
 *
 */

Kirby::Plugin('thmsck/cookie', [
    'translations' => [
        'en' => [
            'thmsck.cookie.text'       => 'This website uses cookies to ensure you get the best experience on our website.',
            'thmsck.cookie.linkText'   => 'More info',
            'thmsck.cookie.buttonText' => 'Got It!',
        ],
        'de' => [
            'thmsck.cookie.text'       => 'Diese Website benutzt Cookies, die für den technischen Betrieb der Website erforderlich sind und stets gesetzt werden. Andere Cookies, die den Komfort bei Benutzung dieser Website erhöhen, der Direktwerbung dienen oder die Interaktion mit anderen Websites und sozialen Netzwerken vereinfachen sollen, werden nur mit Ihrer Zustimmung gesetzt.',
            'thmsck.cookie.linkText'   => 'Mehr Informationen',
            'thmsck.cookie.buttonText' => 'Ich habe verstanden',
        ]
    ],
    'snippets'     => [
        'cookie' => __DIR__ . '/snippets/cookie.php'
    ]
]);