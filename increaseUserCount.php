<?php
$filename = "user_count.txt";
$content = file($filename);
$array = $content[0];
$inc = $array + 1;
$fp = fopen($filename,"w");
fputs($fp,$inc);
fclose($fp);


?>

<?php echo($inc); ?>
