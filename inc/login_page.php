<?php

//custom admin login logo
function custom_login_logo() {
    echo '<style type="text/css">
        h1 a
        {
            background-image: url(' .get_bloginfo('template_directory').'/assets/img/wpack.png) !important;
            width: 185px !important;
            height: 185px !important;
            background-size: 160px !important;
            background-position: center !important;
        }
        #login{
            max-width: 410px;
            width: 100%;
            padding: 3% 0 0;
            }
        body.login
        {
        background: #fff;
        }
        .wp-core-ui .button-primary{
            background: #263441;
            border-color:#263441;
            float: none !important;
            width: 100%;
            margin-top: 22px;
            box-shadow:none !important;
            height: 55px;
            border-radius: 0;
        }
        .login form{
            box-shadow: 0 93px 99px rgba(0, 0, 0, .2);
            border: 0;
            position: relative;
        }
        .login form .input:focus{
            border-color: #213e58;
            box-shadow: 0 0 0 1px #213e58;
        }
        .dashicons-visibility:before{
            color: #737373;
        }
        .wp-core-ui .button-primary:hover,
        .wp-core-ui .button-primary:focus,
        .wp-core-ui .button-primary:active{
            background: #213e58;
            border-color: #213e58;
        }
    </style>';
    }
add_action('login_head', 'custom_login_logo');