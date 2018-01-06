<?php 
require_once(PATH . '/class/JsonDB.class.php');

if (!is_dir(PATH . '/db/')) {
	mkdir(PATH . '/db/');
	chmod(PATH . '/db/', 0755);
}

$db = new JsonDB( PATH . "/db/");

if (!file_exists(PATH . '/db/config.json')) {
	file_put_contents(PATH . '/db/config.json', "");
	chmod(PATH . '/db/config.json', 0640);
}

if (!file_exists(PATH . '/db/pages.json')) {
	file_put_contents(PATH . '/db/pages.json', "");
	chmod(PATH . '/db/pages.json', 0640);
}

if (!file_exists(PATH . '/db/rss.json')) {
	file_put_contents(PATH . '/db/rss.json', "");
	chmod(PATH . '/db/rss.json', 0640);
}


if (!file_exists(PATH . '/db/rssPosts.json')) {
	file_put_contents(PATH . '/db/rssPosts.json', "");
	chmod(PATH . '/db/rssPosts.json', 0640);
}

/*
			JsonDB -> selectAll ( "table" )  - Returns the entire file as array
			JsonDB -> update ( "table", "key", "value", ARRAY ) - Replaces the line which corresponds to the key/value with the array-data
			JsonDB -> updateAll ( "table", ARRAY ) - Replaces the entire file with the array-data
			JsonDB -> insert ( "table", ARRAY ) - Appends a row, returns true on success
			JsonDB -> delete ( "table", "key", "value" ) - Deletes all lines which corresponds to the key/value, returns number of deleted lines
			JsonDB -> deleteAll ( "table" ) - Deletes the whole data, returns "true" on success

$db->insert("config",array('token' => '123'));
$db->update ( "config", "token", "123", array('token' => '1234') )
$result = $db->selectAll("config");
var_dump($db->selectAll("config"));
$db->deleteAll ( "config" );
echo count($db->selectAll("config"));
*/

?>