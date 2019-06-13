<?php 
	// add api getCode to curl. To fillter you can change value of merchant_id to get discount code of other merchant, you can add fields: start_date value YYYYMMDD (20190612), end_date to get by date; affiliate_id to get link exactly  
	$curl = curl_init('http://devevent.adpia.vn:8080/apigetdiscount/getDiscountCode?merchant_id=shopee');
	// call api getCode
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	// excute curl to get data
	$result = curl_exec($curl);
	curl_close($curl);
	//respon data
	var_dump($result);

