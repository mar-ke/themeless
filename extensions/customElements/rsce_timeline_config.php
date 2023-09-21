<?php

return array(
    'label' => array('Timeline', ''),
    'types' => array('content'),
    'contentCategory' => 'themeless',
    'standardFields' => array('headline', 'cssID'),
    'fields' => array(
        'boxes' => array(
            'label' => array('Textboxen', ''),
            'elementLabel' => '%s. Box',
            'inputType' => 'list',
            'minItems' => 1,
            'maxItems' => 18,
            'fields' => array(
                'tlHeadline' => array(
                    'label' => array('Überschrift', ''),
                    'inputType' => 'text',
                ),
                'text' => array(
                    'label' => array('Text', ''),
                    'eval' => array('rte' => 'tinyMCE'),
                    'inputType' => 'textarea',
                ),
            ),
        ),
    ),
);