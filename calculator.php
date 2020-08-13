class Calc{
		public $res;
	    function cal(){
		global $res;
		$count = count($res);
		if ($count>3) {
		return "Error";
		}
		else{
			$x  = $res[0];
			$op = $res[1];
			$y  = $res[2];
			switch($op){
				case "+": return $x+$y;
				case "*": return $x*$y;
				case "-": return $x-$y;
				case "/": 
					if($y==0) return "Error: Can't Divide By Zero"; 
					else return $x/$y;
				default : return "Error: Wrong Syntax. Please Enter Like this \"5 + 9\"";
			}
		}
	}
	function __construct($a){
		global $res;
		$res = explode(" ", $a);
	}
};
