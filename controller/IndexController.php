<?php 

class User 
{
	public $name;
	public $lastName;
	
	public function __constuct($name,$lastName) {
		$this->name = $name;
		$this->lastName = $lastName;
	}
	
}