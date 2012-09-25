<?php
/*
En event består av dette
Beskrivelse
Dato
Sted
Påmeldingsstart
Påmeldingsslutt
Plassbegrensning
Adgangsbeggrensning
Deltakerliste

Hva som trengs:
	Create event
	Retrieve event
	Add person to event
	Remove person to event
	Update event
*/	
class Event
{
	private $id, $date, $place, $description, $signupStart, $signupStop, $yearRestriction, $attendees, $openForEveryOne, $maxPersons, $createdBy;

	function __construct($id, $date, $place,$description,$signupStart,
						$signupStop,$yearRestriction, $maxPersons, $createdBy)
	{
		$this->id = $id;
		$this->date = $date;
		$this->place = $place;
		$this->description = $description;
		$this->signupStart = $signupStart;
		$this->signupStop = $signupStop;
		$this->yearRestriction = $yearRestriction;
		$this->openForEveryOne = $openForEveryone;
		$this->createdBy = $createdBy;
		$this->maxPersons = $maxPersons;
		
	}
	
	
	public function updateEvent($id, $date, $place,$description,$signupStart,
						$signupStop,$yearRestriction, $maxPersons, $createdBy)
	{
		throw new Exception("Not implemented yet!");						
	}
	
	
	
	public static function retrieveEvent($eventid, $dbh)
	{
		$query = sprintf("SELECT * FROM `event` WHERE `id` = '%s' LIMIT 1;", mysql_real_escape_string($id));
		
		foreach ($dbh->query($query) as $row) {
			$event = $row;
		}
		$person = Person::retrievePerson($event['id'], $dbh);
		return new Event($event['id'], $event['time'],$event['place'],$event['description'],
				$event['regStart'], $event['regStop'],$event['minGrad'],$event['maxPers'],$person);
	}
	
	public static function retrieveUpcomingEvents($no) {
		//Retreives the specified number of upcomming events
		//If $no equals 0 retrieve all upcomming events ordered by date.
		$query = sprintf("SELECT * FROM `event` ORDER BY `event`.`time` ASC LIMIT 0 , %s;", $no);
		$events = array();
		foreach ($dbh->query($query) as $event) {
			$person = Person::retrievePerson($event['id'], $dbh);
			$events[] = new Event($event['id'], $event['time'],$event['place'],$event['description'],
				$event['regStart'], $event['regStop'],$event['minGrad'],$event['maxPers'],$person);
		}
		
		return $events;
		
	}
	
}
	
?>
