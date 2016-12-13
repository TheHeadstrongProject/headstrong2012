<?php

if (function_exists("register_field_group")) {
    register_field_group(array (
        'id' => 'acf_donate-thermometer',
        'title' => 'Donate Thermometer',
        'fields' => array (
            array (
                'key' => 'field_58502518c2517',
                'label' => 'Copy',
                'name' => 'donate_thermometer_copy',
                'type' => 'text',
                'instructions' => 'Fill in the copy.',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'formatting' => 'none',
                'maxlength' => '',
            ),
            array (
                'key' => 'field_58502609c2518',
                'label' => 'Progress',
                'name' => 'donate_thermometer_progress',
                'type' => 'number',
                'instructions' => 'Fill in the current progress. It must be a number.',
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'min' => '',
                'max' => '',
                'step' => '',
            ),
        ),
        'location' => array (
            array (
                array (
                    'param' => 'page',
                    'operator' => '==',
                    'value' => '16', // "Donate" page id
                    'order_no' => 0,
                    'group_no' => 0,
                ),
            ),
        ),
        'options' => array (
            'position' => 'normal',
            'layout' => 'default',
            'hide_on_screen' => array (
            ),
        ),
        'menu_order' => 0,
    ));
}
