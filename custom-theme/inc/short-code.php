<?php 
// Create Shortcode for adding the CopyRight Text with year.
/**
* This Method is useful for creating the custom shortcode of the copyright text with year.
* @return string
**/
function copyright_text_year() {
$year = date('Y');
return 'Copyright © '.$year.' Mobio Solutions. All rights reserved.';
}
/**
* This method is used to add the hook for the shortcode tag.
*@param string  $tag CopyrightTextWithYear. Here just keep a note that use this name without underscore,space and hypen otherwise it won't work.
*@param string  $func copyright_text_year
**/
add_shortcode( 'CopyrightTextWithYear', 'copyright_text_year' );
?>