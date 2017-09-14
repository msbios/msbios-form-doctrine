<?php
/**
 * @access protected
 * @author Judzhin Miles <info[woof-woof]msbios.com>
 */

namespace MSBios\Form\Doctrine;

return [

    'form_elements' => [
        'initializers' => [
            new Initializer\ObjectManagerInitializer
        ],
    ],

    Module::class => [

    ]
];
