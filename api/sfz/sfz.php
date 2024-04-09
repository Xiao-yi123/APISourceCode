<?php   //    ÖÇ×¿ÐÇÍø¿ª·¢
ini_set('user_agent','Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.2; SV1; .NET CLR 1.1.4322)');
if (empty($_GET['list'])) {
$arta= file_get_contents('http://qq.ip138.com/idsearch/index.asp?userid=123');
} else {
$arta= file_get_contents('http://qq.ip138.com/idsearch/index.asp?userid=' .$_GET['vid']. '');
	}
$uu1 = '#<td><p>(.*?)</p></td>#';

preg_match_all($uu1,$arta, $lj);
$bf = $lj[1];
$responsg = str_replace('\/','', $bf);
$responsa = str_replace('','', $responsg);
foreach ($bf as $gg => $qz1){
?>

<p><?php echo $qz1;?></p>


<?php
}
?>
