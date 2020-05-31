<?php
	class Factorial {

  		protected $n;
		public function __construct(){
			
		}
		public function result($n){
			$this->n=$n;
			$factorial = 1;
			
			if($n==0 && is_int($n)){
				return $factorial;	
			}else if($n>0 && is_int($n)){
				for ($i = 1; $i <=$this->n; $i++){
					$factorial *= $i;
				}
			  	return $factorial;
			}else{
				return null;
			}
			
		}
	}

	 
	

	
