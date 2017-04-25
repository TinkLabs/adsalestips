<?php
if(isset($_REQUEST['premio_debug'])) {
    error_reporting(-1);
    ini_set('display_errors', 1);
}

if( isset($_REQUEST['premio_debug']) && function_exists('register_shutdown_function') ) {
    function minigo_fatal_handler() {
        $errfile = "unknown file";
        $errstr  = "shutdown";
        $errno   = E_CORE_ERROR;
        $errline = 0;

        $error = error_get_last();

        if( $error !== NULL) {
            $errno   = $error["type"];
            $errfile = $error["file"];
            $errline = $error["line"];
            $errstr  = $error["message"];
        }

        echo minigo_format_error( $errno, $errstr, $errfile, $errline );
    }

    function minigo_format_error( $errno, $errstr, $errfile, $errline ) {
        $trace = print_r( debug_backtrace( false ), true );

        $content  = "<table><thead bgcolor='#c8c8c8'><th>Item</th><th>Description</th></thead><tbody>";
        $content .= "<tr valign='top'><td><b>Error</b></td><td><pre>$errstr</pre></td></tr>";
        $content .= "<tr valign='top'><td><b>Errno</b></td><td><pre>$errno</pre></td></tr>";
        $content .= "<tr valign='top'><td><b>File</b></td><td>$errfile</td></tr>";
        $content .= "<tr valign='top'><td><b>Line</b></td><td>$errline</td></tr>";
        $content .= "<tr valign='top'><td><b>Trace</b></td><td><pre>$trace</pre></td></tr>";
        $content .= '</tbody></table>';

        return $content;
    }

    register_shutdown_function('minigo_fatal_handler');
}