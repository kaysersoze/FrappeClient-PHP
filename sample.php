<?php
/**
 * FrappeClient-PHP Sample Script
 *
 */

require(dirname(__FILE__).'/FrappeClient.php');

try{

	$client = new FrappeClient();

	var_dump($client);

// search ----------------------------
/*
	$result = $client->search(
					"Attendance"
					,array(
						"employee" => "EMP/0001",
						"att_date" => date("Y-m-d")
					)
				);

	var_dump($result);
*/
// or with Field, Offset, Limit
/*
	$result = $client->search(
					"User"
					,array("name" => "erp@example.com")
					,array("name","first_name")
					,0
					,20
				);

	var_dump($result);
*/
// search many ----------------------------
/*
	$doctype = 'Item';
	$filters = array(array($doctype, 'name', "in", array('Item 1', 'Item 2')));
	$fields  = array("item_code");

	$result = $client->search_many(
					$doctype=$doctype, 
					$filters = $filters,
					$fields  = $fields,
					$limit_start = 0,
					$limit_page_length = 50 // change size for number of records to return
			);

*/
// get ----------------------------
/*
	$result = $client->get(
					"User"
					,"erp@flama.co.jp"
				);

	var_dump($result);
*/
// insert ----------------------------
/*
	$result = $client->insert(
					"Attendance"
					,array(
						"att_date" => date("Y-m-d"),
						"employee" => "EMP/0004",
						"status" => "Present"
					)
				);

	var_dump($result);
*/
// insert many ----------------------------
/*
	$doctype = 'Customer';
	$customers = array(
			array(
				"doctype" => $doctype,
				"customer_name"  =>   'Customer 1',
				'customer_group' => 'All Customer Groups',
				'territory' => 'All Territories',
				'customer_type' => 'Company'
			),
			array(
				"doctype" => $doctype,
				"customer_name"  =>   'Customer 2',
				'customer_group' => 'All Customer Groups',
				'territory' => 'All Territories',
				'customer_type' => 'Company'
			),


	);
	$result = $client->insert_many(
					$doctype = $doctype,
					$data = $customers
			);

	var_dump($result);
*/

// update ----------------------------
/*
	$result = $client->update(
					"Attendance"
					,"ATT-00016"
					,array(
						"att_date" => date("Y-m-d",strtotime("-5 day"))
					)
				);

	var_dump($result);
*/
// delete ----------------------------
/*
	$result = $client->delete(
					"Attendance"
					,"ATT-00016"
				);

	var_dump($result);
*/

}catch(Exception $e){

	var_dump($e);

}


set_error_handler(function ($errno, $errstr, $errfile, $errline ) {
	throw new ErrorException($errstr, 0, $errno, $errfile, $errline);
});
