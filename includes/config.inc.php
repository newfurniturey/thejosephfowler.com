<?php
/**
 * Base Configuration
 */
 
	// Conveniece declaration of the doc-root
	define('DOC_ROOT', $_SERVER['DOCUMENT_ROOT']);

	// Determine the current hostname, less any subdomain or www
	// @note We don't use multi-level TLDs, so we ignore the fact that they exist
	$hostSplit = explode('.', $_SERVER['HTTP_HOST']);
	$hostSplitLen = count($hostSplit);
	define('HOST', $hostSplit[$hostSplitLen - 2] . '.' . $hostSplit[$hostSplitLen - 1]);
	unset($hostSplit, $hostSplitLen);
