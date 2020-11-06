<?php
/**
 * Included the registering of Whoops in the init method.
 *
 * @package LionHeart\DebugKit\SRC\ASSIST
 *
 * @since 1.0.0
 *
 * @author LionHeart Development
 *
 * @link https://lionheartdevs.com/
 *
 * @license GPL-2.0+
 */


namespace LionHeart\DebugKit\SRC\ASSIST;


use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;
use Whoops\Util\Misc;
use Whoops\Handler\JsonResponseHandler;

add_action('init', __NAMESPACE__ . '\load_whoops', 1);



function load_whoops(){

    $run     = new Run();
    $handler = new PrettyPageHandler();
    $handler->setEditor('phpstorm');

// Add some custom tables with relevant info about your application,
// that could prove useful in the error page:
//$handler->addDataTable('Killer App Details', array(
//    "Important Data" => $myApp->getImportantData(),
//    "Thingamajig-id" => $someId
//));

// Set the title of the error page:
    $handler->setPageTitle("Whoops! You messed something up. ");

    $run->pushHandler($handler);

// Add a special handler to deal with AJAX requests with an
// equally-informative JSON response. Since this handler is
// first in the stack, it will be executed before the error
// page handler, and will have a chance to decide if anything
// needs to be done.
    if (Misc::isAjaxRequest()) {
        $run->pushHandler(new JsonResponseHandler());
    }

// Register the handler with PHP, and you're set!
    $run->register();


}



