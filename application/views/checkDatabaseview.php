<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	foreach($query->result() as $row){
		echo $row->Tables_in_ecommerce . "\n <br>";
	}
?>

