<?php
declare(strict_types=1);

/**
* Composer autoloading
*/
require_once __DIR__ . '/vendor/autoload.php';


// Template rendering.
$loader = new Twig_Loader_Filesystem(__DIR__ . '/templates');
$twig = new Twig_Environment($loader, array(
    'cache' => __DIR__ . '/cache',
    //'cache' => FALSE,
    'debug' => TRUE
));

$values = array(
    'strict' => array(
        'prefixForName' => addPrefixForName('Ovidijus', 'Mr.'),
        'salaryWithCommision' => salaryWhitCommission(5.2, 223, 'Samanta', 'Giedrius', 'Tomas')
    ),
    'non_strict' => array(
        'prefixForName' => addPrefixForNameNoStrict('Ms', 'Gintarė'),
        'salaryWithCommision' => salaryWhitCommissionNoStrict(5.2, 223, 'Tomas', 'Jonas', 'Petras')
    )
);
echo $twig->render('base.twig', $values);
