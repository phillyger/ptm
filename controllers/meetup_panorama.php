<?php
	ini_set('date.timezone', 'America/New_York');
	$group_name = "Panorama-Toastmasters";
	$api_key = "c45e311a1b4f526d623c5b2f732e3";

	// this is the message api. Event_id is the event that to return. The Key is the api key. 

	$request_url = "https://api.meetup.com/2/events?key=".$api_key."&group_urlname=".$group_name."&page=1"."&sign=true";



	// standard curl
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $request_url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	//curl_setopt($ch, CURLOPT_CONNECTIONTIMEOUT_MS, 3000.0);

	$data = curl_exec($ch);

	// echo $request_url;
	// echo $data;

	curl_close($ch);

	// puts the data in the $xml variable for separation
	$json = json_decode($data, true);

	// the first event in meetup list.
	$curEvt = $json["results"][0];

?>