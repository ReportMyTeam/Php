<?php ?>
<?php
$names = array("Patrick", "John", "Marie", "Claire", "Paul");
foreach ($names as $name) {
	if(strlen($name)>=2 && $name[0]=='p' && $name[0]=='a')
   	print "$name, ";
}
?>

