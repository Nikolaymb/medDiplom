<?

require_once __DIR__.'/../Database.php';
require_once __DIR__.'/../../config.php';

function model_hotel($search = null){

	$DB = new Database;

	$tmp['limit'] = 0;
	$tmp['search'] = $search;

	$result['hotel'] = $DB->Hotels('SelectHotelLimit', $tmp);

	


	return $result;
}