<?php



hook_into_swapi_array("swapi_customer_template_html_inside_swapi_section_container", function( array $passthrough ) {

    $html = $passthrough["html"][$passthrough["READONLY_contentidentifier"]];

    $html = 'BEFORE' . $html . 'AFTER'; // Mache was

    $passthrough["html"][$passthrough["READONLY_contentidentifier"]] = $html;

    return (array) $passthrough;

}, 10);



?>
