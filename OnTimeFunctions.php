<?phptrait Functions{protected function ot_connect($value=TRUE){$retval=TRUE;$this->err='0';if ($value){if (!$this->conected){$retval=FALSE;$this->err='C0010M011';}}else{if ($this->conected){$retval=FALSE;$this->err='C0010M021';}}$this->retval=$retval;return $retval;}protected function ot_qexist($file, $inside='no'){if($inside=='no'){return(file_exists($this->container.'/'.$file));}else{return(file_exists($this->container.'/'.$inside. '/'.$file));}}protected function ot_exist($file, $inside='no'){$retval = FALSE;$this->err="C0010M008";if ($inside=='no'){if (file_exists($this->container.'/'.$file)){$retval = TRUE;$this->err="0";};} else{if (file_exists($this->container.'/'.$inside. '/'.$file)){$retval = TRUE;$this->err="0";}}$this->retval=$retval;return $retval;}protected function not_exist($file, $inside='no'){$retval = FALSE;$this->err="C0010M007";if ($inside=='no') {if (!file_exists($this->container.'/'.$file)) {$retval = TRUE;$this->err="0";};} else {if (!file_exists($this->container.'/'.$inside. '/'.$file)) {$retval = TRUE;$this->err="0";}}$this->retval=$retval;return $retval;}protected function ot_can($can, $safety){$this->err='0';$retval=FALSE;if($this->conected){if(array_key_exists($safety, $this->safety)){if($this->safety[$safety]>$can){$this->err="C0010M012";}else{$retval=TRUE;}}else{$this->err="C0010M012";}}else{$this->err='C0010M011';}return $retval;}protected function ot_remove($content, $inside='no'){if($inside=='no'){$content=$this->container.'/'.$content;}else{$content=$this->container.'/'.$inside. '/'.$content;}if(file_exists($content)){$this->ot_destroy($content);}else{$this->err="C0010M008";}return $this->err;}protected function ot_create($content, $inside='no'){$this->err="0";$retval=TRUE;if($inside=='no'){$content=$this->container.'/'.$content;}else{$content=$this->container.'/'.$inside. '/'.$content;}if(! mkdir($content , 0777)){$this->err="C0010M012";$retval=FALSE;}return $retval;}protected function ot_destroy($what){foreach(glob($what . "/*")as $eachone){if(is_dir($eachone)){ot_destroy($eachone);}else{unlink($eachone);}}rmdir($what);}protected function ot_getin($what){$retval=[];foreach (glob($what . "/*")as $eachone) {if (is_dir($eachone)) {$eachone = str_replace ( $what."/" , '',  $eachone);$retval[$eachone]=$eachone;}}return $retval;}protected function ot_now($how='Y-m-d H:i:s'){$now=new DateTime();$fecha=$now->format($how);return $fecha;}protected function ot_RandomString($large){$characters='0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';$randstring='X';for ($i=0;$i<$large;$i++){$randstring=$randstring.$characters[rand(0,strlen($characters)-1)];}return $randstring;}protected function ot_clean($data){$data=trim($data);$data=stripslashes($data);$data=htmlspecialchars($data);return $data;}protected function ot_value($data,$value,$error){$this->retval=TRUE;if ($data!=$value) {$this->retval=FALSE;$this->err=$error;}return $this->retval;}protected function not_value($data, $value, $error){$this->retval=TRUE;if ($data==$value) {$this->retval=FALSE;$this->err=$error;}return $this->retval;}protected function ot_name($inside, $name='no'){$retval='Not exist';if ($name=='no') {$tmp=$this->ot_read('admin.json',$inside);} else {$tmp=$this->ot_read('admin.json',$inside.'/'.$name);}$retval = $tmp['name'].'('.$tmp['nick'].')';return $retval;}protected function ot_maxvalue($data, $value, $error){$this->retval=TRUE;if ($data>$value) {$this->retval=FALSE;$this->err=$error;}return $this->retval;}}