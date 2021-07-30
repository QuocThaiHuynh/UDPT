<?php
//$api_url = 'http://localhost:3000/accounts';
//include_once "../Get_Post_Put_Patch_Delete/set.php";
include_once "C:/xampp/htdocs/testphp/functionsAPI_php/define.php";
//get API
function getAPI_url($router)
{
	# code...
	
	$api_url = urlMain .$router;
  //test url
	//var_dump($api_url);
	// Read JSON file
	$json_data = file_get_contents($api_url);

	// Decode JSON data into PHP array
	$response_data = json_decode($json_data, true);
	// All user data exists in 'data' object
	//$user_data = $response_data->data;

	// $name = $response_data[0]["_id"];
	// var_dump($name);

	// Cut long data into small & select only first 10 records
	//$user_data = array_slice($user_data, 0, 9);

	// Print data if need to debug
	//print_r($user_data);

	// Traverse array and display user data
	foreach ($response_data as $user)
	{
		echo "<br>";
		var_dump($user);
		echo "<br>";
	}	

}
//post api url
function postAPI_url($router,$data)
{
    # code...
    // User data to send using HTTP POST method in curl
    //set data test
    //$data = array('userName'=>'New User 123','passwordHash'=>'65000');

    // Data should be passed as json format
    $data_json = json_encode($data);

    // API URL to send data
    $url = urlMain . $router;

    // curl initiate
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, $url);

    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));

    // SET Method as a POST
    curl_setopt($ch, CURLOPT_POST, 1);

    // Pass user data in POST command
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // Execute curl and assign returned data
    $response  = curl_exec($ch);

    // Close curl
    curl_close($ch);

    // See response if data is posted successfully or any error
    print_r ($response);

}
//put api url
function putAPI_url($router , $id , $data)
{
  //$data = json_encode($data);
  # code...
  $url = urlMain .$router. "/" . $id;
  $curl = curl_init($url);
  curl_setopt($curl, CURLOPT_URL, $url);
  curl_setopt($curl, CURLOPT_CUSTOMREQUEST, 'PATCH');
  curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);

  $headers = array(
    "Accept: application/json",
    "Content-Type: application/json",
  );
  curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
  //set data
  // $data = <<<DATA
  // {
  //   "userName": "12345",
  //   "passwordHash": "John Smith",
  //   "Role": 1
  // }
  // DATA;

  curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

  //for debug only!
  curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
  curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
  $resp = curl_exec($curl);
  curl_close($curl);
  //var_dump($resp);
}
//delete api_url
function DeleteAPI_url($router,$key)
{
	# code...$url = "http://localhost:3000
	$url = urlMain . $router ."/" .$key ."";
	print_r($url);
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
	$result = curl_exec($ch);
	$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
	curl_close($ch);
	return $result;
}
?>
