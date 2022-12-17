<?php
define('THINK_CLIENT_ROOT_PATH', rtrim(realpath(dirname(__FILE__)), '/'));
/**
* Key Project
*/
$GLOBALS['THINK_CLIENT_CONFIG']['KEY'] = "Client B 34334e1f40552229120b145246d7b101";

define('THINK_CLIENT_DATA_PATH',  THINK_CLIENT_ROOT_PATH.'/data');
define('THINK_CLIENT_PATH_CLASSES',  THINK_CLIENT_ROOT_PATH.'/src/classes');
define('THINK_META_CACHE_PATH',  THINK_CLIENT_ROOT_PATH.'/data/think_meta.cache.php');
define('THINK_CLIENT_CONFIGS',  THINK_CLIENT_ROOT_PATH.'/configs');
define('THINK_CLIENT_PAGE_TYPES',  THINK_CLIENT_CONFIGS.'/page_types.php');
define('THINK_CLIENT_SERVICE_PAGES',  THINK_CLIENT_CONFIGS.'/service_pages.php');
define('THINK_CLIENT_META_FORMULAS',  THINK_CLIENT_CONFIGS.'/metaGeneration/formulas.php');

if (!isset($GLOBALS['THINK_CLIENT_CONFIG'])) {
    $GLOBALS['THINK_CLIENT_CONFIG'] = array();
}

$GLOBALS['THINK_CLIENT_CONFIG']['site_default_encoding'] = 'utf-8';

$GLOBALS['THINK_CLIENT_CONFIG']['cache_meta_data'] = THINK_CLIENT_ROOT_PATH.'/data/think_meta.cache.php';
$GLOBALS['THINK_CLIENT_CONFIG']['connection_ad'] = THINK_CLIENT_ROOT_PATH.'/data/ad.txt';

if (!is_file($GLOBALS['THINK_CLIENT_CONFIG']['cache_meta_data'])) {
	touch($GLOBALS['THINK_CLIENT_CONFIG']['cache_meta_data']);
}
if (is_file($GLOBALS['THINK_CLIENT_CONFIG']['cache_meta_data'])) {
	if (!is_writable($GLOBALS['THINK_CLIENT_CONFIG']['cache_meta_data'])) {
		chmod($GLOBALS['THINK_CLIENT_CONFIG']['cache_meta_data'], 0777);
	}
}

/**
* Content comment replace
*/
$GLOBALS['THINK_CLIENT_CONFIG']['content_replace'] = '#(<think_text[^>]*>)(.*?)(<\/think_text>)#is';

/**
* Modules include
*/
$GLOBALS['THINK_CLIENT_CONFIG']['modules'] = array(
	// ThinkClientMetaGeneration::class,
	// ThinkClientReplace::class,
	ThinkClientStaticMetas::class,
//ThinkClientFilters включать с ThinkClientMetaGeneration
	// ThinkClientFilters::class,
	// ThinkClientTextGeneration::class,
	// ThinkClientTagsCloud::class,
);

?>
