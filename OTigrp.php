<?php
trait OTgrp{

	function InstallGrp()
	{
		if ($this->ot_can(0,'main')) {
			if ($this->not_exist('grp')) {
				$this->ot_create('grp');
			}
			$temp=$this->ot_addin('grp','grp','features.json');
			$temp=$this->ot_readif('container.json');
			$tmp['Name']='Group Feature';
			$tmp['limit']=1;
			$tmp['OnUse']=1;
			$temp=$this->ot_add('grp',$tmp,$temp,'container.json');
			$this->ot_addin('grp','owner',"usr/".$this->id.'/features.json');
			$tmp=[];
			$tmp['nick']='Groups';
			$tmp['name']='Groups Feature';
			$tmp['crtusr']='system';
			$tmp['crtdat']=$this->ot_now();
			$tmp['owner']='system';
			$this->ot_write('/grp/admin.json',$tmp);
		}
	}
}
?>