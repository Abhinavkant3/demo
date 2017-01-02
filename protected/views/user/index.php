<?php
/* @var $this UserController */

$this->breadcrumbs=array(
	'User',
);
?>
<h1>Abhinav's File</h1>

<?php 

	foreach($users as $user){
		echo "$user->username";
		echo "<br>";
	}

?>