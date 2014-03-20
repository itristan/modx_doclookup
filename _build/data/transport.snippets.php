<?php
/**
 * DocLookup transport snippets
 * Copyright 2011 ITMG
 * @author Michael Graham <magog@the-wire.com>
 *
 * @package mycomponent
 */
/**
 * Description:  Array of snippet objects for DocLookup package
 * @package mycomponent
 * @subpackage build
 */

if (! function_exists('getSnippetContent')) {
    function getSnippetContent($filename) {
        $o = file_get_contents($filename);
        $o = str_replace('<?php','',$o);
        $o = str_replace('?>','',$o);
        $o = trim($o);
        return $o;
    }
}
$snippets = array();

$snippets[1]= $modx->newObject('modSnippet');
$snippets[1]->fromArray(array(
    'id' => 1,
    'name' => 'doclookup',
    'description' => "Lookup the id of a document by its alias",
    'snippet' => getSnippetContent($sources['source_core'].'/elements/snippets/doclookup.snippet.php'),
),'',true,true);
// $properties = include $sources['data'].'/properties/properties.doclookup.php';
// $snippets[1]->setProperties($properties);
// unset($properties);



return $snippets;
