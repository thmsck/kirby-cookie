<?php
/**
 *
 */

Kirby::Plugin('thmsck/cookie', [
    'translations' => [
        'en' => [
            'thmsck.cookie.text'       => 'This website uses cookies, which are necessary for the technical operation of the website and are always set. Other cookies, which increase the comfort when using this website, are used for direct advertising or are intended to facilitate interaction with other websites and social networks, are only set with your consent.',
            'thmsck.cookie.linkText'   => 'More informations',
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