<?php



hook_into_swapi_array("swapi_customer_template_html_inside_swapi_section_container", function( array $passthrough ) {

    $dynamic_page_name = 'Test123';

    if ( array_key_exists( $dynamic_page_name, $passthrough['html'] ) ) {

        $passthrough['html'][$dynamic_page_name] = "Insert or Override with Dynamic Html send via LazyLoad function";
    }

    return (array) $passthrough;

}, 2);



?>
