<?php 

	$token = base64_encode('account_id:password'); 
	//Let add infor your account

	$dataPost = array("sdate" => "20190530", "edate" => "20190530", "offer" => "shopee");
	//add field to fillter exactly: status value(100:pending, 200:merchant confirm, 210:complete and payment, 300:cancel from merchant, 310:cancelled(Admin approved)), order_code, limit (limit field data respon), page (page pagination)

	$curl = curl_init('https://event.adpia.vn/apiv2/getConversions');
	// call api getConversions
	curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
	// method api
	curl_setopt($curl, CURLOPT_POSTFIELDS, $dataPost);
	// post api with data cause from input form
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	// sent token to encoding base64 contain infor your account 
	curl_setopt($curl, CURLOPT_HTTPHEADER, array(
		'Authorization:Basic '.$token)
	);

	$result = curl_exec($curl);
	curl_close($curl);
	//respon data 
	var_dump($result);

	
