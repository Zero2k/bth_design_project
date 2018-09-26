<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",
    
    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/default.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "css/style.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "custom"     =>  [
            "title"      => "Theme with fixed width",
            "class"      => "custom",
            "stylesheets" => [
                "css/style1.min.css"
            ]
        ],

        "alternative"     => [
            "title"      => "Alternative style",
            "class"      => "alternative",
            "stylesheets" => [
                "css/style2.min.css"
            ]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => []
        ],
    ]
];
