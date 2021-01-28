<?
$arIncludeFiles = array(
	'/custom/defined.php',
	'/custom/func.php',
	'/custom/filters.php',
	'/custom/events.php',
);
foreach ($arIncludeFiles as $file) {
	if (file_exists(__DIR__ . $file)) {
	    require_once __DIR__ . $file;
	}
}