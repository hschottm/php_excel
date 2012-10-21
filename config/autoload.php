<?php

/**
 * Contao Open Source CMS
 * 
 * Copyright (C) 2005-2012 Leo Feyer
 * 
 * @package Php_excel
 * @link    http://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'PHPExcel'                   => 'system/modules/php_excel/vendor/PHPExcel.php',
	'PHPExcel_Writer_Excel2007'  => 'system/modules/php_excel/vendor/PHPExcel/Writer/Excel2007.php',
));
