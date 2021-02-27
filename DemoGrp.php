<?php

ini_set('display_errors', true);
error_reporting(E_ERROR | E_PARSE | E_NOTICE | E_WARNING);

$base='ontime/';
$AdminPassword='OT2021Free';
include_once($base."OnTime.php");
$demo=new OnTime();

echo "********** <br> Create Class  <br> ********** <br> <br>";
$demo->ot_error('basic content exist').'<br>';


echo "**********+++++++++++ <br> Conecting like admin <br> **********+++++++++++ <br> <br>";
echo "Connect('admin','OT2021Free') ";
$demo->Connect('admin',$AdminPassword);
echo  "<br>";$demo->ot_error("Connected!!!");echo "<br>";



echo "**********+++++++++++ <br> Create Demostrion user <br> **********+++++++++++ <br> <br>";
$demo->CrtUsr('Demo','12345','active','Demostration user','Demo 1');
echo  "<br>";$demo->ot_error("create!!!");echo "<br>";
$demo->CrtUsr('DEMO','12345','active','Demostration user','Demo 2');
echo  "<br>";$demo->ot_error("create!!!");echo "<br>";
$demo->CrtUsr('demo','12345','active','Demostration user','Demo 3');
echo  "<br>";$demo->ot_error("create!!!");echo "<br>";

echo "**********+++++++++++ <br> Group <br> **********+++++++++++ <br> <br>";
echo "********** <br> Adding <br> **********+ <br> <br>";
echo "CrtGrp('Administrators','Administrators for the main Feature','admins')";
$demo->CrtGrp('Administrators','Administrators for the main Feature','admins');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "CrtGrp('Everyone','All users','EvrAll')";
$demo->CrtGrp('Everyone','All users','EvrAll');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "CrtGrp('AdminUsers','Administrators on User Featrute','AUser')";
$demo->CrtGrp('AdminUsers','Administrators on User Featrute','AUser');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "CrtGrp('AdminGroups','Administrators on Group Featrute','AGroup')";
$demo->CrtGrp('AdminGroups','Administrators on User Featrute','AGroup');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";

echo "********** <br> Show All <br> **********+ <br> <br>";
echo "GrpShwAll()";
$demo->ot_show($demo->GrpShwAll());

echo "********** <br> Show my groups <br> **********+ <br> <br>";
echo "->groups";
$demo->ot_show($demo->groups);


echo "**********+++++++++++ <br> Group & User <br> **********+++++++++++ <br> <br>";
echo "********** <br> Adding <br> **********+ <br> <br>";
echo "GrpAddUsr('Everyone','DEMO','access')";
$demo->GrpAddUsr('Everyone','DEMO','access');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "GrpAddUsr('AdminGroups','DEMO','owner')";
$demo->GrpAddUsr('AdminGroups','DEMO','owner');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "GrpAddUsr('AdminGroups','Demo','create')";
$demo->GrpAddUsr('AdminGroups','Demo','create');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "GrpAddUsr('AdminGroups','demo','access')";
$demo->GrpAddUsr('AdminGroups','demo','access');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "********** <br> Show Users in AdminGroups <br> **********+ <br> <br>";
echo "GrpShwUsr('AdminGroups')";
$demo->ot_show($demo->GrpShwUsr('AdminGroups'));
echo "GrpChgUsr('Everyone','demo','access')";
$demo->GrpChgUsr('Everyone','demo','access');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "GrpChgUsr('AdminGroups','demo','change')";
$demo->GrpChgUsr('AdminGroups','demo','change');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "********** <br> Show Users in AdminGroups <br> **********+ <br> <br>";
echo "GrpShwUsr('AdminGroups')";
$demo->ot_show($demo->GrpShwUsr('AdminGroups'));
echo "GrpDltUsr('Everyone','demo')";
$demo->GrpDltUsr('Everyone','demo');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "GrpDltUsr('AdminGroups','demo')";
$demo->GrpDltUsr('AdminGroups','demo');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "********** <br> Show Users in AdminGroups <br> **********+ <br> <br>";
echo "GrpShwUsr('AdminGroups')";
$demo->ot_show($demo->GrpShwUsr('AdminGroups'));

