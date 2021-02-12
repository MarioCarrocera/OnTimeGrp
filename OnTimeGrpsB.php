<?php
trait GrpsB{
	
	function GrpShwAll()
	{
		$tmp=$this->ot_getin('ontime/grp');
		$value=[];
		foreach ($tmp as $iKey=> $iValue) {
			$value[$iKey]=$this->ot_name('grp',$iKey);
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $value );
		return $value;
	}

	function MyGrps()
	{
		$this->retval = $this->ot_readif('groups.json','usr/'.$this->id);
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function MySafety()
	{
		$this->retval=[];
		$tmp = $this->ot_readif('groups.json','usr/'.$this->id);
		foreach ($tmp as $iKey=> $iValue) {
			$tmp2 = $this->ot_readif('features.json','grp/'.$iKey);
			foreach ($tmp2 as $jKey=> $jValue) {
				if (array_key_exists($jKey, $this->retval)) {
					if ($this->retval[$jKey]>$jValue) {
						$this->retval[$jKey]=$jValue;
					}
				} else {
					$this->retval[$jKey]=$jValue;
				}
			}
		}
		$tmp = $this->ot_readif('features.json','usr/'.$this->id);
		foreach ($tmp as $jKey=> $jValue) {
			if (array_key_exists($jKey, $this->retval)) {
				if ($this->retval[$jKey]>$jValue) {
					$this->retval[$jKey]=$jValue;
				}
			} else {
				$this->retval[$jKey]=$jValue;
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function GrpShwUsr($group)
	{
		if ($this->ot_exist($group,'grp')) {
			$atmp=$this->ot_readif('users.json','grp/'.$group);
			if ($this->ot_maxvalue($atmp[$this->id],10,"C0010M012")) {
				$this->retval=$atmp;
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	
	function GrpAddUsr($group, $User, $level)
	{
		if ($this->ot_exist($group,'grp')) {
			$atmp=$this->ot_readif('users.json','grp/'.$group);
			if ($this->ot_maxvalue($atmp[$this->id],2,"C0010M012")) {
				if ($this->ot_exist($User,'usr')) {
					$this->ot_addin($User,$level,'users.json','grp/'.$group);
					$this->ot_addin($group,$level,'groups.json','usr/'.$User);									}
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function GrpChgUsr($group, $User, $level)
	{
		if ($this->ot_exist($group,'grp')) {
			$atmp=$this->ot_readif('users.json','grp/'.$group);
			if ($this->ot_maxvalue($atmp[$this->id],3,"C0010M012")) {
				if ($this->ot_exist($User,'usr')) {
					$this->ot_changein($User,$level,'users.json','grp/'.$group);
					$this->ot_changein($group,$level,'groups.json','usr/'.$User);								}
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function GrpDltUsr($group, $User)
	{
		if ($this->ot_exist($group,'grp')) {
			$atmp=$this->ot_readif('users.json','grp/'.$group);
			if ($this->ot_maxvalue($atmp[$this->id],1,"C0010M012")) {
				if ($this->ot_exist($User,'usr')) {
					$this->ot_delete($User,$atmp,'users.json','grp/'.$group);
					$atmp=$this->ot_readif('groups.json','usr/'.$User);
					$this->ot_delete($group,$atmp,'groups.json','usr/'.$User);								}
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}


	function FtrShwGrp($Feature)
	{
		if ($this->ot_exist($Feature)) {
			$this->retval=$this->ot_readif('groups.json',$Feature);
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}


	function GrpShwFtr($group)
	{
		if ($this->ot_exist($group,'grp')) {
			$atmp=$this->ot_readif('users.json','grp/'.$group);
			if ($this->ot_maxvalue($atmp[$this->id],10,"C0010M012")) {
				$this->retval=$this->ot_readif('features.json','grp/'.$group);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function GrpAddFtr($group, $Feature, $level)
	{
		if ($this->ot_exist($group,'grp')) {
			if ($this->ot_can(2,$Feature)) {
				$atmp=$this->ot_readif('users.json','grp/'.$group);
				if ($this->ot_maxvalue($atmp[$this->id],2,"C0010M012")) {
					if ($this->ot_exist($Feature)) {
						$this->ot_addin($Feature,$level,'features.json','grp/'.$group);
						$this->ot_addin($group,$level,'groups.json',$Feature);										}
				}
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function GrpChgFtr($group, $Feature, $level)
	{
		if ($this->ot_exist($group,'grp')) {
			if ($this->ot_can(2,$Feature)) {
				$atmp=$this->ot_readif('users.json','grp/'.$group);
				if ($this->ot_maxvalue($atmp[$this->id],3,"C0010M012")) {
					if ($this->ot_exist($Feature)) {
						$this->ot_changein($Feature,$level,'features.json','grp/'.$group);
						$this->ot_changein($group,$level,'groups.json',$Feature);										}
				}
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function GrpDltFtr($group, $Feature)
	{
		if ($this->ot_exist($group,'grp')) {
			if ($this->ot_can(2,$Feature)) {
				$atmp=$this->ot_readif('users.json','grp/'.$group);
				if ($this->ot_maxvalue($atmp[$this->id],3,"C0010M012")) {
					if ($this->ot_exist($Feature)) {
						$this->ot_deletein($Feature,'features.json','grp/'.$group);
						$this->ot_deletein($group,'groups.json',$Feature);											}
				}
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function GrpShwPbl($group)
	{
		$this->retval=[];
		if ($this->ot_exist($group,'grp')) {
			$this->retval=$this->ot_readif('public.json','grp/'.$group);
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function GrpAddPbl($group, $code, $value)
	{
		if ($this->ot_exist($group,'grp')) {
			$atmp=$this->ot_readif('users.json','grp/'.$group);
			if ($this->ot_maxvalue($atmp[$this->id],2,"C0010M012")) {
				$this->ot_addin($code,$value,'public.json','grp/'.$group);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	
	function GrpChgPbl($group, $code, $value)
	{
		if ($this->ot_exist($group,'grp')) {
			$atmp=$this->ot_readif('users.json','grp/'.$group);
			if ($this->ot_maxvalue($atmp[$this->id],3,"C0010M012")) {
				$this->ot_changein($code,$value,'public.json','grp/'.$group);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function GrpDltPbl($group, $code)
	{
		if ($this->ot_exist($group,'grp')) {
			$atmp=$this->ot_readif('users.json','grp/'.$group);
			if ($this->ot_maxvalue($atmp[$this->id],1,"C0010M012")) {
				$this->ot_deletein($code,'public.json','grp/'.$group);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function GrpShwPrv($group)
	{
		$this->retval=[];
		if ($this->ot_exist($group,'grp')) {
			$atmp=$this->ot_readif('users.json','grp/'.$group);
			if ($this->ot_maxvalue($atmp[$this->id],10,"C0010M012")) {
				$this->retval=$this->ot_readif('private.json','grp/'.$group);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
	
	function GrpAddPrv($group, $code, $value)
	{
		if ($this->ot_exist($group,'grp')) {
			$atmp=$this->ot_readif('users.json','grp/'.$group);
			if ($this->ot_maxvalue($atmp[$this->id],2,"C0010M012")) {
				$this->ot_addin($code,$value,'private.json','grp/'.$group);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function GrpChgPrv($group, $code, $value)
	{
		if ($this->ot_exist($group,'grp')) {
			$atmp=$this->ot_readif('users.json','grp/'.$group);
			if ($this->ot_maxvalue($atmp[$this->id],3,"C0010M012")) {
				$this->ot_changein($code,$value,'private.json','grp/'.$group);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}

	function GrpDltPrv($group, $code)
	{
		if ($this->ot_exist($group,'grp')) {
			$atmp=$this->ot_readif('users.json','grp/'.$group);
			if ($this->ot_maxvalue($atmp[$this->id],1,"C0010M012")) {
				$this->ot_deletein($code,'private.json','grp/'.$group);
			}
		}
		$this->ot_log( __METHOD__ , __FUNCTION__ , func_get_args() , $this->retval );
		return $this->retval;
	}
}
?>