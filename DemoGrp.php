<?php

ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

$base='ontime/';
include_once($base."OnTime.php");
$demo=new OnTime();

echo "********** <br> Main containe <br> ********** <br> <br>";
echo "Try conect with correct info ->Connect('admin','OT2021Free'): ";$demo->Connect('admin','OT2021Free');

$demo->UserAdd('Demo','12345','active','Demostration user ','Demito');
$demo->UserAdd('Demo1','12345','active','Demostration 1 ','me');
$demo->UserAdd('Demo2','12345','active','Demostration two ','you');
$demo->UserAdd('Demo3','12345','active','Demostration 3 ','all');
$demo->UserAdd('Demo4','12345','active','Demostration dour ','us are');

echo "********** <br> Group Create <br> ********** <br> <br>";

echo "CreateGroup('First Group','Group Name','group')";
$demo->CreateGroup('First Group','Group Name','group');
$demo->ot_error("Create!!!");

echo "CreateGroup('Second','another group','i can say')";
$demo->CreateGroup('Second','another group','i can say');
$demo->ot_error("Create!!!");

echo "CreateGroup('Mine','For u','red')";
$demo->CreateGroup('Mine','For u','red');
$demo->ot_error("Create!!!");

echo "********** <br> Group User <br> ********** <br> <br>";
echo "GrpAddUsr('Mine','Demo',1)";
$demo->GrpAddUsr('Mine','Demo',1);
$demo->ot_error("Asigned!!!");

echo "GrpAddUsr('Second','Demo',3)";
$demo->GrpAddUsr('Second','Demo',3);
$demo->ot_error("Asigned!!!");

echo "GrpAddUsr('First Group','Demo',3)";
$demo->GrpAddUsr('First Group','Demo',3);
$demo->ot_error("Asigned!!!");

echo "GrpShwUsr('First Group')"."<br>";
$demo->ot_show($demo->GrpShwUsr('First Group'));

echo "GrpChgUsr('First Group','Demo',2)"."<br>"."<br>";
$demo->GrpChgUsr('First Group','Demo',2);
$demo->ot_error("Changed!!!")."<br>";

echo "GrpShwUsr('First Group')"."<br>";
$demo->ot_show($demo->GrpShwUsr('First Group'));

echo "GrpDltUsr('First Group','Demo')"."<br>"."<br>";
$demo->GrpDltUsr('First Group','Demo');
$demo->ot_error("Delete!!!")."<br>";

echo "GrpShwUsr('First Group')"."<br>";
$demo->ot_show($demo->GrpShwUsr('First Group'));

echo "********** <br> Group Feature <br> ********** <br> <br>";
echo "GrpAddFtr('Mine','grp',0)";
$demo->GrpAddFtr('Mine','grp',0);
$demo->ot_error("Asigned!!!");

echo "GrpAddFtr('Mine','usr',3)";
$demo->GrpAddFtr('Mine','usr',3);
$demo->ot_error("Asigned!!!");

echo "GrpAddFtr('Second','usr',2)";
$demo->GrpAddFtr('Second','usr',2);
$demo->ot_error("Asigned!!!");

echo "GrpAddFtr('Second','grp',2)";
$demo->GrpAddFtr('Second','grp',2);
$demo->ot_error("Asigned!!!");

echo "GrpShwFtr('Mine')"."<br>";
$demo->ot_show($demo->GrpShwFtr('Mine'));

echo "GrpChgFtr('Mine','usr',1)"."<br>"."<br>";
$demo->GrpChgFtr('Mine','usr',1);
$demo->ot_error("Changed!!!")."<br>";

echo "GrpShwFtr('Mine')"."<br>";
$demo->ot_show($demo->GrpShwFtr('Mine'));

echo "GrpDltFtr('Mine','grp')"."<br>"."<br>";
$demo->GrpDltFtr('Mine','grp');
$demo->ot_error("Delete!!!")."<br>";

echo "GrpShwFtr('Mine')"."<br>";
$demo->ot_show($demo->GrpShwFtr('Mine'));

