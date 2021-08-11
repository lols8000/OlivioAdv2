<?php

include 'extensions/contador/contador.php';

if (isset($_COOKIE['counte'])) {
    $counte = $_COOKIE['counte'] + 1;
} else {
    $counte = 1;
    $a++;
}

setcookie('counte', "$counte", time()+4800);
$abre =@fopen("extensions/contador/contador.php","w");
$ss ='<?php echo $a='.$a.'; ?>';
$escreve =fwrite($abre, $ss);
?>

<?php $a=0; ?>