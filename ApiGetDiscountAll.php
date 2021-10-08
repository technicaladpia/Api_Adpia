<?php 
	// add api getCode to curl. 
	$curl = curl_init('https://event.adpia.vn/apigetdiscount/getDiscountAll');
	// call api getCode
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	// excute curl to get data
	$result = curl_exec($curl);
	curl_close($curl);
	//respon data
	var_dump($result);
