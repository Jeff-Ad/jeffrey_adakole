<?php
require_once('session.php'); 
require_once('functions.php'); 
class smsg{
	private $message;
	private function getmsg($msg){
	      $_SESSION['msg']=$msg;
		}
	private function returnmsg(){
		if(isset($_SESSION['msg'])){
		$this->message=$_SESSION['msg'];
		unset($_SESSION['msg']);}
		}
	public function messg($msg=0){
		if(!empty($msg)){
			$this->getmsg($msg);
			}else{$this->returnmsg();
			if($this->message!=""){
			echo "<p id=\"alert\">".$this->message."</p>";}
			}
		
		}
	
	public function messg2($msg=0){
		if(!empty($msg)){
			$this->getmsg($msg);
			}else{$this->returnmsg();
			if($this->message!=""){
			echo $this->message;}
			}
		
		}
		}
$message=new smsg;
?>