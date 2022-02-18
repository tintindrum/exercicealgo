Bonjour , 
<?php echo htmlspecialchars($_POST['nom']); ?>
<br> Tu as 
<?php echo (string)$_POST['age']; ?>
<?php   
$aujourdhui = date("Y-m-d");   
$diff = date_diff(date_create($_POST['age']), date_create($aujourdhui));  
 echo 'Votre age est '.$diff->format('%y'); ?>
<?php
if($diff->format('%y')< 18 ) {
    header('location: https://www.gulli.fr/');
}else {
    header('location: https://www.amazon.com/');
}
?>




