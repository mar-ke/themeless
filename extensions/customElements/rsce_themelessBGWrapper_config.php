<?php

return array(
	'label' => array(
		'Hintergrund-Wrapper [ANFANG]',
		'',
	),
	'types' => array('content', 'module'),
	'standardFields' => array('cssID', 'space'),
	'wrapper' => array(
		'type' => 'start',
	),
	'fields' => array(

		'containerSize' => array(
			'label' => array('Container-Size', 'Wenn der Artikel auf fullWidth steht, der Inhalt jedoch die definierte Container-Breite haben soll, empfiehlt sich diese Einstellung.'),
			'inputType' => 'checkbox',
			'sql' => array(
				'type' => 'boolean',
				'default' => false,
			),
			'eval' => array(
				'tl_class'=>'w50', 
			),
		),
		
		'maxWidth' => array(
			'label' => array('Individuelle Max-Breite', 'Hier wird die CCS-Eingeschaft max-width vergeben. Hier können Werte wie: 90%, 800px, 60vw, ... vergeben werden.'),
			'inputType' => 'text',
			'eval' => array(
				'tl_class'=>'w50', 
				'maxlength'=>255,

			),
			'sql' => "varchar(255) NOT NULL default ''",
		),
		
		'singleSRC' => array(
			'label' => array('Hintergrund Bild', ''),
			'exclude'   => true,
			'inputType' => 'fileTree',
			'eval'      => array(
				'filesOnly'  => true,
				'fieldType'  => 'radio',
				'extensions' => 'jpg,png,gif,webp',
				'tl_class' => 'cbx clr'
			),
			'sql'       => "binary(16) NULL"
		),
	
		'bgSettings' => array(
			'label' => array('Hintergrund Styling', 'Hier können Inline-Styles für den Hintergrund eingegeben werden. background-size: cover; background-position: center; ...'),
			'inputType' => 'text',
			'eval' => array(
				'maxlength'=>255
			),
			'sql' => "varchar(255) NOT NULL default ''",
		),
		
		'bgColorCode' => array(
			'label' => array('Individuelle Hintergrundfarbe', 'Hier wird die CCS-Eingeschaft background-color vergeben. Hier können Werte wie: #f00, red, rgb(0,255,0), ... vergeben werden.'),
			'inputType' => 'text',
			'eval' => array(
				'tl_class'=>'w50', 
				'maxlength'=>255,
				'colorpicker'=>true,

			),
			'sql' => "varchar(255) NOT NULL default ''",
		),
		
		'bgColorClass' => array(
			'label' => array('Hintergrund Farbe', ''),
			'inputType' => 'select',
			'options' => array(
				'' => 'Kein Hintergrund',
				'bgMain' => 'Hauptfarbe',
				'bgSecond' => 'Zweitfarbe',
				'bgWhite' => 'Weiß',
				'bgLightgray' => 'Hellgrau',
				'bgGray' => 'Grau',
				'bgDarkgray' => 'Dunkelgrau',
				'bgBlack' => 'Schwarz',

			),
			'eval' => array('tl_class' => 'w50'),
		),

	),
);








