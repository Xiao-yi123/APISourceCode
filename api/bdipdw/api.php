<?php error_reporting(0);?>
<?php
if($currency_array["currency_call_record"]=="1"){
	$counter = intval(file_get_contents("counter.dat"));  
	$_SESSION['#'] = true;  
	$counter++;  
	$fp = fopen("counter.dat","w");  
	fwrite($fp, $counter);  
	fclose($fp); 
}
else{
	 unlink("counter.dat");
}
?>
<?php
$ip=$_GET["ip"];
if ($ip==""){
	return_json("20011","no","need ip","need ip","need ip");
}
else{
	location($ip);
}
function return_json($code,$msg,$ascription,$lonlat,$address){
$result = array(
          'code'=>$code,
          'msg'=>$msg,
          'ascription'=>$ascription,
		  'lonlat'=>$lonlat,
		  'address'=>$address,
        );
echo stripslashes(json_encode($result,JSON_UNESCAPED_UNICODE));
}
function location($ip){
$url = "https://api.map.baidu.com/location/ip?ip=".$ip."&ak=Auw8fjSnrElKxlcSz9PItXxRBytWYMN5&coor=bd09ll";
    $curl = curl_init();
    $httpheader[] = "Accept:*/*";
    $httpheader[] = "Accept-Language:zh-CN,zh;q=0.8";
    $httpheader[] = "Connection:close";
    $httpheader[] = "Referer:http://www.baidu.com";
    $httpheader[] = "User-agent:Mozilla/5.0 (iPhone; CPU iPhone OS 5_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Mobile/9B176 MicroMessenger/4.3.2";
    curl_setopt($curl, CURLOPT_HTTPHEADER, $httpheader);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_TIMEOUT, 60);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_URL,$url);
	$text = curl_exec($curl);
	curl_close($curl);
$data = json_decode($text,ture);
return_json(
"10001","ok",$data['content']["address_detail"]["province"]."|".$data['content']["address_detail"]["city"]."|".$data['content']["address_detail"]["district"],
$data['content']["point"]["x"]."|".$data['content']["point"]["y"],
lonlat_address($data['content']["point"]["x"],$data['content']["point"]["y"]));
}
function lonlat_address($lon,$lat){
	$url = "http://api.map.baidu.com/geocoder/v2/?callback=renderReverse&location=".$lat.",".$lon."&output=json&pois=1&ak=Auw8fjSnrElKxlcSz9PItXxRBytWYMN5";
	    $curl = curl_init();
	    $httpheader[] = "Accept:*/*";
	    $httpheader[] = "Accept-Language:zh-CN,zh;q=0.8";
	    $httpheader[] = "Connection:close";
	    $httpheader[] = "Referer:http://www.baidu.com";
	    $httpheader[] = "User-agent:Mozilla/5.0 (iPhone; CPU iPhone OS 5_1 like Mac OS X) AppleWebKit/534.46 (KHTML, like Gecko) Mobile/9B176 MicroMessenger/4.3.2";
	    curl_setopt($curl, CURLOPT_HTTPHEADER, $httpheader);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_TIMEOUT, 60);
		curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($curl, CURLOPT_URL,$url);
		$text = curl_exec($curl);
		curl_close($curl);
		$text=str_replace("renderReverse&&renderReverse(","",$text);
		$text=str_replace(")","",$text);
	   $data = json_decode($text,ture);
	   return $data["result"]["formatted_address"];
}
?>
