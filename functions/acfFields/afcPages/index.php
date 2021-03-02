<?php
  
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
