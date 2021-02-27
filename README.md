Trait Groups for ontime

The OnTime framework is designed to be modular, scalable and comprehensive, so that each new feature integrates without difficulty and maintains a unique class definition (OnTime) and all "additional classes" are "trait" that enrich it, in such a way that an integrated system is obtained, not separate programs which do not necessarily have to behave correctly together.
This trait is optional bur recomended to manege security, can join user to the groups, and include groups in features. 

Installation in test environment:

1.- Copy all the files in the directory where was instaled ontrime core

2.- With the browser of your preference, locate the directory and enter it

3.- Execute the OntimeInstallerGrp.php file

4.- When executing the file,  the files where moved and the required environment was created

Recommendations:

If you know how to create a subdomain that points to the "demo" directory, it is more comfortable and realistic.

After install

When installing, the necessary environment is defined to define access security, I create a User called "Admin" and that his password is "OT2021Free", this environment left the class prepared for the control of Groups

Is very important undertand how the security is asigned, first look in all groups thet the use have, and find the best level in any group, when is finish find the security asigned to the user, if the feature is assigne directo to an user is that the level, don'tcare is in the groups is better or worst level. 


mario.carrocera@hotmail.com

**********+++++++++++
Gruop Demo
**********+++++++++++

**********
Create Class
**********

basic content exist
**********+++++++++++
Conecting like admin
**********+++++++++++

Connect('admin','OT2021Free')
Connected!!!

**********+++++++++++
Create Demostrion user
**********+++++++++++


C0010M007.-Record exist


C0010M007.-Record exist


C0010M007.-Record exist

**********+++++++++++
Group
**********+++++++++++

**********
Adding
**********+

CrtGrp('Administrators','Administrators for the main Feature','admins')
C0010M007.-Record exist

CrtGrp('Everyone','All users','EvrAll')
Added!!!

CrtGrp('AdminUsers','Administrators on User Featrute','AUser')
C0010M007.-Record exist

CrtGrp('AdminGroups','Administrators on Group Featrute','AGroup')
C0010M007.-Record exist

**********
Show All
**********+

GrpShwAll()
0D.- AdminGroups=>Administrators on User Featrute(AGroup)
0D.- AdminUsers=>Administrators on User Featrute(AUser)
0D.- Administrators=>Administrators for the main Feature(admins)
0D.- Everyone=>All users(EvrAll)
**********
Show my groups
**********+

->groups
0D.- Administrators=>owner
0D.- AdminUsers=>owner
0D.- AdminGroups=>owner
**********+++++++++++
Group & User
**********+++++++++++

**********
Adding
**********+

GrpAddUsr('Everyone','DEMO','access')
C0010M012.-Not autorized

GrpAddUsr('AdminGroups','DEMO','owner')
C0010M007.-Record exist

GrpAddUsr('AdminGroups','Demo','create')
C0010M007.-Record exist

GrpAddUsr('AdminGroups','demo','access')
Added!!!

**********
Show Users in AdminGroups
**********+

GrpShwUsr('AdminGroups')
0D.- admin=>owner
0D.- DEMO=>owner
0D.- Demo=>create
0D.- demo=>access
GrpChgUsr('Everyone','demo','access')
C0010M012.-Not autorized

GrpChgUsr('AdminGroups','demo','change')
Added!!!

**********
Show Users in AdminGroups
**********+

GrpShwUsr('AdminGroups')
0D.- admin=>owner
0D.- DEMO=>owner
0D.- Demo=>create
0D.- demo=>change
GrpDltUsr('Everyone','demo')
C0010M012.-Not autorized

GrpDltUsr('AdminGroups','demo')
Added!!!

**********
Show Users in AdminGroups
**********+

GrpShwUsr('AdminGroups')
0D.- admin=>owner
0D.- DEMO=>owner
0D.- Demo=>create
**********+++++++++++
Group & Features
**********+++++++++++

**********
Adding
**********+

GrpAddFtr('Everyone','DEMO','access')
C0010M012.-Not autorized

GrpAddFtr('Everyone','usr','access')
Added!!!

GrpAddFtr('Everyone','grp','access')
Added!!!

GrpAddFtr('AdminGroups','grp','owner')
C0010M007.-Record exist

**********
Show Features in AdminGroups
**********+

GrpShwFtr('AdminGroups')
0D.- grp=>owner
**********
Show Features in Everyone
**********+

GrpShwFtr('Everyone')
0D.- usr=>access
0D.- grp=>access
**********
Show group for feture grp
**********+

FtrShwGrp('grp')
0D.- AdminGroups=>owner
0D.- Everyone=>access
**********
Show User Safety
**********+

FtrShwGrp('DEMO')
0D.- grp=>change
**********
Add User Demo to Feature grp
**********+

UsrAddFtr('grp','DEMO','change')
C0010M007.-Record exist

**********
Show User Safety
**********+

FtrShwGrp('DEMO')
0D.- grp=>change
**********
Adding
**********+

GrpAddFtr('Everyone','user','change')
C0010M012.-Not autorized

GrpAddFtr('Everyne','usr','change')
C0010M008.-Record don't exist

GrpAddFtr('Everyone','usr','change')
C0010M007.-Record exist

**********
Show group for feture grp
**********+

FtrShwGrp('grp')
0D.- AdminGroups=>owner
0D.- Everyone=>access
**********
deleting
**********+

GrpDltFtr('Everyone','user','change')
C0010M012.-Not autorized

GrpDltFtr('Everyne','usr','change')
C0010M008.-Record don't exist

GrpDltFtr('Everyone','usr','change')
Deleted!!!

**********
Show group for feture grp
**********+

FtrShwGrp('grp')
0D.- AdminGroups=>owner
0D.- Everyone=>access
**********+++++++++++
Group & Info
**********+++++++++++

**********
Group Public Information
**********

GrpAddPbl('Everyone',,'one record','the information i wana share')
Asigned!!!
GrpAddPbl('Everyone','who','askme to ad u')
Asigned!!!
GrpShwPbl('Everyone')

0D.- one record=>the information i wana share
0D.- who=>askme to ad u
GrpChgPbl('Everyone','who','askme to add you')

Changed!!!
GrpShwPbl('Everyone')

0D.- one record=>the information i wana share
0D.- who=>askme to add you
GrpDltPbl('Everyone','one record')

Delete!!!
GrpShwPbl('Everyone')

0D.- who=>askme to add you
**********
Group Private Information
**********

GrpAddPrv('Everyone',,'alpha','is a secret')
Asigned!!!
GrpAddPrv('Everyone','beta','askme to ad u')
Asigned!!!
GrpShwPrv('Everyone')

0D.- alpha=>is a secret
0D.- beta=>askme to ad u
GrpChgPrv('Everyone','beta','askme to add you')

Changed!!!
GrpShwPrv('Everyone')

0D.- alpha=>is a secret
0D.- beta=>askme to add you
GrpDltPrv('Everyone','beta')

Delete!!!
GrpShwPrv('Everyone')

0D.- alpha=>is a secret
DltGrp('Mine')C0010M008.-Record don't exist
DltGrp('Everyone')Delete!!!
**********+++++++++++
Demo Finish
**********+++++++++++

