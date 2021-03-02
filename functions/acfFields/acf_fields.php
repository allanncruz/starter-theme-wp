<?php
  
  /*
   More Informations
   https://www.advancedcustomfields.com/resources/register-fields-via-php/#field-type%20settings
*/

if (function_exists('acf_add_local_field_group')) :
  
  // Fields for Pages
  include('afcPages/index.php');

  // Fields for post
  include('afcPost/index.php');
  
endif;
