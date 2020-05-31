<?php
	class FactorialTest extends \PHPUnit\Framework\TestCase {
		public function setup():void{
			$this->factorial = new Factorial();
		}
		public function tearDown():void{

        }

		public function test_factorial_0_is_equal_to_1(){
			$this->assertTrue($this->factorial->result(0)==1);
		}
		public function test_factorial_1_is_equal_to_1(){
			$this->assertTrue($this->factorial->result(1)==1);
		}
		public function test_factorial_5_is_equal_to_120(){
            $this->assertTrue($this->factorial->result(5)==120);
        }
		public function test_factorial_rand_n_is_equal_to_fractional_n_sub_1_muliply_by_n(){
            $this->assertTrue($this->factorial->result(5)==$this->factorial->result(5-1)*5);
        }
		public function test_factorial_negativeNumber_is_equal_to_null(){
            $this->assertTrue($this->factorial->result(-3)==null);
        }
		public function test_factorial_floatNumber_is_equal_to_null(){
            $this->assertTrue($this->factorial->result(1.5)==null);
        }
        public function test_factorial_of_false_is_equal_to_null(){
            $this->assertTrue($this->factorial->result(false)==null);
        }
		public function test_factorial_abc_is_equal_to_null(){
            $this->assertTrue($this->factorial->result('abc')==null);
        }

	}

