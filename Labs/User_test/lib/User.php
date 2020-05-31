<?php
	class User {

		  private $name;
		  private $email;
		public function __construct($name,$email){
			$this->name=$name;
			$this->email=$email;
			
		}
		public function getName($name="Mahmoud"){
			$this->name=$name;
			$pattern = "/[a-zA-z]+/";
			if(preg_match($pattern,$name)){
				return $name;
			}else{
				return null;
			}
		
			
		}
		public function getEmail($email="Mahmoud@gmail.com"){
			$this->email=$email;
			
			if(filter_var($email, FILTER_VALIDATE_EMAIL)){
				return $email;
			}else{
				return null;
			}
		
		}
		public function delete(){
	
	
			return $this->name=null && $this->email=null;
		}
		
	}

		

	
