<?php
$EM_CONF[$_EXTKEY] = array(
	'title' => 'Faceted Search',
	'description' => 'Faceted fulltext search for TYPO3. Fast, flexible and easy to use. Very easy to install. Fast (tested with over 200.000 records) and flexible (you can write your own indexers). Indexes content directly from the databases. Visit kesearch.de for further information and documentation.',
	'category' => 'plugin',
	'shy' => 0,
	'version' => '2.3.0',
	'dependencies' => '',
	'conflicts' => '',
	'priority' => '',
	'loadOrder' => '',
	'module' => '',
	'state' => 'stable',
	'uploadfolder' => 0,
	'createDirs' => '',
	'modify_tables' => '',
	'clearcacheonload' => 0,
	'lockType' => '',
	'author' => 'Christian Buelter (team.inmedias)',
	'author_email' => 'christian.buelter@inmedias.de',
	'author_company' => 'team.inmedias',
	'CGLcompliance' => '',
	'CGLcompliance_note' => '',
	'constraints' => array(
		'depends' => array(
		    'php' => '5.5.0-7.1.99',
		    'typo3' => '7.6.0-7.99.99',
		),
		'conflicts' => array(
		),
		'suggests' => array(
		),
	),
	'suggests' => array(
	),
	'autoload' => array(
		'psr-4' => array('TeaminmediasPluswerk\\KeSearch\\' => 'Classes'),
		'classmap' => array('Classes', 'cli', 'pi1', 'pi2', 'pi3'),
	),
);
