<?php
$url=base64_decode('aHR0cHM6Ly9hcGkucGluZ3Bpbmc2LmNvbS90b29scy9sYW56b3Uv').'?url='.$_GET['url'].'&pass='.$_GET['url'];
	$ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
         $output = curl_exec($ch);
        curl_close($ch);
        echo $output;
?>