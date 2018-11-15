<?php

	class Pazon{
		private $Firstname = 'Neyo';
		private $Surname = 'Mad';

		function getFirstname(){
			return($this->Firstname);
		}

		function getSurname(){
			return($this->Surname);
		}
	}
	//klass

?>

<?php
	class Employee{
		public $name = 'dizel';
		public $startdate;
		public $gender;
	}

	$emp = new Employee();
	$emp->name = 'John';
	$emp->startdate = "25-04-2018";
	$emp->gender = 'male';

	echo("<h1>".$emp->name."</h1>"." ");
	echo("is"." ".$emp->gender);


	/*class Receptionist extends Employee{
		function bookslot(){

		}
	}

	class Doctor extends Employee{
		function prescribedrug(){

		}
	}*/
?>