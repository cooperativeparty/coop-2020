<?php //Add color presets for Beaver Builder
function my_builder_color_presets( $colors ) {
    $colors = array();
      
      $colors[] = 'E42312';
      $colors[] = 'FF7F32';
      $colors[] = 'FFC431';
      $colors[] = '00B052';
      $colors[] = '00884A';
      $colors[] = '00B0B9';
      $colors[] = '009CDE';
      $colors[] = '00158A';
      $colors[] = 'C1AAE0';
      $colors[] = '3F1D70';
      $colors[] = 'FFFFFF';
      $colors[] = '000000';
      $colors[] = '3C484D';
      $colors[] = '9FACB2';
      $colors[] = 'D5DDE0';
  
    return $colors;
}
add_filter( 'fl_builder_color_presets', 'my_builder_color_presets' );