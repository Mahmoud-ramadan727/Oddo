<?php
	class UserTest extends \PHPUnit\Framework\TestCase {
		public function setup():void{
			$this->user=new User("Mahmoud","Mahmoud@Gmail.com");
		}
		public function tearDown():void{
            $this->user=null;
        }
		public function test_function_getName_return_name(){
			$this->assertTrue($this->user->getName()=="Mahmoud");
		}
		public function test_when_change_name_return_new_name(){
			$this->assertTrue($this->user->getName("Samy")=="Samy");
		}
		public function test_function_getEmail_return_email(){
			$this->assertTrue($this->user->getEmail()=="Mahmoud@gmail.com");
		}
		public function test_when_change_email_return_new_email(){
			$this->assertTrue($this->user->getEmail("Samy@gmail.com")=="Samy@gmail.com");
		}
        public function test_user_is_equal_to_null(){
			$this->assertTrue($this->user->delete()==null);
		}

	}

