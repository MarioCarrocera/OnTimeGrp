<?php
trait GrpsA{

	function CreateGroup($group,$name,$nick)
	{
		if ($this->ot_connect()) {
			if ($this->ot_can(2,'grp')) {
				if ($this->not_exist($group, 'grp')) {
					if ($this->ot_create($group, 'grp')) {
						$tmparray=[];
						$tmparray['nick']=$nick;
						$tmparray['name']=$name;
						$tmparray['crtusr']=$this->id;
						$tmparray['crtdat']=$this->ot_now();
						$tmparray['owner']=$this->id;
						$this->ot_write('admin.json',$tmparray,'grp/'.$group);
						$this->ot_addin($this->id,0,'users.json','grp/'.$group);
						$this->ot_addin($group,0,'groups.json','usr/'.$this->id);
					}
				}
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function DeleteGroup($group)
	{
		if ($this->ot_connect()) {
			if ($this->ot_can(1,'grp')) {
				if ($this->ot_exist($group, 'grp')) {
					$atmp=$this->ot_readif('features.json','grp/'.$group);
					foreach ($atmp as $iKey=> $iValue) {
						$this->ot_deletein($group, 'groups.json',$iKey);
					}
					$atmp=$this->ot_readif('users.json','grp/'.$group);
					foreach ($atmp as $iKey=> $iValue) {
						$this->ot_deletein($group, 'groups.json','usr/'.$iKey);
					}
					$this->ot_remove($group, 'grp');
				}
			}
		}
	}
}
?>