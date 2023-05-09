<?php return array(
    'root' => array(
        'name' => 'getgrav/email-sendinblue',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'grav-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'getgrav/email-sendinblue' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'grav-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'psr/event-dispatcher' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'symfony/deprecation-contracts' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'symfony/http-client' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'symfony/mailer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'symfony/polyfill-php80' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'symfony/sendinblue-mailer' => array(
            'pretty_version' => 'v5.4.8',
            'version' => '5.4.8.0',
            'reference' => '3663724b2cd2f8913fee974d1c8c2260d81ba7a1',
            'type' => 'symfony-mailer-bridge',
            'install_path' => __DIR__ . '/../symfony/sendinblue-mailer',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
    ),
);
