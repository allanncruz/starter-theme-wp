<?php
  
  /*
   More Informations
   https://www.advancedcustomfields.com/resources/register-fields-via-php/#field-type%20settings
*/

if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'group_5dcdd01e7c3f6',
        'title' => 'Botões',
        'fields' => array(
            array(
                'key' => 'field_5dd3355607954',
                'label' => 'Botão Primário',
                'name' => 'vitrine-btn-primary',
                'type' => 'link',
            ),
            array(
                'key' => 'field_5dd3355607854',
                'label' => 'Botão Secundário',
                'name' => 'vitrine-btn-secondary',
                'type' => 'link',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'showcase',
                ),
            ),
        ),
        'position' => 'normal', //acf_after_title, normal
        'style' => 'default', //seamless, default
    ));

    acf_add_local_field_group(array(
        'key' => 'group_5dcdd01e7c2f6',
        'title' => 'Relação',
        'fields' => array(
            array(
                'key' => 'field_5dd3355707954',
                'label' => 'Post Relacionado',
                'name' => 'showcase-relationship',
                'type' => 'relationship',
                'filters' => 'search',
                'post_type' => 'showcase',
            ),
            array(
                'key' => 'field_5dd3355607854',
                'label' => 'Botão Secundário',
                'name' => 'vitrine-btn-secondary',
                'type' => 'link',
                'instructions' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'blog',
                ),
            ),
        ),
        'position' => 'normal',  //acf_after_title, normal
        'style' => 'default', //seamless, default
    ));

    //Fields for page
    acf_add_local_field_group(array(
        'key' => 'group_5dcdd01e7c3f8',
        'title' => 'Subtítulo',
        'fields' => array(
            array(
                'key' => 'field_5dd3355607956',
                'label' => 'Subtítulo',
                'name' => 'page-subtitle',
                'type' => 'text',
                'instructions' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'index.php',
                ),
            ),
        ),
        'position' => 'acf_after_title',  //acf_after_title, normal
        'style' => 'seamless', //seamless, default
    ));

endif;
