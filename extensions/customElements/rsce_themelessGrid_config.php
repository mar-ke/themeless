<?php

return array(
	'label' => array(
		'Grid-Wrapper [ANFANG]',
		'',
	),
	'types' => array('content', 'module'),
	'standardFields' => array('cssID', 'space'),
	'wrapper' => array(
		'type' => 'start',
	),
	'fields' => array(
		'grid' => array(
			'label' => array('Grid auswählen', ''),
			'inputType' => 'select',
			'options' => array(
				'' => 'Eine Spalte',
				'grid2Col' => 'Zwei Spalten',
				'grid3Col' => 'Drei Spalten',
				'grid4Col' => 'Vier Spalten',
				'grid5Col' => 'Fünf Spalten',
				'grid6Col' => 'Sechs Spalten',
				'grid-66-33' => 'Zwei Spalten (66% 33%)',
				'grid-33-66' => 'Zwei Spalten (33% 66%)',
			),
			'eval' => array('tl_class' => 'w50'),
		),
		'gridTablet' => array(
			'label' => array('Grid für Tablet-Große auswählen', ''),
			'inputType' => 'select',
			'options' => array(
				'grid1ColTablet' => 'Eine Spalte',
				'grid2ColTablet' => 'Zwei Spalten',
				'grid3ColTablet' => 'Drei Spalten',
				'grid4ColTablet' => 'Vier Spalten',
				'grid5ColTablet' => 'Fünf Spalten',
				'grid6ColTablet' => 'Sechs Spalten',
				'grid-66-33Tablet' => 'Zwei Spalten (66% 33%)',
				'grid-33-66Tablet' => 'Zwei Spalten (33% 66%)',
			),
			'eval' => array('tl_class' => 'w50'),
		),
		'gridSmartphone' => array(
			'label' => array('Grid auswählen', ''),
			'inputType' => 'select',
			'options' => array(
				'grid1ColSmartphone' => 'Eine Spalte',
				'grid2ColSmartphone' => 'Zwei Spalten',
				'grid3ColSmartphone' => 'Drei Spalten',
				'grid4ColSmartphone' => 'Vier Spalten',
				'grid5ColSmartphone' => 'Fünf Spalten',
				'grid6ColSmartphone' => 'Sechs Spalten',
				'grid-66-33Smartphone' => 'Zwei Spalten (66% 33%)',
				'grid-33-66Smartphone' => 'Zwei Spalten (33% 66%)',
			),
			'eval' => array('tl_class' => 'w50'),
		),
		'placeContent' => array(
			'label' => array('Inhalt ausrichten', ''),
			'inputType' => 'select',
			'options' => array(
				'' => 'Ausrichtung wählen',
				'baseline' => 'Oben',
				'center' => 'Mitte',
				'end' => 'unten',
			),
			'eval' => array('tl_class' => 'w50'),
		),
	),
);