echo "********** <br> Group Public Information <br> ********** <br> <br>";
echo "GrpAddPbl('Mine',,'one record','the information i wana share')"."<br>";
$demo->GrpAddPbl('Mine','one record','the information i wana share');
$demo->ot_error("Asigned!!!")."<br>";

echo "GrpAddPbl('Mine','who','askme to ad u')"."<br>";
$demo->GrpAddPbl('Mine','who','askme to ad u');
$demo->ot_error("Asigned!!!")."<br>";

echo "GrpShwPbl('Mine')"."<br>";
$demo->ot_show($demo->GrpShwPbl('Mine'));

echo "GrpChgPbl('Mine','who','askme to add you')"."<br>"."<br>";
$demo->GrpChgPbl('Mine','who','askme to add you');
$demo->ot_error("Changed!!!")."<br>";

echo "GrpShwPbl('Mine')"."<br>";
$demo->ot_show($demo->GrpShwPbl('Mine'));

echo "GrpDltPbl('Mine','one record')"."<br>"."<br>";
$demo->GrpDltPbl('Mine','one record');
$demo->ot_error("Delete!!!")."<br>";

echo "GrpShwPbl('Mine')"."<br>";
$demo->ot_show($demo->GrpShwPbl('Mine'));

echo "********** <br> Group Private Information <br> ********** <br> <br>";
echo "GrpAddPrv('Mine',,'alpha','is a secret')"."<br>";
$demo->GrpAddPrv('Mine','alpha','is a secret');
$demo->ot_error("Asigned!!!")."<br>";

echo "GrpAddPrv('Mine','beta','askme to ad u')"."<br>";
$demo->GrpAddPrv('Mine','beta','askme to ad u');
$demo->ot_error("Asigned!!!")."<br>";

echo "GrpShwPrv('Mine')"."<br>";
$demo->ot_show($demo->GrpShwPrv('Mine'));

echo "GrpChgPrv('Mine','beta','askme to add you')"."<br>"."<br>";
$demo->GrpChgPrv('Mine','beta','askme to add you');
$demo->ot_error("Changed!!!")."<br>";

echo "GrpShwPrv('Mine')"."<br>";
$demo->ot_show($demo->GrpShwPrv('Mine'));

echo "GrpDltPrv('Mine','beta')"."<br>"."<br>";
$demo->GrpDltPrv('Mine','beta');
$demo->ot_error("Delete!!!")."<br>";

echo "GrpShwPrv('Mine')"."<br>";
$demo->ot_show($demo->GrpShwPrv('Mine'));

$demo->DiscConnect();
echo "Try conect with correct info ->Connect('demo','12345'): ";
$demo->Connect('Demo','12345');
echo "Conecion statust: ";
if ($demo->conected) {
	echo "True";} else {
	echo "False";}; echo "<br>";
	echo $demo->id; echo "<br>";

echo "********** <br> My Groups <br> ********** <br>";
$demo->ot_show($demo->MyGrps());

echo "********** <br> Group list Options <br> ********** <br>";
echo "All";
$demo->ot_show($demo->GrpShwAll());

echo "Security"."<br>";
$demo->ot_show($demo->MySafety());

$demo->DiscConnect();
echo "Try conect with correct info ->Connect('admin','OT2021Free'): ";
$demo->Connect('admin','OT2021Free');

echo "DeleteGroup('Mine')";
$demo->DeleteGroup('Mine');
$demo->ot_error("Create!!!");

echo "DeleteGroup('First Group')";
$demo->DeleteGroup('First Group');
$demo->ot_error("Create!!!");
echo "DeleteGroup('Second')";
$demo->DeleteGroup('Second');
$demo->ot_error("Create!!!");


$demo->UserDlt('Demo');
$demo->UserDlt('Demo1');
$demo->UserDlt('Demo2');
$demo->UserDlt('Demo3');
$demo->UserDlt('Demo4');

echo 'Demo Finish';
?>