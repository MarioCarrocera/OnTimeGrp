<?php
include_once("OnTimeAllways.php");
include_once("OnTimeFunctions.php");
include_once("OnTimeContent.php");
include_once("OnTimeCripto.php");
include_once("OnTimeDebug.php");
include_once("OnTimeCoreA.php");
include_once("OnTimeCoreB.php");
include_once("OnTimeGrpsA.php");
include_once("OnTimeGrpsB.php");

class OnTime{
	use GrpsB;
	use GrpsA;
	use CoreB;
	use CoreA;
	use Functions;
	use Content;
	use Cripto;
	use Debug;
	use Allways;	
}

?>