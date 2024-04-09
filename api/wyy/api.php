<?php
    $counter = intval(file_get_contents("counter.dat"));  
     $_SESSION['#'] = true;  
     $counter++;  
     $fp = fopen("counter.dat","w");  
     fwrite($fp, $counter);  
     fclose($fp); 
 ?>

<?php
$id = $_GET['id'];
$wyy = 'http://music.163.com/song/media/outer/url?id=';
header('Location:'.$wyy . $id . ".mp3");
?>
