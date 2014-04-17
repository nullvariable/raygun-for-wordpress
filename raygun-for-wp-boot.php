<?php
namespace
{

        $client = new \Raygun4php\RaygunClient(RAYGUN_KEY);

        function error_handler($errno, $errstr, $errfile, $errline ) {
            global $client;
            $client->SendError($errno, $errstr, $errfile, $errline);
        }

        function exception_handler($exception)
        {
            global $client;
            $client->SendException($exception);
        }

        set_exception_handler('exception_handler');
        set_error_handler("error_handler");
}
