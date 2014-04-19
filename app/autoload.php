<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';

//$loader->registerPrefixes(array(
//    'Fpdf_' => __DIR__.'/../vendor/fpdf/lib',
//));

//Use if PDF libraries needed
//$loader->add('Fpdf_', __DIR__.'/../vendor/fpdf/lib');
//set_include_path(__DIR__.'/../vendor/fpdf/lib'.PATH_SEPARATOR.get_include_path());
//
//$loader->add('Tcpdf_', __DIR__.'/../vendor/tcpdf/lib');
//set_include_path(__DIR__.'/../vendor/tcpdf/lib'.PATH_SEPARATOR.get_include_path());

AnnotationRegistry::registerLoader(array($loader, 'loadClass'));

return $loader;
