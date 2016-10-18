<?php  


Class EzRouter {
	private $match = null;
	private $path = null;
	private $host = null;
	private $uri = null;

	public function __construct(){
		$this->uri = $_SERVER["REQUEST_URI"];
		$this->host = $_SERVER["HTTP_HOST"];
		$this->path = $this->host.$this->uri;
	}
	public function route($WtoMatch, $callback = ""){
		
		$this->match = $WtoMatch;
		if($this->match === $this->uri){
			call_user_func($callback);
			return $this;
		}
		else{
			return;	
		}	
		
	}
	public function end(){
		echo "route not found";

	}

}