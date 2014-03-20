<?php
/**
 * DocLookup
 * Copyright 2011 ITMG
 *
 * @package doclookup
 * @author Michael Graham <magog@the-wire.com>
 *
 * Description
 *

/**
 
 /** Example properties
 * &package doclookup
 *
 *  Required Properties:
 *    @property alias - (string) alias of the document to find
 *
 */



$contextKey = $modx->resource->get('context_key');
$context = $modx->getObject('modContext', array('key' => $contextKey));
if (!empty($context)) {
    $contextKeyRet = $context->get('key');
    $context->prepare();

    $map = $context->aliasMap;

    return $map[$scriptProperties['alias']];
}
return;


?>
