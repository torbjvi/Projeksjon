<?php
class Person
{
	/* Denne klassen henter kun data fra databasen */
	
	public $name;
	public $email;
	public $graduateYear,$bilde,$birthday,$username;
	public $user_flags = Array();
	function __construct($navn, $brukernavn, $epost, $avgangsaar, $tilganger, $bilde, $bursdag) 
	{
		
		$this->name = $navn;
		$this->email = $epost;
		$this->username = $brukernavn;
		$this->bilde = $bilde;
		$this->birthday = $bursdag;
		$this->graduateYear = $avgangsaar;
		
	}
	public static function retrievePerson($id, $dbh)
			{
				throw new Exception("Not yet implemented :(");
			}
	
}


?>