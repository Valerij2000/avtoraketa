<? require ('includeModalCondition.php'); ?>
<?php
$datas = '';
$datas .= 'Заказан обратный звонок' . "\n";
$datas .= 'Ссылка на лот аукциона: ' . $_POST['name'] . "\n";
$datas .= 'Телефон: ' . $_POST['phone'] . "\n";
?>
<? require ('includeModalSending.php'); ?>
