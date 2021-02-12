<?php
ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

function nf($file, $to)
{
	if (file_exists($file)) {
		if (file_exists($to.'/'.$file)) {
			unlink($to.'/'.$file);
		}
		if (rename($file,$to.'/'.$file)) {
			return(TRUE);
		} else {
			echo 'Move Fail';
			return(FALSE);
		}
	} else {
		echo 'File not found';
		return(FALSE);
	}
}

$files= array('OnTime.php','OnTimeGrpsA.php','OnTimeGrpsB.php','OnTimeFunctions.php','OTigrp.php');

$base='ontime/';

$back = TRUE;
foreach ($files as $x) {
	if (!nf($x,$base)) {
		$back = FALSE;
	}
}
if ($back) {
	include_once($base."/OnTime.php");
	$install = new OnTime();
	$install->Connect('admin','OT2021Free');
	$install->InstallGrp();	
//	unlink(basename($_SERVER['PHP_SELF']));
}
?>