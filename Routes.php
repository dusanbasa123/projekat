<?php
    return [
        [
            'Pattern'    => '|^product/([0-9]+)/?$|',
            'Controller' => 'Product',
            'Method'     => 'view'
        ],
        [
            'Pattern'    => '|^category/([0-9]+)/?$|',
            'Controller' => 'Category',
            'Method'     => 'view'
        ],
        [
            'Pattern'    => '|^login/?$|',
            'Controller' => 'Main',
            'Method'     => 'login'
        ],
        [
            'Pattern'    => '|^logout/?$|',
            'Controller' => 'Main',
            'Method'     => 'logout'
        ],
        [
            'Pattern'    => '|^kontakt/?$|',
            'Controller' => 'Main',
            'Method'     => 'kontakt'
        ],

        # Rute za administratore
        [
            'Pattern'    => '|^admin/categories/store/}?$|',
            'Controller' => 'AdminCategory',
            'Method'     => 'store'
        ],
        [
            'Pattern'    => '|^admin/categories/edit/[0-9]+}?$|',
            'Controller' => 'AdminCategory',
            'Method'     => 'edit'
        ],
        [
            'Pattern'    => '|^admin/categories/delete/[0-9]+}?$|',
            'Controller' => 'AdminCategory',
            'Method'     => 'delete'
        ],
        [
            'Pattern'    => '|^admin/devices/store/?$|',
            'Controller' => 'AdminProducts',
            'Method'     => 'store'
        ],  
        [
            'Pattern'    => '|^admin/devices/edit/[0-9]+}?$|',
            'Controller' => 'AdminProducts',
            'Method'     => 'edit'
        ],
        [
            'Pattern'    => '|^admin/devices/delete/[0-9]+}?$|',
            'Controller' => 'AdminProducts',
            'Method'     => 'delete'
        ],
        [
            'Pattern'    => '|^admin/specifications/store/?$|',
            'Controller' => 'AdminSpecifications',
            'Method'     => 'store'
        ],
        [
            'Pattern'    => '|^admin/specifications/edit/[0-9]+}?$|',
            'Controller' => 'AdminSpecifications',
            'Method'     => 'edit'
        ],
        [
            'Pattern'    => '|^admin/specifications/delete/[0-9]+}?$|',
            'Controller' => 'AdminSpecifications',
            'Method'     => 'delete'
        ],
        [
            'Pattern'    => '|^admin/$|',
            'Controller' => 'AdminAll',
            'Method'     => 'index'
        ],
        [
            'Pattern'    => '|^.*$|',
            'Controller' => 'Main',
            'Method'     => 'index'
        ]
    ];