echo "**********+++++++++++ <br> Group & Features <br> **********+++++++++++ <br> <br>";
echo "********** <br> Adding <br> **********+ <br> <br>";
echo "GrpAddFtr('Everyone','DEMO','access')";
$demo->GrpAddFtr('Everyone','DEMO','access');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "GrpAddFtr('Everyone','usr','access')";
$demo->GrpAddFtr('Everyone','usr','access');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "GrpAddFtr('Everyone','grp','access')";
$demo->GrpAddFtr('Everyone','grp','access');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "GrpAddFtr('AdminGroups','grp','owner')";
$demo->GrpAddFtr('AdminGroups','grp','owner');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "********** <br> Show Features in AdminGroups <br> **********+ <br> <br>";
echo "GrpShwFtr('AdminGroups')";
$demo->ot_show($demo->GrpShwFtr('AdminGroups'));
echo "********** <br> Show Features in Everyone <br> **********+ <br> <br>";
echo "GrpShwFtr('Everyone')";
$demo->ot_show($demo->GrpShwFtr('Everyone'));
echo "********** <br> Show group for feture grp <br> **********+ <br> <br>";
echo "FtrShwGrp('grp')";
$demo->ot_show($demo->FtrShwGrp('grp'));
echo "********** <br> Show User Safety <br> **********+ <br> <br>";
echo "FtrShwGrp('DEMO')";
$demo->ot_show($demo->Safety('DEMO'));
echo "********** <br> Add User Demo to Feature grp <br> **********+ <br> <br>";
echo "UsrAddFtr('grp','DEMO','change')";
$demo->UsrAddFtr('grp','DEMO','change');
echo  "<br>";$demo->ot_error("Added!!!");echo "<br>";
echo "********** <br> Show User Safety <br> **********+ <br> <br>";
echo "FtrShwGrp('DEMO')";
$demo->ot_show($demo->Safety('DEMO'));
echo "********** <br> Adding <br> **********+ <br> <br>";
echo "GrpAddFtr('Everyone','user','change')";
$demo->GrpAddFtr('Everyone','user','change');
echo  "<br>";$demo->ot_error("Changed!!!");echo "<br>";
echo "GrpAddFtr('Everyne','usr','change')";
$demo->GrpAddFtr('Everyne','usr','change');
echo  "<br>";$demo->ot_error("Changed!!!");echo "<br>";
echo "GrpAddFtr('Everyone','usr','change')";
$demo->GrpAddFtr('Everyone','usr','change');
echo  "<br>";$demo->ot_error("Changed!!!");echo "<br>";
echo "********** <br> Show group for feture grp <br> **********+ <br> <br>";
echo "FtrShwGrp('grp')";
$demo->ot_show($demo->FtrShwGrp('grp'));
echo "********** <br> deleting <br> **********+ <br> <br>";
echo "GrpDltFtr('Everyone','user','change')";
$demo->GrpDltFtr('Everyone','user','change');
echo  "<br>";$demo->ot_error("Deleted!!!");echo "<br>";
echo "GrpDltFtr('Everyne','usr','change')";
$demo->GrpDltFtr('Everyne','usr','change');
echo  "<br>";$demo->ot_error("Deleted!!!");echo "<br>";
echo "GrpDltFtr('Everyone','usr','change')";
$demo->GrpDltFtr('Everyone','usr','change');
echo  "<br>";$demo->ot_error("Deleted!!!");echo "<br>";
echo "********** <br> Show group for feture grp <br> **********+ <br> <br>";
echo "FtrShwGrp('grp')";
$demo->ot_show($demo->FtrShwGrp('grp'));

echo "**********+++++++++++ <br> Group & Info <br> **********+++++++++++ <br> <br>";
echo "********** <br> Group Public Information <br> ********** <br> <br>";
echo "GrpAddPbl('Everyone',,'one record','the information i wana share')"."<br>";
$demo->GrpAddPbl('Everyone','one record','the information i wana share');
$demo->ot_error("Asigned!!!")."<br>";

echo "GrpAddPbl('Everyone','who','askme to ad u')"."<br>";
$demo->GrpAddPbl('Everyone','who','askme to ad u');
$demo->ot_error("Asigned!!!")."<br>";

echo "GrpShwPbl('Everyone')"."<br>";
$demo->ot_show($demo->GrpShwPbl('Everyone'));

echo "GrpChgPbl('Everyone','who','askme to add you')"."<br>"."<br>";
$demo->GrpChgPbl('Everyone','who','askme to add you');
$demo->ot_error("Changed!!!")."<br>";

echo "GrpShwPbl('Everyone')"."<br>";
$demo->ot_show($demo->GrpShwPbl('Everyone'));

echo "GrpDltPbl('Everyone','one record')"."<br>"."<br>";
$demo->GrpDltPbl('Everyone','one record');
$demo->ot_error("Delete!!!")."<br>";

echo "GrpShwPbl('Everyone')"."<br>";
$demo->ot_show($demo->GrpShwPbl('Everyone'));

echo "********** <br> Group Private Information <br> ********** <br> <br>";
echo "GrpAddPrv('Everyone',,'alpha','is a secret')"."<br>";
$demo->GrpAddPrv('Everyone','alpha','is a secret');
$demo->ot_error("Asigned!!!")."<br>";

echo "GrpAddPrv('Everyone','beta','askme to ad u')"."<br>";
$demo->GrpAddPrv('Everyone','beta','askme to ad u');
$demo->ot_error("Asigned!!!")."<br>";

echo "GrpShwPrv('Everyone')"."<br>";
$demo->ot_show($demo->GrpShwPrv('Everyone'));

echo "GrpChgPrv('Everyone','beta','askme to add you')"."<br>"."<br>";
$demo->GrpChgPrv('Everyone','beta','askme to add you');
$demo->ot_error("Changed!!!")."<br>";

echo "GrpShwPrv('Everyone')"."<br>";
$demo->ot_show($demo->GrpShwPrv('Everyone'));

echo "GrpDltPrv('Everyone','beta')"."<br>"."<br>";
$demo->GrpDltPrv('Everyone','beta');
$demo->ot_error("Delete!!!")."<br>";

echo "GrpShwPrv('Everyone')"."<br>";
$demo->ot_show($demo->GrpShwPrv('Everyone'));

echo "DltGrp('Mine')";
$demo->DltGrp('Mine');
$demo->ot_error("Delete!!!");

echo "DltGrp('Everyone')";
$demo->DltGrp('Everyone');
$demo->ot_error("Delete!!!");


echo "**********+++++++++++ <br> Demo Finish<br> **********+++++++++++ <br> <br>";
?>