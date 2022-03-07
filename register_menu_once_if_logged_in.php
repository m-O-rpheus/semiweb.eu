<?php



hook_into_swapi_array("swapi_customer_template_html_inside_swapi_section_container", function( array $passthrough ) {

    if ( php_session_is_logged_in() ) {



        $menu = "<ul>";
            $menu .= "<li>" . MODULE_PLUGIN_intern_extern_link( "_LOGGEDIN_menu1.php", "Menu 1" ) . "</li>";
            $menu .= "<li>" . MODULE_PLUGIN_intern_extern_link( "_LOGGEDIN_menu2.php", "Menu 2" ) . "</li>";
            $menu .= "<li>" . MODULE_PLUGIN_intern_extern_link( "_LOGGEDIN_menu3.php", "Menu 3" ) . "</li>";
            $menu .= "<li>" . MODULE_PLUGIN_intern_extern_link( "_LOGGEDIN_menu4.php", "Menu 4" ) . "</li>";
            $menu .= "<li>" . MODULE_PLUGIN_intern_extern_link( "_LOGGEDIN_menu5.php", "Menu 5" ) . "</li>";
        $menu .= "</ul>";



        $passthrough["html"][array_keys($passthrough["html"])[0]] .= $menu;
    }

    return (array) $passthrough;

}, 10);



?>
